<?php

declare(strict_types=1);

namespace Env;

use Keven\CiDetect\Env\AllOf;
use PHPUnit\Framework\TestCase;

final class AllOfTest extends TestCase
{
    public function testCreate(): void
    {
        $rule = AllOf::create(['foo', 'bar']);
        $this->assertInstanceOf(AllOf::class, $rule);
        $rule = AllOf::create(['foo']);
        $this->assertInstanceOf(AllOf::class, $rule);
        $rule = AllOf::create([]);
        $this->assertInstanceOf(AllOf::class, $rule);
    }

    public function testCreateBad(): void
    {
        $rule = AllOf::create('foo');
        $this->assertNull($rule);
    }

    public function testMatch(): void
    {
        $rule = AllOf::create(['foo', 'bar']);
        $this->assertTrue($rule->matches(['foo' => 2, 'bar' => 1]));
    }

    public function testNoMatch(): void
    {
        $rule = AllOf::create(['foo', 'bar']);
        $this->assertFalse($rule->matches(['bar' => 2]));
        $rule = AllOf::create(['foo', 'bar']);
        $this->assertFalse($rule->matches(['foo' => 1]));
        $rule = AllOf::create(['foo', 'bar']);
        $this->assertFalse($rule->matches([]));
    }
}
