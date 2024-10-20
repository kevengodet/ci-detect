<?php

declare(strict_types=1);

namespace Env;

use Keven\CiDetect\Env\VariableIncludes;
use PHPUnit\Framework\TestCase;

final class VariableIncludesTest extends TestCase
{
    public function testCreate(): void
    {
        $rule = VariableIncludes::create(['env' => 'foo', 'includes' => 'bar']);
        $this->assertInstanceOf(VariableIncludes::class, $rule);
    }

    public function testCreateBad(): void
    {
        $rule = VariableIncludes::create([]);
        $this->assertNull($rule);
        $rule = VariableIncludes::create(['foo', 'bar']);
        $this->assertNull($rule);
        $rule = VariableIncludes::create('foo');
        $this->assertNull($rule);
    }

    public function testMatch(): void
    {
        $rule = VariableIncludes::create(['env' => 'foo', 'includes' => 'bar']);
        $this->assertTrue($rule->matches(['foo' => 'bar CI']));
    }

    public function testNoMatch(): void
    {
        $rule = VariableIncludes::create(['env' => 'foo', 'includes' => 'bar']);
        $this->assertFalse($rule->matches(['bar' => 2]));
        $rule = VariableIncludes::create(['env' => 'foo', 'includes' => 'bar']);
        $this->assertFalse($rule->matches(['foo' => 1]));
    }
}
