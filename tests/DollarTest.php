<?php

declare(strict_types=1);

namespace TddByExample\Tests;

use PHPUnit\Framework\TestCase;
use TddByExample\Dollar;

class DollarTest extends TestCase
{
    public function testMultiplication()
    {
        $fiveDollars = new Dollar(5);
        $fiveDollars->times(2);
        $this->assertEquals(10, $fiveDollars->amount());
    }
}
