<?php

declare(strict_types=1);

namespace TddByExample;

class Franc extends Money
{
    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }
}