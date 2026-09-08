<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/user/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Detect whether input is email or phone and return correct credentials.
     */
    protected function credentials(Request $request)
    {
        $input = $request->input($this->username());
        $field = filter_var($input, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        return [
            $field    => $input,
            'password' => $request->input('password'),
        ];
    }

    /**
     * Validate login with Bangla messages.
     */
    protected function validateLogin(Request $request)
    {
        $request->validate(
            [
                $this->username() => 'required|string',
                'password'        => 'required|string',
            ],
            [
                $this->username() . '.required' => 'ইমেইল বা ফোন নাম্বার দিন।',
                'password.required'             => 'পাসওয়ার্ড দিন।',
            ]
        );
    }

    /**
     * Return Bangla error on failed login.
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => ['ইমেইল/ফোন বা পাসওয়ার্ড সঠিক নয়।'],
        ]);
    }

    /**
     * After a successful login, redirect to the payment gateway when the user
     * clicked the enrollment button before signing in; otherwise fall back to
     * the regular dashboard redirect.
     */
    protected function authenticated(Request $request, $user)
    {
        if ($request->input('enrollment_intent') === '1') {
            return redirect()->route('enrollment.pay');
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
