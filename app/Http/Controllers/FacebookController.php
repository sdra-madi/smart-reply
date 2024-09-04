<?php

namespace App\Http\Controllers;

use App\Providers\FacebookRepository;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
    protected $facebook;

    public function __construct()
    {
        $this->facebook = new FacebookRepository();
    }
    public function RedirectToFacebook()
    {
        return redirect($this->facebook->redirectTo());
    }
    public function HandleCallback(Request $request)
    {
        $data = $this->facebook->handleCallback($request);
        $access_token = $data[0];     //get access token for user 
        $user_face = $data[1];       //get facebook account for user 
        $pages = $this->facebook->getPages($data[0]);   //get facebook pages for user  

         ///now handle the user data account and user data pages
    }
    
}
