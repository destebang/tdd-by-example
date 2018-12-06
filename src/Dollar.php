<?php

declare(strict_types=1);

namespace TddByExample;

class Dollar
{
    /**
     * @var float
     */
    private $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): void
    {
        $this->amount *= $multiplier;
    }

    public function amount(): float
    {
        return $this->amount;
    }
}