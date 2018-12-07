<?php

declare(strict_types=1);

namespace TddByExample\Tests;

use PHPUnit\Framework\TestCase;
use TddByExample\Bank;
use TddByExample\Money;
use TddByExample\Sum;

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
        $this->assertFalse(Money::dollar(5)->equals(Money::franc(5)));
    }

    public function testCurrency(): void
    {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }

    public function testSimpleAddition(): void
    {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduce($sum, "USD");
        $this->assertEquals(Money::dollar(10), $reduced);
    }

    public function testPlusReturnsSum(): void
    {
        $five = Money::dollar(5);
        /** @var Sum $expression **/
        $expression = $five->plus($five);
        $this->assertEquals($five, $expression->augend());
        $this->assertEquals($five, $expression->addend());
    }

    public function testReduceSum(): void
    {
        $sum = new Sum(Money::dollar(3), Money::dollar(4));
        $bank = new Bank();
        $result = $bank->reduce($sum, "USD");
        $this->assertEquals(Money::dollar(7), $result);
    }

    public function testReduceMoney(): void
    {
        $bank = new Bank();
        $result = $bank->reduce(Money::dollar(1), "USD");
        $this->assertEquals(Money::dollar(1), $result);
    }

    public function testReduceMoneyDifferentCurrency(): void
    {
        $bank = new Bank();
        $bank->addRate("CHF", "USD", 2);
        $result = $bank->reduce(Money::franc(2), "USD");
        $this->assertEquals(Money::dollar(1), $result);
    }

    public function testIdentityRate(): void
    {
        $this->assertEquals(1, (new Bank)->rate("USD", "USD"));
    }
}
