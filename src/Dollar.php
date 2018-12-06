<?php

declare(strict_types=1);

namespace TddByExample;

class Dollar extends Money
{
    public function times(int $multiplier): Money
    {
        return new Dollar($this->amount * $multiplier);
    }
}