<?php

declare(strict_types=1);

namespace Env;

use Keven\CiDetect\Env\VariableName;
use PHPUnit\Framework\TestCase;

final class VariableNameTest extends TestCase
{
    public function testCreate(): void
    {
        $rule = VariableName::create('foo');
        $this->assertInstanceOf(VariableName::class, $rule);
    }

    public function testCreateArray(): void
    {
        $rule = VariableName::create([]);
        $this->assertNull($rule);
    }

    public function testMatch(): void
    {
        $rule = VariableName::create('foo');
        $this->assertTrue($rule->matches(['foo' => 1]));
    }

    public function testNoMatch(): void
    {
        $rule = VariableName::create('foo');
        $this->assertFalse($rule->matches(['bar' => 1]));
    }
}
