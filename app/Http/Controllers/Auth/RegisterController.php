<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/user/dashboard';

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Validate and create a new user (email OR phone registration).
     */
    public function register(Request $request)
    {
        $input   = $request->input('email'); // field is used for both email & phone
        $isEmail = filter_var($input, FILTER_VALIDATE_EMAIL);

        // Build validation rules dynamically
        if ($isEmail) {
            $uniqueRule     = 'unique:users,email';
            $uniqueMessage  = 'This email is already registered.';
            $formatRule     = 'email';
            $formatMessage  = 'Please enter a valid email address.';
        } else {
            $uniqueRule     = 'unique:users,phone';
            $uniqueMessage  = 'This phone number is already registered.';
            $formatRule     = 'regex:/^[0-9+\\-\\s]{7,15}$/';
            $formatMessage  = 'Please enter a valid phone number.';
        }

        $request->validate(
            [
                'email'    => ['required', 'string', $formatRule, $uniqueRule],
                'password' => ['required', 'string', 'min:6'],
            ],
            [
                'email.required' => 'Please enter email or phone number.',
                'email.email'    => $formatMessage,
                'email.regex'    => $formatMessage,
                'email.unique'   => $uniqueMessage,
                'password.required' => 'Please enter a password.',
                'password.min'      => 'Password must be at least 6 characters.',
            ]
        );

        // Generate unique user_code
        do {
            $userCode = random_int(100000, 999999);
        } while (User::where('user_code', $userCode)->exists());

        $userData = [
            'user_code' => $userCode,
            'password'  => Hash::make($request->input('password')),
        ];

        if ($isEmail) {
            $userData['email'] = $input;
        } else {
            $userData['phone'] = $input;
        }

        $user = User::create($userData);

        Auth::login($user);

        // After registration, redirect to the payment gateway if the user
        // clicked the enrollment button before they had an account.
        if ($request->input('enrollment_intent') === '1') {
            return redirect()->route('enrollment.pay');
        }

        return redirect($this->redirectTo);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, []);
    }

    protected function create(array $data)
    {
        return new User();
    }
}
