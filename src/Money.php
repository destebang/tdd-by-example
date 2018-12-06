<?php

declare(strict_types=1);

namespace TddByExample;

abstract class Money
{
    protected $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount;
    }
}