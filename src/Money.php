<?php

declare(strict_types=1);

namespace TddByExample;

abstract class Money
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
            && get_class($this) === get_class($money);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    abstract public function times(int $multiplier): Money;
}

