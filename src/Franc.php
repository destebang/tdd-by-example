<?php

declare(strict_types=1);

namespace TddByExample;

class Franc extends Money
{
    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}