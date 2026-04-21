<?php

declare(strict_types=1);

require dirname(__DIR__).'/vendor/autoload.php';

// Base test cases (global namespace) must load before concrete test class files.
require __DIR__.'/TestCase.php';
require __DIR__.'/IntegrationTestCase.php';

require __DIR__.'/stubs/User.php';
require __DIR__.'/stubs/Tag.php';
