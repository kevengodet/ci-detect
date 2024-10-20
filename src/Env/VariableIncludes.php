<?php

declare(strict_types=1);

namespace Keven\CiDetect\Env;

final class VariableIncludes implements Rule
{
    public function __construct(private string $name, private string $includes) {}

    public static function create(string|array $rawRule): ?Rule
    {
        if (!is_array($rawRule)) {
            return null;
        }

        if (!isset($rawRule['env']) || !isset($rawRule['includes']) || count($rawRule) > 2) {
            return null;
        }

        return new self($rawRule['env'], $rawRule['includes']);
    }

    public function matches(array $env): bool
    {
        return
            array_key_exists($this->name, $env) &&
            false !== str_contains((string) $env[$this->name], $this->includes);
    }
}
