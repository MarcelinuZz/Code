<?php
namespace ATT;

use Attribute;

#[Attribute]
class NoBlank{

}

#[Attribute]
class lenght{
    public int $min;
    public int $max;


    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

