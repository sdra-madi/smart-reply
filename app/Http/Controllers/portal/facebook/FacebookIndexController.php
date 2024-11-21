<?php

namespace App\Http\Controllers\portal\facebook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacebookIndexController extends Controller
{
     public function index()
    {
        return view('dashboard.pages.socialMedia.pageFacebook');
    }
}
