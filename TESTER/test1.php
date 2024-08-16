<?php
/*#[attribute]
class blank{
public int $min;
public int $max;

public function __construct($min, $max)
{
    $this->min = $min;
    $this->max = $max;
}
}

class Person{
    #[blank(min : 3, max : 12)]
    public ?string $name;
    #[blank(min : 4, max : 13)]
    public ?int $age;
    #[blank(min : 2, max : 11)]

    public ?string $job;
}

$owen = new Person();
$owen->name = "Owen";
$owen->age = 22;
$owen->job = "programmer";

$reff = new ReflectionClass($owen);
$property = $reff->getProperties();
$attributes = $property[0]->getAttributes(blank::class);
//var_dump($attributes);
$result = $attributes[0]->newInstance();
//echo $attributes[0];
$reffcpy = $reff->newInstance();
$reffcpy->name = "linus";
echo $reffcpy->name;
//var_dump($attributes);
//echo $attributes[0];
*/

$string = "AAFDAFDF";
if(ctype_upper($string)){
    echo "string is uppercase";
}