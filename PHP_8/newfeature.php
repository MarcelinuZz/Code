<?php

use ATT\lenght;

class person{

  public function __construct(public string|int $name, public string $Job, public array $Child){

  }


}

class address{
   public ?string $Andress;
}

class User{
    public ?address $username;
}

$PersonA = new person("Andi", "Programmer", ["eko","jaya","kusuma"]);
var_dump($PersonA);


$score = "A";
$Output = match($score){
    "A","B","C" => "Anda lulus",
    "D", "E" => "Anda tidak lulus",
    default => "apa score anda?"
};

echo $Output;

$nama = "ANDIA\n";


$result = match(true){
    strlen($nama) >= 15 => "WAW Nama Anda Panjang!\n",
    strlen($nama) >= 7 => "CUKUP FAIR\n",
    strlen($nama) < 7 => "PENDEK JUGA NAMA ANDA\n"
};

echo $result;

function getCountry(?user $user){
    return $user?->username?->Andress;
}


$AdressA = new address();
$AdressA->Andress="Hello";
$userA = new User();
$userA->username = $AdressA;

echo getCountry($userA);