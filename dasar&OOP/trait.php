<?php
include "C:/Users/wijay/code/dasar&OOP/function/traitFunc.php";

$person1 = new TFunc\person("sapri", null);
$person1->sayHello();
//$person1->sayGoodbye(); tak bisa di lakukan karna private


echo "\n________________________________________".PHP_EOL;echo PHP_EOL;

$person2 = new TFunc\Person2("Ucup", null);
$person2->sayHello();
echo PHP_EOL;echo PHP_EOL;
$person2->sayGoodbye(); //dapat di lakukan karna telah di ubah trait nya ke public

echo "\n________________________________________".PHP_EOL;echo PHP_EOL;

$child1 = new TFunc\Child("udin", "budi");
$child1->sayHello();
echo PHP_EOL;echo PHP_EOL;
$child1->sayGoodbye(); // dpt di lakukan karna overide menjadi public

echo "\n________________________________________".PHP_EOL;echo PHP_EOL;

$child2 = new TFunc\Child2("Tony", "Angel");
$child2->sayHello();
//$child2->sayGoodbye(); tak dapat di lakukan karna di ubah trait nya ke private

echo "\n________________________________________".PHP_EOL;echo PHP_EOL;

$person3 = new TFunc\DobelTrait("asep", "Metiu");
$person3->sayHello();
echo PHP_EOL;echo PHP_EOL;
$person3->sayGoodbye();



?>