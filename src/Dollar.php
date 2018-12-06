<?php

declare(strict_types=1);

namespace TddByExample;

class Dollar extends Money
{
    /**
     * @var float
     */
    private $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function amount(): float
    {
        return $this->amount;
    }

    public function equals(Dollar $dollar): bool
    {
        return $this->amount === $dollar->amount();
    }
}