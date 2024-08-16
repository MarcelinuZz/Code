<?php
namespace FOODREPOSITORY;
include_once "C:/Users/wijay/code/php_mysql/func/func1.php";


interface Repository{
    public function Insert(\FUNK1\food $food);
    public function GetById(int $id);
    public function GetAll();
}
class FoodRepository implements repository{

    public function __construct(private \PDO $Connection){

    }

    function Insert(\FUNK1\food $food){
      $perintah =  <<<SQL
                  insert into food (name, rasa, asal)
                  values(?, ?, ?);
                  SQL;
        $stmt = $this->Connection->prepare($perintah);
        $stmt->execute([$food->getName(), $food->getRasa(), $food->getAsal()]);
        $ID = $this->Connection->lastInsertId();

        $Pengecekan =  <<<SQL
                        select * from food where id = ?;
                        SQL;
        $stmt = $this->Connection->prepare($Pengecekan);
        $stmt->execute([$ID]);

        if($stmt->fetch()){
           echo <<<OUTPUT
            SUKSES MEMASUKAN DATA...
            {$food->getName()} -> name
            {$food->getRasa()} -> rasa
            {$food->getAsal()} -> asal
            ID : $ID
            OUTPUT;
        }else{
            echo "Gagal Memasukan Data!\n";
        }
        
    }

    function GetById(int $id){
        $perintah =  <<<SQL
                     select * from food where id = ?;
                     SQL;
        $stmt = $this->Connection->prepare($perintah);
        $stmt->execute([$id]);

        $data = $stmt->fetch();
        
        if($data){
            $Output = new \FUNK1\food (name: $data["name"], rasa: $data["rasa"], asal: $data["asal"]);
            $Output->setId($data["id"]);
            return $Output;
        }else{
            return "Data tidak ditemukan!\n";
        }
    }
    function GetAll(){
        $perintah = <<<SQL
                    select * from food;
                    SQL;
        $stmt = $this->Connection->query($perintah);
        if($stmt->rowCount() > 0){
            foreach($stmt as $result){
                echo "ID : {$result["id"]}\n";
                echo "Name : {$result["name"]}\n";
                echo "Rasa : {$result["rasa"]}\n";
                echo "Asal : {$result["asal"]}\n";
            }
        }else{
            echo "Table ini belum memiliki data...\n";
        }

    }
}