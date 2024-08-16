<?php
Namespace ROlE;
include_once "C:/Users/wijay/code/dasar&OOP/function/func3.php";
abstract class Role {
    private string $name;

    abstract public function RoleInfo() : void;
}

class FIGHTER extends Role{
    private string $name = "Fighter";
    private string $HeroName;

    public function __construct(string $name){
    $this->HeroName = $name;
    }

    public function RoleInfo() : void{
    $Atk = 14;
    $Hp = 250;
    $Def = 20;
    echo "Role Anda $this->name\n";
    echo "HERO Yang anda pilih adalah : {$this->HeroName}\n";
    echo "ATK Power : $Atk\n";
    echo "Amount Hp : $Hp\n";
    echo "Durability : $Def\n";
    echo "Anda Memiliki Kemampuan Special|LIFESTEAL|INMUNE|\n\n";
    
     
    }
}

class TANK extends Role{
    private string $name = "Tank";

    private string $HeroName;

    public function __construct(string $name){
    $this->HeroName = $name;
    }
    public function RoleInfo() : void{
    $Atk = 5;
    $Hp = 300;
    $Def = 25;
    echo "Role Anda $this->name\n";
    echo "HERO Yang anda pilih adalah : {$this->HeroName}\n";
    echo "ATK Power : $Atk\n";
    echo "Amount Hp : $Hp\n";
    echo "Durability : $Def\n";
    echo "Anda Memiliki Kemampuan Special|STUN|SLOW|\n\n";
    
     
    }
}

class MARKSMAN extends Role{
    private string $name = "Marksman";

    private string $HeroName;

    public function __construct(string $name){
    $this->HeroName = $name;
    }
    public function RoleInfo() : void{
    $Atk = 35;
    $Hp = 150;
    $Def = 14;
    echo "Role Anda $this->name\n";
    echo "HERO Yang anda pilih adalah : {$this->HeroName}\n";
    echo "ATK Power : $Atk\n";
    echo "Amount Hp : $Hp\n";
    echo "Durability : $Def\n";
    echo "Anda Memiliki Kemampuan Special|DASH|CRITICAL|\n\n";
    
     
    }
}



?>