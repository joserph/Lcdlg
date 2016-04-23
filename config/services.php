<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '8580914532-nfrqdc2al4dikupfabfri7egism2jc3s.apps.googleusercontent.com',
        'client_secret' => 'ULohnmG0esWar8nU1i3mtSxc',
        'redirect' => 'http://lcdlg.dev/social/callback/google',
    ],

    'facebook' => [
        'client_id' => '1307026012657319',
        'client_secret' => '2e9526219941801acf906ed0294dcf30',
        'redirect' => 'http://lcdlg.dev/social/callback/facebook',
    ],

];
