<?php
/*include_once "C:/Users/wijay/code/dasar&OOP/function/func4.php";

$Card1 = new FUNK4\BCA();
$Card1->setUsername("Linuz");
$Card1->setPassword(6,7,3,2,4);
$Card1->setMoney(50000);

$Card1->CheckError();
*/

$Word;
$Result = preg_match_all("/agu|NTO|lim|Nagma/i", "Agustinus Anto Lim", $Word);

if($Result < 4){
    echo "MISSING ". (4 - $Result). " WORDS".PHP_EOL;
    echo "The Word we found only :".PHP_EOL;
    foreach($Word as $word){
        foreach($word as $WORDS){
            echo "- $WORDS".PHP_EOL;
        }
    }
    
} else{
    echo "ALL THE WORD HAS BEEN FOUND!!".PHP_EOL;
}



$Word1;
$Result1 = preg_match("/agu|NTO|lim|Nagma/i", "Agustinus Anto Lim", $Word1); //hanya mendetect
if((BOOL)$Result1 == True){                                                 //1 saja
    echo "WORD FOUND!!".PHP_EOL;
}
else{
    echo "WORD NOT FOUND!!".PHP_EOL;
}


$Result2 = preg_replace("/Hitam|Gelap/i", "OWEN", "Lihat Barang Gelap itu sama seperti warna
kucing Hitam itu!!");

echo $Result2.PHP_EOL;

$Result3 = preg_split("/[\s, _]/", "Richard_Jason RIchen");
var_dump($Result3);
foreach($Result3 as $Result){
    echo $Result;
}


?>