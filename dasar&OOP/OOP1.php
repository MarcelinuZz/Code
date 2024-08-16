<?php
/*include_once "C:/Users/wijay/code/dasar&OOP/function/func1.php";
$name = "Jhoony";

$NewName = new Funk1\ChangeHelper();
echo "nama di ubah menjadi : ". $NewName->Imput($name, "Funk1\ChangeName::AddSample");
echo PHP_EOL;
echo "nama di ubah menjadi : ". $NewName->Imput($name, "Funk1\ChangeName::UpperCase");
echo PHP_EOL;
echo "nama di ubah menjadi : ". $NewName->Imput($name, "Funk1\ChangeName::LowerCase");
echo PHP_EOL;*/

include_once "C:/Users/wijay/code/dasar&OOP/function/func2.php";

$Vararr= ["varA" => "This Is A", "varB" => "This Is B", "varC" => "This Is C"];
    
$newObject = (object)$Vararr;

foreach($Vararr as $Properties => $variable){
echo "$Properties : $variable".PHP_EOL;
}

echo PHP_EOL; echo PHP_EOL;

$Person1 = new FUNK2\MyName("Marcelinus", "Wijaya", "Oey", "LinuZz");
foreach($Person1 as $Properties => $Name){
    echo "$Properties : ". $Name. PHP_EOL;
}

foreach(FUNK2\GanjilIterator(100) as $Hasil){
    echo $Hasil . ",";
}

echo PHP_EOL;

foreach(FUNK2\GenapIterator(100) as $Hasil){
    echo $Hasil . ",";
}












?>