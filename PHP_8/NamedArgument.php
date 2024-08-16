<?php

include_once "C:/Users/wijay/code/PHP_8/function/func1.php";

//FUNK1\callme(last: "KHanedy",  first: "Eko", mid: "Kurniawan");

//FUNK1\CallMyName(last: "khanedy", final: "wijaya", first: "Eko");


function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}


sayHello("Eko", "Kurniawan", "Khannedy");
// sayHello("Eko", "Khannedy"); // error

sayHello(last: "Khannedy", first: "Eko", middle: "Kurniawan");
sayHello(first: "Eko", last: "Khannedy");