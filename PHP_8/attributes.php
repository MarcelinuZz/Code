<?php
include_once "C:/Users/wijay/code/PHP_8/function/AttributesFunc.php";
include_once "C:/Users/wijay/code/PHP_8/function/func2.php";

$Object1 = new FUNKS2\Login();
$Object1->Username = "anTon";
$Object1->Password = "Secret";
FUNKS2\Checking($Object1);
