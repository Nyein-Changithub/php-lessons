

<?php

    // var_dump($_GET);
    // echo $_GET['id'];

    require_once("./04_db_connection.php");

    $id=$_GET['id'];

    $sql= "DELETE FROM work WHERE id=$id"; 

    if(mysqli_query($connect,$sql)){
        header ("location:./04_read.php");

    }else{
        echo "delete fail" .mysqli_error();
    };



?>