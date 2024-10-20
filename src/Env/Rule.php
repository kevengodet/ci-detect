<?php

declare(strict_types=1);

namespace Keven\CiDetect\Env;

interface Rule
{
    public static function create(string|array $rawRule): ?Rule;
    public function matches(array $env): bool;
}
