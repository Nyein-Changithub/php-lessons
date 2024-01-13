<?php

session_start(); 

// session_destroy(); // session storage delete

echo $_SESSION['name']; // session call 
echo "<br>";

// echo $name;