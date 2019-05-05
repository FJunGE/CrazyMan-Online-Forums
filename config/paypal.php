<?php
return [
    'client_id' => env('PAYPAL_CLIENT_ID',''),
    'secret'    => env('PAYPAL_SECRET', ''),
    'settings'  => [
        'mode'  => env('PAYPAL_MODE', 'live'),
        'http.ConnectionTimeOut'    => 40,
        'log.LogEnabled'    => true,
        'log.FileName'  => storage_path() . '/logs/paypal.log',
        'log.LogLevel'  => 'ERROR',
    ],
];