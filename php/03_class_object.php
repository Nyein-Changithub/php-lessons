<?php
echo "hello world <br>";

// class & object 

class car{
 
    // properties //
    // public $name = " BMW";
    // public $price= " 1200$";

    // public $name;
    // public $price;

    private $name;
    public $price;


    // method //

    // public function getCarName($userName="default") { //type function 
    //     $this->name=$userName;
    //     return $this->name;
    // }

    // public function getCarPrice($userPrice = "0"){  // void function 

    //     $this->price= $userPrice;
    //     echo $this->price;
    // }


    public function setName($uName= "default"){
        $this->name=$uName;
    }
    public function getName (){ // private call method "getName" //
        return $this->name;
    }



}

$result = new car (); // object create call

// echo $result->name;
// echo "<br>";
// echo $result->price;

// $result->getCarName();
// $result->getCarName("something");
// $typeName= $result->getCarName("Maung Maung "); // type function call 
// echo $typeName;

// echo "<br>";

// $result->getCarPrice();
// $result->getCarPrice("13000$"); // void funciton 

$result->setName("Ko Ko");
// echo $result->name;
$Name= $result->getName();
echo $Name;


