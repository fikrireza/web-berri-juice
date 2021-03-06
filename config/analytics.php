<?php

return [

    /*
     * The view id of which you want to display data.
     */
    // 'view_id' => env('ANALYTICS_VIEW_ID'),
    // 'view_id' => '155477540',
    'view_id' => '158564119',

    /*
     * Path to the client secret json file. Take a look at the README of this package
     * to learn how to get this file.
     */
    // 'service_account_credentials_json' => storage_path('app/analytics/service-account-credentials.json'),
    // 'service_account_credentials_json' => public_path('google-analitic-key/Gofresscoid-7f00f0873004.json'),
    'service_account_credentials_json' => public_path('google-analitic-key/amadeo-developer-0541e39e644d.json'),

    /*
     * The amount of minutes the Google API responses will be cached.
     * If you set this to zero, the responses won't be cached at all.
     */
    'cache_lifetime_in_minutes' => 60 * 24,

    /*
     * Here you may configure the "store" that the underlying Google_Client will
     * use to store it's data.  You may also add extra parameters that will
     * be passed on setCacheConfig (see docs for google-api-php-client).
     *
     * Optional parameters: "lifetime", "prefix"
     */
    'cache' => [
        'store' => 'file',
    ],
];
