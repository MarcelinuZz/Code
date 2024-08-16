<?php
namespace MFUNK;


class person{
     public string $name;
     public string $job;

     private string $age;

     public function __construct($name, $job, $age){
       $this->name = $name;
       $this->job = $job;
       $this->age = $age;
     }

     public function __clone(){
        $this->name .= "Clone";
     }

     public function __tostring(){
      return "Name : {$this->name} \n Job : {$this->job} \n Age : {$this->age}";
     }

     public function __invoke(...$array): void{
        $join = implode("|", $array);
        echo "di jadikan fungsi $join";
     }

     public function __debugInfo()
     {
        return[
            "Nama" => $this->name,
            "Kedudukan" => $this->job,
            "Umur" => $this->age,
            "Username" => "lynuZz"
        ];
     }

}

class personV2{
   private array $Name = [];
 
   public function __set($name, $value){
   $this->Name[$name] = $value;
   }

   public function __get($name){
      return $this->Name[$name];
   }

   public function __isset($name) : bool {
   return isset($this->Name[$name]);
   }

   public function __unset($name){
   unset($this->Name[$name]);
   }

   public function __call($name, $argument) : \iterator{
      for($i = 0; $i < count($argument); $i++){
              yield "Bapak".$argument[$i];
      }
  }

   public static function __callStatic($name, $argument) {
      $join = implode("|", $argument);
      return "This Function StaticName : {$name}\nThis Function Return Value : {$join}";
    }
   

   public function __clone(){
      $this->Name["name"] .= "Clone";
   }

   public function __tostring(){
    return "Name : {$this->Name["name"]} \n Job : {$this->Name["job"]} \n
     Age : {$this->Name["age"]}";
   }


   public function __invoke(...$array): void{
      $join = implode("|", $array);
      echo "di jadikan fungsi $join";
   }

   public function __debugInfo()
   {
      return[
          "Nama" => $this->Name["name"],
          "Kedudukan" => $this->Name["job"],
          "Umur" => $this->Name["age"],
          "Username" => "lynuZz"
      ];
   }

}

?>