<?php

declare(strict_types=1);

namespace Keven\CiDetect\Env;

final readonly class VariableName implements Rule
{
    public function __construct(private string $name) {}

    public static function create(string|array $rawRule): ?Rule
    {
        if (!is_string($rawRule)) {
            return null;
        }

        return new self($rawRule);
    }

    public function matches(array $env): bool
    {
        return array_key_exists($this->name, $env);
    }
}
