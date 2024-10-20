<?php

declare(strict_types=1);

namespace Env;

use Keven\CiDetect\Env\AnyOf;
use PHPUnit\Framework\TestCase;

final class AnyOfTest extends TestCase
{
    public function testCreate(): void
    {
        $rule = AnyOf::create(['any' => ['foo', 'bar']]);
        $this->assertInstanceOf(AnyOf::class, $rule);
        $rule = AnyOf::create(['any' => ['foo']]);
        $this->assertInstanceOf(AnyOf::class, $rule);
        $rule = AnyOf::create(['any' => []]);
        $this->assertInstanceOf(AnyOf::class, $rule);
    }

    public function testCreateBad(): void
    {
        $rule = AnyOf::create(['any' => 'foo']);
        $this->assertNull($rule);
        $rule = AnyOf::create(['any' => ['foo', 'bar'], 'other' => 'value']);
        $this->assertNull($rule);
        $rule = AnyOf::create(['foo', 'bar']);
        $this->assertNull($rule);
        $rule = AnyOf::create('foo');
        $this->assertNull($rule);
    }

    public function testMatch(): void
    {
        $rule = AnyOf::create(['any' => ['foo', 'bar']]);
        $this->assertTrue($rule->matches(['foo' => 2, 'bar' => 1]));
        $this->assertTrue($rule->matches(['foo' => 2]));
        $this->assertTrue($rule->matches(['bar' => 1]));
    }

    public function testNoMatch(): void
    {
        $rule = AnyOf::create(['any' => ['foo', 'bar']]);
        $this->assertFalse($rule->matches(['baz' => 2]));
        $rule = AnyOf::create(['any' => ['foo', 'bar']]);
        $this->assertFalse($rule->matches([]));
    }
}
