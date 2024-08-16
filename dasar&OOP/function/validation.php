<?php
Namespace VALID;

/*class Validator {
static public function ValidatorTOOL($Class1){
$object1 = new \reflectionClass($Class1);
$properties = $object1->getProperties(\ReflectionProperty::IS_PUBLIC);

foreach($properties as $match){
    if(!$match->isInitialized($Class1)){
      throw new \Exception("$match->name is not exist");
    } else if(is_null($match->getValue($Class1))){
      throw new \Exception("$match->name is null");
    } 
}

}
   
}*/

Class Validator{

  public static function ValidatorTOOL($Target){
    $helper = new \ReflectionClass($Target);
  $properties = $helper->getProperties(/*\ReflectionProperty::IS_PUBLIC*/);
    foreach($properties as $match){
      if(!$match->isInitialized($Target)){
        throw new \Exception("$match->name doesn't exist");
      }else if(is_null($match->getValue($Target))){
        throw new \Exception("$match->name is null");
      }
    }
  }
}


