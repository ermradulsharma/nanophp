<?php

use function DI\autowire;
use function DI\create;

return [
    // Application-specific Services
    'auth.middleware' => \DI\autowire(\App\Http\Middleware\Authenticate::class),

    // Custom Services
    \App\Services\GreetingService::class => \DI\create(\App\Services\GreetingService::class),
];
