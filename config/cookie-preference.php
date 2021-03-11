<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Disable or enable the functionality of this package.
    |--------------------------------------------------------------------------
    */
    'enabled' => env('COOKIE_PREFERENCE_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | The functional cookie name in which we will store the preference.
    |--------------------------------------------------------------------------
    */
    'cookie_name' => env('COOKIE_PREFERENCE_NAME', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache'),

    /*
    |--------------------------------------------------------------------------
    | TTL in days
    |--------------------------------------------------------------------------
    */
    'cookie_ttl' => 365 * 20,

    /*
    |--------------------------------------------------------------------------
    | Types of cookies, this setting is application specific and should be updated 
    |--------------------------------------------------------------------------
    */
    'cookie_groups' => [
        'functional' => [ // Only for strictly necessary cookies such as security and session
            [
                'name' => config('session::cookie'), // set to cookie name as string
                'source' => 'local', // set to local for first-party cookies and an URL for third-party (eg. 'facebook.com')
                'ttl' => 60 * 2 // TTL in minutes
            ],
            [
                'name' => 'XSRF-TOKEN',
                'source' => 'local', 
                'ttl' => 60 * 2
            ]
        ],
        'analytics' => [], // Cookies which are used for analytics purposes
        'marketing' => [], // Cookies which are used for marketing and advertisment purposes
        'social' => [], // Cookies which are used for social sharing purposes
    ]
];
