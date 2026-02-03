<?php

return [
    'default' => 'file',

    'stores' => [
        'file' => [
            'driver' => 'file',
            'path' => __DIR__ . '/../storage/framework/cache',
        ],

        'array' => [
            'driver' => 'array',
        ],
    ],
];
