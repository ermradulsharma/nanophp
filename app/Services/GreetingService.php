<?php

namespace App\Services;

class GreetingService
{
    public function greet(string $name = 'Developer')
    {
        return "Hello, {$name}! NanoPHP has resolved this service for you.";
    }
}

