<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Nano\Framework\Application;
use Nano\Framework\Http\Request;
use Laminas\Diactoros\ServerRequestFactory;

// 1. Initialize DI Container
$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(require __DIR__ . '/../packages/framework/src/CoreDefinitions.php');
if (file_exists(__DIR__ . '/../config/definitions.php')) {
    $builder->addDefinitions(__DIR__ . '/../config/definitions.php');
}
$container = $builder->build();

// 2. Initialize Facades
\Nano\Framework\Facade::setContainer($container);

// 3. Initialize Application
$app = new Application($container);

echo "--- Testing Storage Manager Directly ---\n";
try {
    $storage = $container->get('storage');
    $storage->put('test_direct.txt', 'Direct Storage Work!');
    echo "Storage Get: " . $storage->get('test_direct.txt') . "\n";
    echo "✅ Direct Storage Test Passed\n";
} catch (\Throwable $e) {
    echo "❌ Direct Storage Test Failed: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString() . "\n";
}

echo "\n--- Testing Cache Manager Directly ---\n";
try {
    $cache = $container->get('cache');
    $cache->put('direct-cache', 'Direct Cache Work!', 60);
    echo "Cache Get: " . $cache->get('direct-cache') . "\n";
    echo "✅ Direct Cache Test Passed\n";
} catch (\Throwable $e) {
    echo "❌ Direct Cache Test Failed: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString() . "\n";
}

echo "\n--- Testing via Facades ---\n";
try {
    \Nano\Framework\Facades\Storage::put('facade_test.txt', 'Facade Work!');
    echo "Facade Storage Get: " . \Nano\Framework\Facades\Storage::get('facade_test.txt') . "\n";
    echo "✅ Facade Test Passed\n";
} catch (\Throwable $e) {
    echo "❌ Facade Test Failed: " . $e->getMessage() . "\n";
    // We already know this might fail, let's see why
}

echo "\n✅ End of verification script.\n";
