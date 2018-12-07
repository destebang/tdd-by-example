<?php

declare(strict_types=1);

namespace TddByExample;

class Sum implements Expression
{
    /**
     * @var Expression
     */
    private $augend;

    /**
     * @var Expression
     */
    private $addend;

    public function __construct(Expression $augend, Expression $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $amount = $this->augend->reduce($bank, $to)->amount() + $this->addend->reduce($bank, $to)->amount();

        return new Money($amount, $to);
    }

    public function augend(): Expression
    {
        return $this->augend;
    }

    public function addend(): Expression
    {
        return $this->addend;
    }

    public function plus(Expression $addend): Expression
    {
        return new Sum($this, $addend);
    }

    public function times(int $multiplier): Expression
    {
        return new Sum(
            $this->augend->times($multiplier),
            $this->addend->times($multiplier)
        );
    }
}