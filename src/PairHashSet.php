<?php

declare(strict_types=1);

namespace TddByExample;

class PairHashSet
{
    /**
     * @var Pair[]
     */
    private $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @param Pair $pair
     * @return int|null
     */
    public function get(Pair $pair)
    {
        return array_key_exists((string) $pair, $this->data)
            ? $this->data[(string) $pair]
            : null;
    }

    public function put(Pair $pair, int $rate): void
    {
        $this->data[(string) $pair] = $rate;
    }
}
