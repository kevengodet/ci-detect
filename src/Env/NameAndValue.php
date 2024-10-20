<?php

declare(strict_types=1);

namespace Keven\CiDetect\Env;

final class NameAndValue implements Rule
{
    public function __construct(private readonly string $name, private $value) {}

    public static function create(string|array $rawRule): ?Rule
    {
        if (!is_array($rawRule)) {
            return null;
        }

        if (1 !== count($rawRule)) {
            return null;
        }

        return new self(key($rawRule), current($rawRule));
    }

    public function matches(array $env): bool
    {
        return array_key_exists($this->name, $env) &&
               $env[$this->name] == $this->value;
    }
}
