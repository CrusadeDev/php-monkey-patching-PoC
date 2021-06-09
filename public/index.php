<?php

require_once dirname(__DIR__).'/src/Value/Stream.php';

use App\Value\Stream;

Stream::wrap();

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool)$context['APP_DEBUG']);
};
