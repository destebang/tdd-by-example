<?php

declare(strict_types=1);

namespace TddByExample;

class Franc extends Money
{
    /**
     * @var float
     */
    private $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function amount(): float
    {
        return $this->amount;
    }

    public function equals(Franc $franc): bool
    {
        return $this->amount === $franc->amount();
    }
}