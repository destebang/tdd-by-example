<?php

declare(strict_types=1);

namespace TddByExample;

interface Expression
{
    public function reduce(Bank $bank, string $to): Money;

    public function plus(Expression $addend): Expression;

    public function times(int $multiplier): Expression;
}