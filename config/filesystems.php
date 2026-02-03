<?php

return [
    'default' => 'local',

    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => __DIR__ . '/../storage/app',
        ],

        'public' => [
            'driver' => 'local',
            'root' => __DIR__ . '/../storage/app/public',
            'url' => '/storage',
            'visibility' => 'public',
        ],
    ],
];
