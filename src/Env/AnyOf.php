<?php

declare(strict_types=1);

namespace Keven\CiDetect\Env;

final class AnyOf implements Rule
{
    private array $rules;

    public function __construct(Rule ...$rules)
    {
        $this->rules = $rules;
    }

    public static function create(array|string $rawRule): ?Rule
    {
        if (!is_array($rawRule) ||
            !isset($rawRule['any']) ||
            !is_array($rawRule['any']) ||
            count($rawRule) > 1) {
            return null;
        }

        return new self(...array_map(fn($s) => VariableName::create($s), $rawRule['any']));
    }

    public function matches(array $env): bool
    {
        foreach ($this->rules as $rule) {
            if ($rule->matches($env)) {
                return true;
            }
        }

        return false;
    }
}
