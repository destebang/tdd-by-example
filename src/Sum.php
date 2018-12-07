<?php

declare(strict_types=1);

namespace TddByExample;

class Sum implements Expression
{
    /**
     * @var Money
     */
    private $augend;

    /**
     * @var Money
     */
    private $addend;

    public function __construct(Money $augend, Money $auddend)
    {
        $this->augend = $augend;
        $this->addend = $auddend;
    }

    public function reduce(string $to): Money
    {
        $amount = $this->augend->amount() + $this->addend->amount();

        return new Money($amount, $to);
    }

    public function augend(): Money
    {
        return $this->augend;
    }

    public function addend(): Money
    {
        return $this->addend;
    }
}