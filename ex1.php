
<!-- 
integer, string, array, objects, boolean, -->


<!-- javascript "one" + "two" =>(string), php => "one"."two" ( string) -->

<!-- javascirpt => var , let , const  -->
<!-- php => $name = "mg mg"; -->


<?php

// echo "Code lab";
// echo "this is php";

// $name = 'nyein chan';

// echo $name;
// var_dump($name);
// print($name);
// print_r($name);

// echo $_SERVER;
// echo "<pre>";
// print_r($_SERVER);
// // print($_SERVER);
// var_dump($_SERVER);


// $num1=10;
// $num2=20;

// echo $num1+ $num2;

// $array = ["one","two","three"];

// $assoarray = [
//    "name"=> 'mg mg',
//    "role"=> 'developer',
// ];

// echo "<pre>";

// var_dump($array);
// var_dump($assoarray);

// echo $assoarray["name"]."<br>";
// echo $array[0];

// $fruits= 'mango';

// if ($fruits=="mango"){
//    echo "this is mango"."<br>";
// }else {
//    echo "this is another fruits"."<br>";
// };

//  $result = $fruits=="mango"? "this is mango fruits" : "this is another fruits.";

//  echo $result;

// $name= 'si thu';

// if ($name=="nyein chan"){
//    echo "this is nyein chan";
// }elseif ( $name=="ko htet") { 
//    echo " this is KO HTET";
// }else {
//    echo "this is another person";
// }

// $car=['BMW','KIA','honda'];

// echo count($car);

// for($i=0; $i < count($car); $i++){
//    echo $car[$i]. "<br>";
// }

// foreach($car as $item){
//    echo $item ."<br>" ;
// }



// $num1=1;

// while ($num1<=10){
//    echo $num1."<br>";
//    $num1++;
// }

// $num2=1;
// do {
//    echo $num2."<br>";
//    $num2++;
// }while($num2<=20);



// function message(){
//    echo "this is message";
// }
//  message();

// function num ( $x= "empty"){
//    echo $x;
// }
//  num();
//  num( " hi I'm here");

//  function outputmessage( $x,$y) {
//    echo $x+$y;
//  }
//   outputmessage (10,20);

function obj ($x, $y) {
   return $x+$y;
}
//  echo obj (10,20);
$result = obj ( 20,20);
echo $result;