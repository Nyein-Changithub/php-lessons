<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    strlen() <br>
    str_word_count() <br>
    strrev () <br>
    str_shuffle () <br>
    strpos (str, search) <br>
    substr (str,start,end)<br>
    strtoupper () <br>
    strtolower () <br>
    ucfirst () <br>
    ucwords () <br>
    strip_tags () <br> //trim spacd delete > left / right
    str_replace (find,new, string) <br>
    trim ()<br>
    str_split () <br>
    explode()

    <h1>
        <i>
            this is the testing.
        </i>
    </h1>
    <hr>

    <?php
    
    $name = "aaasi thu aaa code labaaa";
    // echo strlen($name);
    // echo str_word_count($name);
    // echo strrev($name);
    // echo str_shuffle($name);
    // echo strpos($name,"code");
    // echo substr($name,0,11);
    // echo strtoupper($name)."<br>";
    // echo strtolower($name);
    // echo ucfirst($name)."<br>";
    // echo ucwords ($name);
    $test ="<h1><i>this is the testing.</i></h1>";
    // echo $test;
    // echo strip_tags($test);
    // echo str_replace("code","programming",$name); // (find, new , string)
    // var_dump($name)."<br>";
    // var_dump(trim($name,"aaa")); //trim spacd delete > left / right

    echo "<pre>";
    // var_dump (str_split ($name));
    // $arr = str_split ($name);
    // echo $arr[10];
    // var_dump (str_split ($name,4));
 
    $name= "si/thu/code/lab";
    var_dump(explode("/",$name,3));





    
    
    
    
    
    ?>



</body>
</html>