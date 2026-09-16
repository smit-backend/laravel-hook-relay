<?php

declare(strict_types=1);

namespace SmitBackend\HookRelay\Contracts;

/**
 * Interface SignatureVerifierInterface
 *
 * @package SmitBackend\HookRelay
 */
interface SignatureVerifierInterface
{
    public function execute(array $payload = []): mixed;
}
