<?php

namespace App\Services;

use App\Models\PaymentGatewaySetting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class EpsPaymentService
{
    private ?PaymentGatewaySetting $settings;

    public function __construct()
    {
        $this->settings = PaymentGatewaySetting::where('is_active', 1)->first();
    }


    private function requireSettings(): PaymentGatewaySetting
    {
        if (! $this->settings) {
            Log::error('[EPS] No active payment gateway settings found');
            throw new \RuntimeException('No active payment gateway settings found.');
        }

        return $this->settings;
    }

    private function baseUrl(): string
    {
        return $this->requireSettings()->api_base_url;
    }

    private function buildHash(string $value): string
    {
        $hashKey = $this->requireSettings()->hash_key;

        return base64_encode(hash_hmac('sha512', $value, $hashKey, /* raw_output */ true));
    }


    public function getAccessToken(): string
    {
        $settings = $this->requireSettings();
        $userName = $settings->username;
        $hash     = $this->buildHash($userName);

        Log::info('[EPS] GetToken → request', [
            'url'      => $this->baseUrl() . 'Auth/GetToken',
            'username' => $userName,
        ]);

        $response = Http::timeout(30)
            ->withHeaders([
                'x-hash'       => $hash,
                'Content-Type' => 'application/json',
                'Accept'       => 'application/json',
            ])
            ->post($this->baseUrl() . 'Auth/GetToken', [
                'userName' => $userName,
                'password' => $settings->password,
            ]);

        Log::info('[EPS] GetToken ← response', [
            'http_status' => $response->status(),
            'body'        => $response->json(),
        ]);

        if (! $response->successful() || empty($response->json('token'))) {
            Log::error('[EPS] GetToken failed', [
                'http_status'  => $response->status(),
                'error_code'   => $response->json('errorCode'),
                'error_message'=> $response->json('errorMessage'),
                'raw_body'     => $response->body(),
            ]);

            throw new \RuntimeException(
                'EPS authentication failed: ' . ($response->json('errorMessage') ?? 'Unknown error')
            );
        }

        return $response->json('token');
    }


    public function initializePayment(string $token, array $payload): array
    {
        $merchantTransactionId = $payload['merchantTransactionId'];
        $hash                  = $this->buildHash($merchantTransactionId);

        Log::info('[EPS] InitializeEPS → request', [
            'url'                   => $this->baseUrl() . 'EPSEngine/InitializeEPS',
            'merchantTransactionId' => $merchantTransactionId,
            'totalAmount'           => $payload['totalAmount'],
        ]);

        $response = Http::timeout(30)
            ->withToken($token)
            ->withHeaders([
                'x-hash'       => $hash,
                'Content-Type' => 'application/json',
                'Accept'       => 'application/json',
            ])
            ->post($this->baseUrl() . 'EPSEngine/InitializeEPS', $payload);

        Log::info('[EPS] InitializeEPS ← response', [
            'http_status' => $response->status(),
            'body'        => $response->json(),
        ]);

        if (! $response->successful()) {
            Log::error('[EPS] InitializeEPS HTTP error', [
                'http_status' => $response->status(),
                'raw_body'    => $response->body(),
            ]);

            throw new \RuntimeException(
                'EPS payment initialization failed: ' . ($response->json('ErrorMessage') ?? 'HTTP ' . $response->status())
            );
        }

        $data = $response->json();

        if (empty($data['RedirectURL'])) {
            Log::error('[EPS] InitializeEPS missing RedirectURL', ['body' => $data]);

            throw new \RuntimeException(
                'EPS did not return a redirect URL. Error: ' . ($data['ErrorMessage'] ?? 'No details')
            );
        }

        return $data;
    }


    public function checkTransactionStatus(string $token, string $merchantTransactionId): array
    {
        $hash = $this->buildHash($merchantTransactionId);

        Log::info('[EPS] CheckStatus → request', [
            'url'                   => $this->baseUrl() . 'EPSEngine/CheckMerchantTransactionStatus',
            'merchantTransactionId' => $merchantTransactionId,
        ]);

        $response = Http::timeout(30)
            ->withToken($token)
            ->withHeaders([
                'x-hash' => $hash,
                'Accept' => 'application/json',
            ])
            ->get($this->baseUrl() . 'EPSEngine/CheckMerchantTransactionStatus', [
                'merchantTransactionId' => $merchantTransactionId,
            ]);

        Log::info('[EPS] CheckStatus ← response', [
            'http_status' => $response->status(),
            'body'        => $response->json(),
        ]);

        if (! $response->successful()) {
            Log::error('[EPS] CheckStatus HTTP error', [
                'http_status' => $response->status(),
                'raw_body'    => $response->body(),
            ]);

            throw new \RuntimeException('EPS transaction status check failed: HTTP ' . $response->status());
        }

        return $response->json();
    }

    public function getSettings(): ?PaymentGatewaySetting
    {
        return $this->settings;
    }
}
