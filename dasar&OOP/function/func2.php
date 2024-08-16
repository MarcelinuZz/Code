<?php
Namespace FUNK2;

use ArrayIterator;

class MyName implements \IteratorAggregate{
    public string $FirstName;
    public string $MidName;
    protected string $LastName;
    Private string $UserName;

    public function __construct(string $Name1, string $Name2, string $Name3, string $Name4){
        $this->FirstName = $Name1;
        $this->MidName = $Name2;
        $this->LastName = $Name3;
        $this->UserName = $Name4;
    }

public function getIterator(){
       /* $array = [
            "FirstName" => $this->FirstName,
            "MidName" => $this->MidName,
            "LastName" => $this->LastName,
            "UserName" => $this->UserName
        ];

        return new ArrayIterator($array);*/
        yield "FirstNames" => $this->FirstName;
        yield "MidNames" => $this->MidName;
        yield "LastNames" => $this->LastName;
        yield "UserNames" => $this->UserName;
    }
}

function GanjilIterator(int $number): \iterator{
    $arrays = [];
for($i = 1; $i <= $number; $i++){
if($i % 2 == 1){
$arrays[] = $i;
  }else{
    continue;
  }
 }
 return new ArrayIterator($arrays);
}

function GenapIterator(int $number) : \iterator{
    for($i = 1; $i <= $number; $i++){
        if($i % 2 == 0){
            yield $i;
        }
    }
}


?>