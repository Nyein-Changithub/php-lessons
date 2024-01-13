<?php

// Constructor & extends //

// constructor // 

class animals
{
    public $name;
    public $color;

    public function __construct ($animalName="default" , $animalColor="default"){

    //    $this->name="Aung Net";
    //    $this->color= " balck";

       $this->name= $animalName;
       $this->color= $animalColor;

    }

    public function sleep (){
        echo "Good Night";
    }

}


class Dog extends animals {     // extends " class Dog use from class animals with extends///

    public function greeting (){
        echo "hello dog!";
    }
}

$aniaml = new animals();
// $animal = new animals("shwe war", "yellow");
// echo $animal->name;

$dog = new Dog ("Lay Phyu" , " black & white");
// $dog->greeting();

$dog->sleep (); // use with extends // 
echo "<br>";
echo $dog->name;
echo $dog->color;
