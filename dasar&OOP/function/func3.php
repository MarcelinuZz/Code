<?php
namespace FUNK3;
include_once "C:/Users/wijay/code/dasar&OOP/function/Role.php";

interface Hero{
    function GetRole(string $name) : \ROLE\Role;
}

class EXPLANER implements Hero{

    function getRole($name) : \ROLE\FIGHTER{

     $Hero = new \Role\FIGHTER($name);

     return $Hero;
    }
}

class Roamer implements Hero{

        function getRole($name) : \ROLE\TANK{
    
         $Hero = new \Role\TANK($name);
    
         return $Hero;
        }
    }

    class GOLDLANER implements Hero{
            function getRole($name) : \ROLE\MARKSMAN{
        
             $Hero = new \Role\MARKSMAN($name);
        
             return $Hero;
            }
        }

?>