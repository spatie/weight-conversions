<?php

namespace Spatie\WeightConversions;

class Weight
{
    protected float $kilograms;

    public static function kilograms(float $kilograms): self
    {
        $myArray = ['1', '2', '3'];

        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}
