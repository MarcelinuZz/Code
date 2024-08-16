<?php
include_once "C:/Users/wijay/code/dasar&OOP/function/Role.php";
include_once "C:/Users/wijay/code/dasar&OOP/function/func3.php";

$Player1 = new FUNK3\EXPLANER();
$R7 = $Player1->getRole("Thamuz");
$R7->RoleInfo();

$Player2 = new FUNK3\GOLDLANER();
$LeoKoce = $Player2->getRole("Irithel");
$LeoKoce->RoleInfo();

$Player3 = new FUNK3\Roamer();
$Kiboy =  $Player3->getRole("Kufra");
$Kiboy->RoleInfo()


?>