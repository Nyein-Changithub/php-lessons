<?php


// echo " hello world";
$connect =mysqli_connect('localhost','root','','todo_list' );

if ($connect){
    //  echo "This is connection is success....";
}else {
    echo " connection fail!... ".mysqli_connection_error();
}