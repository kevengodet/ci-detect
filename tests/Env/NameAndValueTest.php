<?php

declare(strict_types=1);

namespace Env;

use Keven\CiDetect\Env\NameAndValue;
use PHPUnit\Framework\TestCase;

final class NameAndValueTest extends TestCase
{
    public function testCreate(): void
    {
        $rule = NameAndValue::create(['foo' => 1]);
        $this->assertInstanceOf(NameAndValue::class, $rule);
    }

    public function testCreateBad(): void
    {
        $rule = NameAndValue::create([]);
        $this->assertNull($rule);
        $rule = NameAndValue::create(['foo', 'bar']);
        $this->assertNull($rule);
        $rule = NameAndValue::create('foo');
        $this->assertNull($rule);
    }

    public function testMatch(): void
    {
        $rule = NameAndValue::create(['foo' => 1]);
        $this->assertTrue($rule->matches(['foo' => 1]));
        $this->assertTrue($rule->matches(['foo' => '1']));
    }

    public function testNoMatch(): void
    {
        $rule = NameAndValue::create(['foo' => 1]);
        $this->assertFalse($rule->matches(['bar' => 1]));
        $rule = NameAndValue::create(['foo' => 1]);
        $this->assertFalse($rule->matches(['foo' => 2]));
    }
}
