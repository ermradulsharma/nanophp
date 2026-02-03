<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Nano\Framework\Http\Request;
use Nano\Framework\Facades\Request as RequestFacade;
use Nano\Framework\Middleware\TrimStrings;
use Laminas\Diactoros\ServerRequestFactory;
use DI\ContainerBuilder;

// 1. Mock a PSR-7 Request
$psrRequest = ServerRequestFactory::fromGlobals(
    ['REQUEST_METHOD' => 'POST'],
    ['name' => '  John Doe  ', 'email' => 'john@example.com  '],
    ['userAgent' => 'TestAgent']
);

// 2. Wrap in our fluent Request
$request = new Request($psrRequest);

echo "--- Testing Fluent Request Methods ---\n";
echo "Method: " . $request->method() . "\n";
echo "Input 'name' (untrimmed): '" . $request->input('name') . "'\n";
echo "Has 'email': " . ($request->has('email') ? 'Yes' : 'No') . "\n";
echo "Has 'nonexistent': " . ($request->has('nonexistent') ? 'Yes' : 'No') . "\n";

// 3. Test Facade Integration
$container = new \DI\Container();
$container->set('request', $request);
\Nano\Framework\Facade::setContainer($container);

echo "\n--- Testing Request Facade ---\n";
echo "Facade Method: " . RequestFacade::method() . "\n";
echo "Facade Input 'name': '" . RequestFacade::input('name') . "'\n";

// 4. Test TrimStrings Middleware
echo "\n--- Testing TrimStrings Middleware ---\n";
$middleware = new TrimStrings();
$next = function ($req) {
    return new \Laminas\Diactoros\Response\TextResponse("Next called");
};

$middleware->process($request, $next);

echo "Input 'name' after trim: '" . $request->input('name') . "'\n";
echo "Input 'email' after trim: '" . $request->input('email') . "'\n";

if ($request->input('name') === 'John Doe') {
    echo "\n✅ SUCCESS: TrimStrings worked!\n";
} else {
    echo "\n❌ FAILURE: TrimStrings did not trim correctly.\n";
}
