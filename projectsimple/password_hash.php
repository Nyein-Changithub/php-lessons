<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password hash</title>
</head>
<body>

    <h3>Login form</h3>
    
    <form method="POST">

        Email <input type="email" name="userEmail" >
        <br>
        Password <input type="password" name="userPassword" >
        <br>
        <input type="submit" value="log In" name= "loginBtn"> 

    </form>

    <?php
    
    $adminEmail="admin@gmail.com";
    // $adminPassword="admin123";
    $adminPassword= '$2y$10$IShln9o7VpgiOEck4XXuaeUp/bg5NrhdSYVK2PGmS2Ci03Lg19mZS'; // admin123 

    // $hashPassword= password_hash ($adminPassword,PASSWORD_BCRYPT);

    // echo $adminEmail;
    // echo "<br>";
    // echo $adminPassword;
    // echo "<br>";
    // echo $hashPassword;

    // password_hash ("admin123", PASSWORD_BCRYPT) // password has
    // password_verify ('admin123',$2y$10$IZeVnjfBnZuMUPleRiGjo.5kgUklUNo5k951/BLKKNYqVAc2lFk7u)// password check  ( bool true or false)

    // var_dump(password_verify($adminPassword,$hashPassword));
    
    if(isset($_POST['loginBtn'])) {

        $userEmail= $_POST["userEmail"];
        $userPassword= $_POST["userPassword"];

        // echo $userEmail;
        // echo '<br>';
        // echo $userPassword;

        // if($userEmail == $adminEmail && $userPassword == $adminPassword){
        //     echo "login In success";
        // }else {
        //     echo "login In Fail!, Try Again";
        // }

        if($userEmail == $adminEmail && password_verify($userPassword,$adminPassword)){
            echo "login In success";
        }else {
            echo "login In Fail!, Try Again";
        }

    }
    
    
    
    
    ?>
</body>
</html>