<?php

namespace App\Http\Controllers\portal\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
     // Show the registration form
     public function showRegisterForm()
     {
        return view('portal.pages.create');
     }
    public function store(Request $request)
    {
      // User::whereid(2)->delete();
        // Validate the form data
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
        ]);
        // Create a new user
        $user = User::create($request->all());
        $user->sendEmailVerificationNotification();

        // Redirect to login with a message to verify the email
        return redirect()->route('login')->with('success', 'Account created! Please check your email to verify your account.');
    }

     // Handle logout
     public function logout(Request $request)
     {
         Auth::logout(); // Log out the user
         $request->session()->invalidate(); // Invalidate the session
         $request->session()->regenerateToken(); // Regenerate CSRF token
         return redirect()->route('login');
     }
   
}
