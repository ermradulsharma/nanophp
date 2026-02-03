<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Nano\Framework\Application;
use Nano\Framework\Facade;
use Nano\Framework\Database;
use DI\ContainerBuilder;

// 1. Load Environment / Config
$cachePath = __DIR__ . '/../storage/framework/cache/config.php';
if (file_exists($cachePath)) {
    $config = require $cachePath;
    $_ENV = array_merge($_ENV, $config['env'] ?? []);
} else {
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->safeLoad();
}

// 2. Boot Database
new Database();

// 3. Build Container
$GLOBALS['__nano_base_path'] = __DIR__ . '/..';
$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(require __DIR__ . '/../vendor/nanophp/framework/src/CoreDefinitions.php');
if (file_exists(__DIR__ . '/../config/definitions.php')) {
    $builder->addDefinitions(__DIR__ . '/../config/definitions.php');
}
$container = $builder->build();

// 4. Initialize Facades
\Nano\Framework\Facade::setContainer($container);

// 5. Create Application instance
$app = new \Nano\Framework\Application($container, __DIR__ . '/..');

return $app;
