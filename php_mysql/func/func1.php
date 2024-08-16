<?php
NAMESPACE FUNK1;
function getConnection()
{
    $user = "root";
    $host = "localhost";
    $port = 3306;
    $database = "php_mysql";
    $password = "wijayaoey2486";

    return new \PDO("mysql:host=$host:$port; dbname=$database", $user, $password);
}
 
class food{

    private ?int $id;
    public function __construct(private ?string $name, private ?string $rasa, private ?string $asal){

    }

    public function getName(){
        return $this->name;
    }

    // public function setName(string $name){
    //     $this->name = $name;
    // }

    public function getRasa(){
        return $this->rasa;
    }

    // public function setRasa(string $rasa){
    //     $this->rasa = $rasa;
    // }

    public function getAsal(){
        return $this->asal;
    }

    // public function setAsal(string $asal){
    //     $this->asal = $asal;
    // }

    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }
}