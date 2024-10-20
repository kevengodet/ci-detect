<?php

declare(strict_types=1);

namespace Keven\CiDetect;

final readonly class Vendor
{
    public function __construct(
        public string $name,
        public bool   $isPR = false,
    ) {}
}
