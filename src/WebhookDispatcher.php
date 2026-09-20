<?php

declare(strict_types=1);

namespace SmitBackend\HookRelay;

use SmitBackend\HookRelay\Contracts\SignatureVerifierInterface;

/**
 * Class WebhookDispatcher
 *
 * @package SmitBackend\HookRelay
 */
class WebhookDispatcher implements SignatureVerifierInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
