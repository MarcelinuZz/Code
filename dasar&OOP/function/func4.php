<?php
Namespace FUNK4;
include_once "C:/Users/wijay/code/dasar&OOP/function/check.php";
class BCA{
    private string $Username;
    private array $Password = [];
    private int $Money;

public function CheckError(){
    try{
     if (!isset($this->Username)){
        throw new \Exception("UserName is Null");
     } else if (trim($this->Username) == ""){
        throw new \Exception("UserName is Blank");
     } else if (count($this->Password) > 6){
        throw new \CHECK\ValidationException("Pasword only need 6 Number");
     } else if (count($this->Password) < 6){
        throw new \CHECK\ValidationException("Password must 6 Number");
     } else if ($this->Money < 50000){
        throw new \Exception("You need Rp 50000 to make BCA");
     } 
    } catch(\Exception | \CHECK\ValidationException $Result){
        echo "ERROR : $Result".PHP_EOL;
    }finally{
    echo "PROGRAM END".PHP_EOL;
    }
    
}

    public function setUsername(string $name){
     $this->Username = $name;
    }

    public function setPassword(int ...$number){    

        $this->Password = $number;
    
    }
    public function setMoney(int $value){
        $this->Money = $value;
    }


}


