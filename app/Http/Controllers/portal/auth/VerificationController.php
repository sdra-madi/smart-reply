<?php

namespace App\Http\Controllers\portal\auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    //show verification page
    public function showVerificationForm()
    {
        return view('auth.verify-email');
    }
    // Process the verification 
    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
          // Redirect to profile after verification
        return redirect('/dashboard/profile'); 
    }
    // Resend verification email
    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link resent!');
    }
}
