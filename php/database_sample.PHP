<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- hello world -->
<?php

// mysqli_connec( 'hostname','userName','password','databaseName');
 $connection=mysqli_connect('localhost','root','','test');
  
 if($connection == true){
    echo "database connect success!..";
 }else {
    die ("connection fail!... .".mysqli_connection_error());
 }



?>

</body>
</html>