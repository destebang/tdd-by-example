<?php

declare(strict_types=1);

namespace TddByExample;

class Dollar extends Money
{
    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }
}