<?php
namespace FunK1;
class ChangeName{
    static public function AddSample($name){
    return "Sample ".$name;
    }

    static public function UpperCase($name){
        return strtoupper($name);
    }

    static public function LowerCase($name){
        return strtolower($name);
    }
}

class changeHelper{
    public function Imput(string $name, callable $buffer):string {
     return PHP_EOL.call_user_func($buffer, $name);
    }
}


?>