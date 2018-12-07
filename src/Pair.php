<?php

declare(strict_types=1);

namespace TddByExample;

class Pair
{
    /**
     * @var string
     */
    private $from;
    /**
     * @var string
     */
    private $to;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function from(): string
    {
        return $this->from;
    }

    public function to(): string
    {
        return $this->to;
    }

    public function equals(Pair $pair): bool
    {
        return $this->from === $pair->from
            && $this->to === $pair->to;
    }

    public function __toString(): string
    {
        return $this->from . $this->to;
    }
}