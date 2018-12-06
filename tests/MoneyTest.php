<?php

declare(strict_types=1);

namespace TddByExample\Tests;

use PHPUnit\Framework\TestCase;
use TddByExample\Money;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $fiveDollars = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $fiveDollars->times(2));
        $this->assertEquals(Money::dollar(15), $fiveDollars->times(3));
    }

    public function testEquality(): void
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));

        $this->assertTrue((Money::franc(5))->equals(Money::franc(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::franc(6)));

        $this->assertFalse(Money::dollar(5)->equals(Money::franc(5)));
    }

    public function testFrancMultiplication(): void
    {
        $fiveFrancs = Money::franc(5);
        $this->assertEquals(Money::franc(10), $fiveFrancs->times(2));
        $this->assertEquals(Money::franc(15), $fiveFrancs->times(3));
    }

    public function testCurrency(): void
    {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }
}
