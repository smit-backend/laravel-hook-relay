<?php

return [
    'enabled' => env('LARAVEL_HOOK_RELAY_ENABLED', true),
    'timeout' => env('LARAVEL_HOOK_RELAY_TIMEOUT', 30),
    'log_channel' => env('LARAVEL_HOOK_RELAY_LOG', 'stack'),
];
