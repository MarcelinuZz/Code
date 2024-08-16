<?php
namespace FUNK5;
/*include_once "C:/Users/wijay/code/dasar&OOP/function/validation.php";
class person{
    public ?string $name;
    public ?int $age;
    public ?string $job;
}

function GetValid($object){
    try{
        \VALID\Validator::ValidatorTOOL($object);
        echo "ALL VALID\n";
    }catch(\exception $Result){
        echo "ERROR : {$Result->getMessage()}".PHP_EOL;
    }finally{
        echo "VALIDATION DI EKSEKUSI\n";
    }
}
*/


class Person{
    public ?string $Name;
    public ?string $job;
    public ?int $age;

    private ?string $gender;


    public function setGender($output){
        $this->gender = $output;
    }
}


function Checking($personA){
    try{
        \VALID\Validator::ValidatorTOOL($personA);
        echo "ALL VALID".PHP_EOL;
    }catch(\Exception $result){
        echo "ERROR : {$result}".PHP_EOL;
    }finally{
        echo "PENGECEKAN BERJALAN!\n";
    }
    
    
}




