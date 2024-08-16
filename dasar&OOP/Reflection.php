<?php
//use FUNK5\person;
include_once "C:/Users/wijay/code/dasar&OOP/function/func5.php";
include_once "C:/Users/wijay/code/dasar&OOP/function/validation.php";

/*
$PersonA = new FUNK5\person();

$PersonA->name = "JONI";
$PersonA->age = 21;
$PersonA->job = "Programmer";

FUNK5\GetValid($PersonA);*/

$person1 = new FUNK5\Person();
$person1->Name = "Jason";
$person1->job = "Kameramen";
$person1->age = 19;

$person1->setGender("Man");




FUNK5\Checking($person1);