<?php

namespace App\Http\Controllers\portal\auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PasswordResetController extends Controller
{
     // Show password reset request form
     public function requestForm()
     {
         return view('auth.forgot-password');
     }
 
     // Handle sending of reset link
     public function sendResetLink(Request $request)
     {
         $request->validate(['email' => 'required|email']);
 
         $status = Password::sendResetLink(
             $request->only('email')
         );
 
         return $status === Password::RESET_LINK_SENT
                     ? back()->with(['status' => __($status)])
                     : back()->withErrors(['email' => __($status)]);
     }
 
     // Show password reset form
     public function resetForm($token)
     {
         return view('auth.reset-password', ['token' => $token]);
     }
 
     // Handle password reset
     public function resetPassword(Request $request)
     {
         $request->validate([
             'token' => 'required',
             'email' => 'required|email',
             'password' => 'required|string|min:4|confirmed',
         ]);
 
         $status = Password::reset(
             $request->only('email', 'password', 'password_confirmation', 'token'),
             function ($user) use ($request) {
                 $user->forceFill([
                     'password' => Hash::make($request->password)
                 ])->save();
             }
         );
 
         return $status === Password::PASSWORD_RESET
                     ? redirect()->route('login')->with('status', __($status))
                     : back()->withErrors(['email' => [__($status)]]);
     }
}
