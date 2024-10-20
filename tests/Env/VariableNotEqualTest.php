<?php

declare(strict_types=1);

namespace Env;

use Keven\CiDetect\Env\VariableNotEqual;
use PHPUnit\Framework\TestCase;

final class VariableNotEqualTest extends TestCase
{
    public function testCreate(): void
    {
        $rule = VariableNotEqual::create(['env' => 'foo', 'ne' => 1]);
        $this->assertInstanceOf(VariableNotEqual::class, $rule);
    }

    public function testCreateBad(): void
    {
        $rule = VariableNotEqual::create([]);
        $this->assertNull($rule);
        $rule = VariableNotEqual::create(['foo', 'bar']);
        $this->assertNull($rule);
        $rule = VariableNotEqual::create('foo');
        $this->assertNull($rule);
    }

    public function testMatch(): void
    {
        $rule = VariableNotEqual::create(['env' => 'foo', 'ne' => 1]);
        $this->assertTrue($rule->matches(['foo' => 2]));
    }

    public function testNoMatch(): void
    {
        $rule = VariableNotEqual::create(['env' => 'foo', 'ne' => 1]);
        $this->assertFalse($rule->matches(['bar' => 2]));
        $rule = VariableNotEqual::create(['env' => 'foo', 'ne' => 1]);
        $this->assertFalse($rule->matches(['foo' => 1]));
    }
}
