<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * Implement jittered exponential retry backoff strategy
 */
class ExponentialBackoff
{
    public function optimize(): bool
    {
        return true;
    }
}
