<?php

return [
    'administrators' => [
        // Add the email addresses of users who should be administrators here.
    ],
    'recaptcha' => [
        'key' => env('RECAPTCHA_KEY'),
        'secret' => env('RECAPTCHA_SECRET')
    ]
];