<?php
include_once "C:/Users/wijay/code/php_mysql/func/func1.php";


try{$connection = FUNK1\getConnection();
    echo "CONECTED!".PHP_EOL;

 /*   $Username = "Owen";
    $Password = "Kathys";

    $perintah = <<<SQL
                    select * from login where Username = ? and Password = ?;
                SQL;

    $result = $connection->prepare($perintah);
    $result->execute([$Username, $Password]);
      
    $helper = $result->fetch();

    if($helper) {
        echo "selamat datang kembali ". $helper["Username"].PHP_EOL;
    }

    if(!$helper){
      $CheckUserName = "select Username from login where Username = ?";
      $resultName = $connection->prepare($CheckUserName);
      $resultName->execute([$Username]);
      $helperName = $resultName->fetch();
      if($helperName){
        echo "Seperti nya Password yang anda masukan salah".PHP_EOL;
      }
      else{
        echo "Kami tidak dapat menemukan Username $Username".PHP_EOL;
      }
    }
   */
    
    $connection->beginTransaction();

   $Perintah = <<<ESQL
                  insert into food (name, rasa, asal)
                  values (:name, :rasa, :asal);
                  ESQL;
   $result = $connection->prepare($Perintah);
  
    $food = [
      ["Spagheti", "Gurih", "Italia"], 
      ["jeruk Bali", "Manis", "Indonesia"],
      ["Ratatouille", "Manis", "Italia"],
      ["Ratatouille", "Manis", "Italia"]
    ];

    foreach($food as $match){
       $result->bindparam("name", $match[0]);
       $result->bindparam("rasa", $match[1]);
       $result->bindparam("asal", $match[2]);
       $id = $connection->lastInsertId();
       echo "ID : $id".PHP_EOL;
      $result->execute();
    }


   $connection->commit();

    $connection = null;
    }

    

catch(PDOException $error){
    echo "ERROR :". $error->getMessage();
}

