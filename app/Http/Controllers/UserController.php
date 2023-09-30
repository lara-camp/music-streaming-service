<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->route('login', ['type' => 'signin'])->with('message', 'Incorrect password!');
            } else {
                if ($request->remember == true) {
                    $rememberToken = $user->createToken('auth_token')->plainTextToken;
                    $user->update(['remember_token' => $rememberToken]);
                    Session::put('remember_token', $rememberToken);
                }
                return redirect()->route('top');
            }
        }
        return redirect()->route('login', ['type' => 'signin'])->with('message', 'no user!');
    }

    public function register(RegisterUserRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $displayName = $request->displayName;
        $password = $request->password;

        try {
            User::create([
                'name' => $name,
                'email' => $email,
                'display_name' => $displayName,
                'password' => Hash::make($password),
            ]);
            $sub = "Thank You for Registering!";
            $msg = "Your account has been successfully created, and you can now start enjoying our services.";
            Mail::to($email)->send(new SendMail($name, $email, $sub, $msg));
        } catch (\Exception $e) {
            Log::channel('single')->error($e);
        }
        return redirect()->route('login', ['type' => 'signin']);
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login', ['type' => 'signin']);
    }

    public function forgotPsw(ResetPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        $name = $user->name;
        $email = $request->email;
        $sub = "Password Reset Link";
        $msg = "Your account has been successfully created, and you can now start enjoying our services.";
        Mail::to($email)->send(new SendMail($name, $email, $sub, $msg));
        return redirect()->route('login', ['type' => 'forgotps'])->with('message', 'Password reset link has been sent!');
    }
}
