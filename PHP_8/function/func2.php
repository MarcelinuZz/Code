<?php
namespace FUNKS2;

use ATT\lenght;
//use Exception;
use ReflectionProperty;

include_once "C:/Users/wijay/code/PHP_8/function/AttributesFunc.php";

class Login{
   #[\ATT\NoBlank]
   #[lenght(min : 4, max : 10)]
    public ?string $Username;
   #[\ATT\NoBlank] 
   #[lenght(min : 6, max : 6)]
    public ?string $Password;

}

function validation (object $object){
$class = new \ReflectionClass($object);
$property = $class->getProperties();
foreach($property as $match){
    ValidateNoBlank($match, $object);
    validateLenght($match, $object);
}
}

function ValidateNoBlank(ReflectionProperty $property, object $object){
        if(!$property->isInitialized($object)){
            throw new \Exception("{$property->name} Missing\n");
        }if ($property->getValue($object) == null){
            throw new \Exception("{$property->name} is null!\n");
        }
   
}

function validateLenght(ReflectionProperty $properties, object $object){
    $value = $properties->getValue($object);
    $attribute = $properties->getAttributes(lenght::class);
    foreach($attribute as $attributes){
        $lenght = $attributes->newInstance();
        if(strlen($value) < $lenght->min){
            throw new \Exception("{$properties->name} is too short\n");
        }
        if(strlen($value) > $lenght->max){
            throw new \Exception("{$properties->name} is too long\n");
        }
        
        
        if(validateUpperCase($properties, $value) == false){
            throw new \Exception("{$properties->name} at least have 1 uppercase letter\n");
        }
    }
}

function validateUpperCase(ReflectionProperty $Prop, string $Word){
    for($i = 0; $i<strlen($Word); $i++){
    if(ctype_upper($Word[$i])){
        return true;
        }
    }
}

function Checking(object $A) : void{
    try{
        validation($A);
    }catch(\Exception $Message){
        echo "ERROR : {$Message->getMessage()}";
    }
}