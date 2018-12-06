<?php

declare(strict_types=1);

namespace TddByExample;

abstract class Money
{
    protected $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
            && get_class($this) === get_class($money);
    }

    abstract public function times(int $multiplier): Money;
}