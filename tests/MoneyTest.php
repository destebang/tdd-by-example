<?php

declare(strict_types=1);

namespace TddByExample\Tests;

use PHPUnit\Framework\TestCase;
use TddByExample\Dollar;
use TddByExample\Franc;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $fiveDollars = new Dollar(5);
        $this->assertEquals(new Dollar(10), $fiveDollars->times(2));
        $this->assertEquals(new Dollar(15), $fiveDollars->times(3));
    }

    public function testEquality(): void
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));

        $this->assertTrue((new Franc(5))->equals(new Franc(5)));
        $this->assertFalse((new Franc(5))->equals(new Franc(6)));
    }

    public function testFrancMultiplication(): void
    {
        $fiveFrancs = new Franc(5);
        $this->assertEquals(new Franc(10), $fiveFrancs->times(2));
        $this->assertEquals(new Franc(15), $fiveFrancs->times(3));
    }
}
