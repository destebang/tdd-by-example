<?php

declare(strict_types=1);

namespace TddByExample;

class Bank
{
    /**
     * @param Expression|Sum $source
     * @param string $to
     */
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($to);
    }
}