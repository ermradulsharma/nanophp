<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that shall be used to write
    | messages to the logs. The name used here should match one of the
    | channels defined in the "channels" configuration array.
    |
    */

    'default' => $_ENV['LOG_CHANNEL'] ?? 'stack',

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Each
    | channel has a "driver" that determines how log messages are handled.
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['daily'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => __DIR__ . '/../storage/logs/nano.log',
            'level' => 'debug',
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => __DIR__ . '/../storage/logs/nano.log',
            'level' => 'debug',
            'days' => 14,
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => 'debug',
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => 'debug',
        ],
    ],

];
