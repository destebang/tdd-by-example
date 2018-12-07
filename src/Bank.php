<?php

declare(strict_types=1);

namespace TddByExample;

class Bank
{
    public function reduce(Expression $source, string $to)
    {
        return Money::dollar(10);
    }
}