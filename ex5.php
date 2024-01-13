<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
encrypt | decrypt & passward hash 

<hr>
 <?php 
 
 $name= "nyeinchan";

 $encName= md5 ($name);  // encrypt short 
 $secName= sha1 ($name); // encrypt long 
 $thirdName= crypt ($name,"TsH"); // encrypt with like as HN 

 echo $encName;
 echo "<br>";
 echo $secName;
 echo "<br>";
 echo $thirdName;

 ?>
 <hr>

 PASSWORD HASH 
 <hr>
<?php 
 


 echo "<br>";
 
 $passward="passward12345";

 $hashpass= password_hash ($passward, PASSWORD_DEFAULT);
 echo $passward;
 echo "<br>";
 echo $hashpass;
 echo "<br>";

//  var_dump(password_verify ($passward,$hashpass));
 var_dump(password_verify ("passward12345",$hashpass));
 echo "<br>";

//  echo password_verify($passward, $hashpass)? "same passward":"wrong passward";
 echo password_verify("passward12345", $hashpass)? "same passward":"wrong passward";



?>

</body>
</html>