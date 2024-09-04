<?php

namespace App\Providers;

use Facebook\Facebook;
use Illuminate\Support\Facades\Http;

class FacebookRepository
{
    protected $facebook;

    public function __construct()
    {
        $this->facebook = new Facebook([
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => env('FACEBOOK_DEFAULT_GRAPH_VERSION')
        ]);
    }

    public function redirectTo()
    {
        $helper = $this->facebook->getRedirectLoginHelper();
        $permissions = [
            'email',
            'public_profile',
            'pages_manage_engagement',
            'pages_read_user_content',
            'pages_manage_posts',
            'read_insights',
            'pages_manage_metadata',
            'pages_read_engagement',
            'pages_show_list',
            'pages_messaging',
            'business_management',
        ];

        $redirectUri = env('FACEBOOK_CALLBACK');
        return $helper->getLoginUrl($redirectUri, $permissions);
    }

    public function handleCallback($request)
    {
        $code = $request->input('code');
        $appId = env('FACEBOOK_APP_ID');
        $appSecret = env('FACEBOOK_APP_SECRET');
        $redirectUri = urlencode(env('FACEBOOK_CALLBACK'));
        $response = Http::get("https://graph.facebook.com/v20.0/oauth/access_token?client_id=$appId&redirect_uri=$redirectUri&client_secret=$appSecret&code=$code");
        $accessToken = $response['access_token'];
        $response = Http::get("https://graph.facebook.com/me?fields=id,name,email,picture&access_token=$accessToken");
        if ($response->successful()) {
            $userData = $response->json();
            return ([$accessToken, $userData]);
        } else {
            // Handle error
            $error = $response->json();
            return ($error['error']['message']);
            // Access error details, e.g., $error['error']['message']
        }
    }

    public function getPages($accessToken)
    {
        // Make a GET request to Facebook Graph API's /me/accounts endpoint
        $response = Http::get("https://graph.facebook.com/v20.0/me/accounts", [
            'access_token' => $accessToken,
        ]);

        // Check if the request was successful
        if ($response->successful()) {
            $pages = $response->json()['data'];
            // Iterate over each page to fetch detailed information
            foreach ($pages as $page) {
                $pageId = $page['id'];
                $pageInfoResponse = Http::get("https://graph.facebook.com/v20.0/$pageId", [
                    'fields' => 'id,name,about,category,link,picture',
                    'access_token' => $accessToken,
                ]);
                if ($pageInfoResponse->successful()) {
                    $pageInfo = $pageInfoResponse->json();
                    $page = array_merge($page, $pageInfo);
                } else {
                    // Handle error response for page info
                    $error = $pageInfoResponse->json();
                    // Log or handle error
                }
            }

            return $pages;
        } else {
            // Handle error response
            $error = $response->json();
            // You can log or return the error message
            return $error;
        }
    }

}