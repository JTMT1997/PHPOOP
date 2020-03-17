<?php

class buah{
    public $name;
    public $price;
    public $qty = 10;
    public $warna;

    public function  __construct($params, $params2)
    {
        $this ->warna =$params;
    } 

    public function getName(){
        $this -> name ='Apple';
        return $this -> name;
    }

    public function getPrice(){
        $this ->price ='12.000';
        return $this -> price;
    }
    public function getWarna(){
        return $this ->warna;
    }
}
// $objBuah = new Buah();
//  echo $objBuah -> getName()//Memanggil method getName()
// // echo $objBuah -> getPrice();//Memanggil method getPrice()
// echo $objBuah -> qty;//Memanggil property qty()


$buah = new Buah("Hijau", "Biru");
echo $buah -> getWarna();