<?php
include_once "../php_mysql/func/func1.php";
include_once "../php_mysql/repository/foodRepository.php";

try{
$connection = FUNK1\getConnection();
echo "SUCCESS".PHP_EOL;
$ObjectA = new FOODREPOSITORY\FoodRepository($connection);
// $ObjectA->GetAll();
// $FOOD1 = $ObjectA->GetById(34);
// var_dump($FOOD1);
$FOOD1 = new FUNK1\food(name: "Samyang", asal: "Korea", rasa: "Pedas");
$ObjectA->Insert($FOOD1);

}catch(PDOException $Code){
echo "ERROR MESSAGE -> ". $Code->getMessage();
}