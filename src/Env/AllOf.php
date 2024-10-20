<?php

declare(strict_types=1);

namespace Keven\CiDetect\Env;

final readonly class AllOf implements Rule
{
    private array $rules;

    public function __construct(Rule ...$rules)
    {
        $this->rules = $rules;
    }

    public static function create(array|string $rawRule): ?Rule
    {
        if (!is_array($rawRule) || !array_is_list($rawRule)) {
            return null;
        }

        return new self(...array_map(fn($s) => VariableName::create($s), $rawRule));
    }

    public function matches(array $env): bool
    {
        foreach ($this->rules as $rule) {
            if (!$rule->matches($env)) {
                return false;
            }
        }

        return true;
    }
}
