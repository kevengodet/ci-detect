<?php

declare(strict_types=1);

namespace Keven\CiDetect\Env;

final class Matcher
{
    /** @throws \ReflectionException */
    public function __construct(
        private ?array $env = null,
        private ?array $ruleClasses = null,
    ) {
        $this->env ??= getenv();
        $this->ruleClasses ??= self::listRuleClasses();
    }

    public function matches(string|array $rawRule): bool
    {
        /** @var Rule $className */
        foreach ($this->ruleClasses as $className) {
            if ($rule = $className::create($rawRule) and $rule->matches($this->env)) {
                return true;
            }
        }

        return false;
    }

    /** @throws \ReflectionException */
    private static function listRuleClasses(): array
    {
        static $classes;

        if ($classes) {
            return $classes;
        }

        foreach (new \DirectoryIterator(__DIR__) as $file) {
            if (!$file->isFile()) {
                continue;
            }

            $tokens = token_get_all(file_get_contents($file->getPath()));
            $count = count($tokens);
            for ($i = 2; $i < $count; $i++) {
                if (   $tokens[$i - 2][0] == T_CLASS
                    && $tokens[$i - 1][0] == T_WHITESPACE
                    && $tokens[$i][0] == T_STRING) {

                    $className = $tokens[$i][1];
                    if ((new \ReflectionClass($className))->implementsInterface(Rule::class)) {
                        $classes[] = $className;
                    }
                }
            }
        }

        return $classes;
    }
}
