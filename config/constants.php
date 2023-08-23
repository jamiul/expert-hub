<?php

return [
    'hourlyRate' => [
        10 => '< $10/hour',
        20 => '$10-20/hour',
        30 => '$20-30/hour',
        40 => '$30-40/hour',
        50 => '> $40/hour'
    ],

    'durations' => [
        '1 week' => 'Less than 1 week',
        '1 week - 4 week' => '1 week to 4 weeks',
        '1 month - 3 month' => '1 month to 3 months',
        '3 month - 6 month' => '3 months to 6 months',
        '6 month' => 'Over 6 months/Ongoing',
        'unspecified' => 'unspecified'
    ],

    'email' => [
        'register' => [
            'subject' => 'An invitation for registration',
            'body' => 'This email is sent automatically. If you do not recognize this email, please do not access the URL and discard the email. Also, please note that we cannot reply even if you reply.'
        ],

    'Admin' => [
        'role_id' => 9,
        'role_name' => 'Admin'
    ]
    ]

];