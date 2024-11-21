<?php

namespace App\Http\Controllers\portal\facebook;

use App\Http\Controllers\Controller;
use Facebook\Facebook;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
    protected $facebook;
    // The 'Facebook' class is used to create an instance for interacting with the Facebook API.
    public function __construct()
    {
        $this->facebook = new Facebook([
            'app_id' => env('FACEBOOK_APP_ID'), // Your Facebook App ID from the .env file
            'app_secret' => env('FACEBOOK_APP_SECRET'), // Your Facebook App Secret from the .env file
            'default_graph_version' => env('FACEBOOK_DEFAULT_GRAPH_VERSION') // Specify the version of the Facebook Graph API you're using
        ]);
    }
    public function RedirectToFacebook()
    {
        // Step 2: Get the 'RedirectLoginHelper' which helps generate a login URL.
        // This class handles the OAuth flow for redirecting the user to Facebook and getting the access token.
        $helper = $this->facebook->getRedirectLoginHelper();
        // Step 3: Define the permissions your app will request from the user.
        // These permissions allow your app to manage pages, read engagement data, etc.
        $permissions = [
            'email',
            'public_profile',
            // 'pages_manage_engagement', //Reply to comments and manage engagement.
            // 'pages_read_user_content', //Read user-generated content on the page.
            // 'pages_manage_posts', //Publish content to pages.
            // 'read_insights',
            // 'pages_manage_metadata', //Access and update page settings.
            // 'pages_read_engagement', //Read data (like comments) from pages.
            // 'pages_show_list', //List all pages the user manages.
            // 'pages_messaging', //Send and receive messages on behalf of a page.
            // 'business_management',
        ];
        $redirectUri = env('FACEBOOK_CALLBACK');
        // Step 4: Generate the Facebook login URL where the user will be redirected to grant permissions.
        // 'getLoginUrl' takes two arguments: the redirect URI and the permissions array.
        // The redirect URI is where the user will be redirected after successful login.
        $loginUrl = $helper->getLoginUrl($redirectUri, $permissions);
        // Step 5: Redirect the user to the generated Facebook login URL.
        // When the user clicks the button, they will be taken to Facebook to authenticate and grant permissions.
        //dd($helper);
        return redirect($loginUrl);
    }
    // This function handles the Facebook callback after the user logs in and grants permissions.
    public function HandleCallback()
    {
        // Step 2: Get the 'RedirectLoginHelper' to manage the OAuth flow.
        // This helper handles the process of getting the access token after redirecting back to your app.
        $helper = $this->facebook->getRedirectLoginHelper();
        try {
            // Step 3: Retrieve the access token from Facebook.
            // This token is used to authenticate API requests on behalf of the user.
            $accessToken = $helper->getAccessToken();

            // Step 4: Make an API request to get the list of pages the user manages.
            // The '/me/accounts' endpoint returns all the pages associated with the user's account.
            $response = $this->facebook->get('/me/accounts', $accessToken);

            // Step 5: Decode the response body to extract the list of pages.
            // The 'getDecodedBody()' method returns the response as an associative array.
            $pages = $response->getDecodedBody();

            // Step 6: Pass the list of pages to the 'pages' view.
            // The view will display the data to the user.
            return (['pages' => $pages['data']]);
        } catch (\Exception $e) {
            // Step 7: Handle any exceptions that may occur during the process.
            // If an error happens (like an invalid token or failed API request), the user is redirected to the homepage with an error message.
            return redirect('/')->with('error', 'Failed to connect to Facebook');
        }
       // $access_token = $data[0];     //get access token for user 
        //$user_face = $data[1];       //get facebook account for user 
        //$pages = $this->facebook->getPages($data[0]);   //get facebook pages for user  

        ///now handle the user data account and user data pages
    }
}
