<?php
namespace Funk;
  interface MainLoc{
    const nameLoc = "Jalan Kemerdekaan";

    public function getMainLocName();

  }

  interface MainCompany extends MainLoc{
   const nameCompany = "SHS COM";
   public function getMainCompanyName();
  }

  interface Produk{
   public function setProdukName(string $name);
   public function getProdukName();
  }

  class Company implements MainCompany, Produk{

    private string $Produk;
    private string $name;


public function SetName(string $name){
$this->name = $name;
}

    public function getMainLocName(){
      return self::nameLoc;
    }

    public function getMainCompanyName(){
      return self::nameCompany;
    }

    public function setProdukName(string $name){
    $this->Produk = $name;
    }

    public function getProdukName(){
     return $this->Produk;
    } 

    public function getName(){
      return $this->name;
    }


  }


?>