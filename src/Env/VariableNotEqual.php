<?php

declare(strict_types=1);

namespace Keven\CiDetect\Env;

final class VariableNotEqual implements Rule
{
    public function __construct(private string $name, private $ne) {}

    public static function create(string|array $rawRule): ?Rule
    {
        if (!is_array($rawRule)) {
            return null;
        }

        if (!isset($rawRule['env']) || !isset($rawRule['ne']) || count($rawRule) > 2) {
            return null;
        }

        return new self($rawRule['env'], $rawRule['ne']);
    }

    public function matches(array $env): bool
    {
        return array_key_exists($this->name, $env) && $env[$this->name] != $this->ne;
    }
}
