<?php
include_once "C:/Users/wijay/code/dasar&OOP/function/magicfunc.php";

/*$person1 = new MFUNK\person("linus", "Manager", 21);
var_dump($person1);

echo PHP_EOL;echo PHP_EOL;

$person2 = clone $person1;
var_dump($person2);

echo PHP_EOL;echo PHP_EOL;

var_dump($person1 == $person2);
var_dump($person1 === $person2);
var_dump($person1 === $person1);

echo PHP_EOL;

echo $person1;

echo PHP_EOL;

$Output = (string)$person2;
echo "$Output\n";

$person1("Budi", "12", "Joni", "14");

var_dump($person1);*/


$person2 = new MFUNK\personV2();
$person2->name = "Linus";
$person2->job = "reseller";
$person2->age = 21;

echo $person2->name.PHP_EOL;
echo $person2->job.PHP_EOL;
echo $person2->age.PHP_EOL;

echo isset($person2->name).PHP_EOL;
unset($person2->name);

var_dump($person2);
$person2->name = "Linus";

foreach($person2->manggil("EKO", "Joni", "Edi") as $value){
    echo $value.PHP_EOL;
}

echo PHP_EOL;
echo $person2::NameIterator("Eko", "Joni", "Edi");



?>