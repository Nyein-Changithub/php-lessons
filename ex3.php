<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- math_function -->
    pow()<br>
    sqrt()<br>
    abs()<br>
    round()<br>
    ceil()<br>
    floor()<br>
    rand(start,end)<br>
    max()<br>
    min()<br>
    <hr>


    <?php
    echo pow(2,4)."<br>";
    echo sqrt(9) ."<br>";
    echo abs(-10) ."<br>";
    echo round(5.5)."<br>";
    echo ceil(7.2)."<br>";
    echo floor(7.5)."<br>";
    echo rand(1,10)."<br>"; // describe within strat and end....
     $arry= [10,20,2,5,5,8,9,10,12,56,88,1,5];
     echo max($arry)."<br>";
     echo min ($arry);


    ?>
</body>
</html>