<?php

declare(strict_types=1);

namespace TddByExample\Tests;

use PHPUnit\Framework\TestCase;
use TddByExample\Dollar;

class DollarTest extends TestCase
{
    public function testMultiplication(): void
    {
        $fiveDollars = new Dollar(5);
        $product = $fiveDollars->times(2);
        $this->assertEquals(10, $product->amount());

        $product = $fiveDollars->times(3);
        $this->assertEquals(15, $product->amount());
    }

    public function testEquality(): void
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
