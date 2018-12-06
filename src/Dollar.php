<?php

declare(strict_types=1);

namespace TddByExample;

class Dollar extends Money
{
    public function times(int $multiplier): Money
    {
        return Money::dollar($this->amount * $multiplier);
    }
}