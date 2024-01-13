<?php

// echo "hi";

// $name= ['apple','orange','mango','banana',10,20];
// echo "<pre>";
// var_dump($name);
// echo $name[3];
// echo current($name); 
// echo end($name);
// echo array_sum($name);
// echo array_rand($name);
// $number=range(10,20);
// echo "<pre>";
// var_dump($number);
// echo in_array("apple",$name)."<br>"; 
// echo in_array("pineapple",$name)? "true": "flase"; //boolean

// $person=[
//     'name'=> "Nyein Chan",
//     'job'=> 'developer',
//     'address'=>'yangon'
// ];

// echo array_key_exists("name",$person)? "true": "false";
// echo "<pre>";
// var_dump(array_keys($person))."<br>";
// var_dump(array_values($person));

// $one= "this is nyein chan";

// echo "<pre>";
// var_dump(explode(" ",$one)); // string to array change

// array to string 
// $name= ['apple','orange','mango','banana',10,20];
// echo implode("/",$name)."<br>";
// echo implode("*",$name)."<br>";
// echo join("|",$name);

// $name= ['apple','orange','mango','banana'];

// //add back
// array_push($name,"pineapple");
// //remove back
// array_pop($name);

// // add front
// array_unshift($name,"lemon");
// //remove front
// array_shift($name);

// echo "<pre>";
// var_dump($name);

// $name= ['apple','orange','mango','banana'];
// $num= [1,4,8,9,3,23,23,93,45,78,32];
// // sort($num);                       /// for simple array
// // rsort($num);                      /// for simple array

// for ($i= 0; $i< count($num); $i++){
//     echo $num[$i];
//     echo "<br>";
// };

// $person=[
//     'name'=> "nyein Chan",
//     'job'=> 'developer',
//     'address'=>'yangon'
// ];

// // asort value ascending
// // ksort keys descending

// // arsort value ascending
// // krsort keys descending

// // asort($person);
// // arsort($person);
// // ksort($person);
// // krsort($person);
// // shuffle($person);

// echo "<pre>";
// var_dump($person);



// cnostant declaration vs variable declaration //

// $num = "si thu ";      // local scope
$arr= ['apple', ' mango', 'banana'];
define('NAME',$arr, false);  // define(name, value, case-insensitive)


function showMessage () {
    // $name = "Code lab "; 
    echo NAME['0'];
}

showMessage();















?>
