<?php
include_once "C:/Users/wijay/code/dasar&OOP/function/func.php";

$Company1 = new Funk\Company;
$Company1->setProdukName("Handphone");
$Company1->SetName("PinApple");

echo <<< ETO
hello welocome to Our Company called "{$Company1->getName()}", in our Company we are focusing
to make an {$Company1->getProdukName()} Produck

we also have a Main Company called "{$Company1->getMainCompanyName()}" that located in 
{$Company1->getMainLocName()}, so its all thank you
ETO;

$MainCompany = new class ("SheeshCom") implements Funk\MainCompany{

    private string $newName;

public function __construct(string $name){
$this->newName = $name;
}

public function getMainCompanyName() {
    return $this->newName;
}
    
public function getMainLocName(){
    return self::nameLoc;
}
};

echo "\n\ndue some problem our MainCompany name changed to {$MainCompany->getMainCompanyName()} 
and the location still in {$MainCompany->getMainLocName()}";


