<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css cdn link -->
   
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-light">
   
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-4">
                <div class="text-center mb-3">
                    <a href="./01_login.php">
                        <button class ="btn bg-primary text-white" style="width:200px">login</button>
                    </a>
                </div>
                <div class="text-center mb-3">
                    <a href="./01_register.php">
                        <button class ="btn bg-success text-white" style="width:200px">register</button>
                    </a>
                </div>
                <div class="text-center mb-3">
                    <a href="./01_logout.php">
                        <button class ="btn bg-danger text-white" style="width:200px">logout</button>
                    </a>
                </div>
            </div>


            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        register
                        <form action="" class="p-3" method="POST">
                                <div class="mb-3">
                                    <label for="" >Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="mg mg ....">
                                </div>
                                <div class="mb-3">
                                    <label for="" >Eamil</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="" >password</label>
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>
                                    <div class="mb-3">
                                    <label for="" >comfirm password</label>
                                    <input type="password" name="comfirmpassword" class="form-control" placeholder="comfirm passowrd">
                                </div>
                            <button type="submit" class="btn bg-dark text-white float-end" name="registerBtn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

session_start();
function checkStrongPassword($password){

    $upperStatus= false;
    $lowerStatus= false;
    $numberStatus= false;
    $specialStatus= false;

    // if(preg_match('/[A-Z]/',$password)){
    //     echo "contain";
    // }else{
    //     echo "not contain";
    // }

    if(preg_match('/[A-Z]/',$password)){
        $upperStatus=true;
    }
    if(preg_match('/[a-z]/',$password)){
        $lowerStatus=true;
    }
    if(preg_match('/[0-9]/',$password)){
        $numberStatus=true;
    }
    if(preg_match('/[!@#$%^&*]/',$password)){
        $specialStatus=true;
    }

    // if ($upperStatus== true && $lowerStatus== true && $numberStatus== true && $specialStatus== true)// the same with under
    if ( $upperStatus && $lowerStatus && $numberStatus && $specialStatus ){

        // echo "strong password";
        return true;
    }else {
        // echo " weak password";
        return false;
    }

}

// checkStrongPassword("Password200@");

    if(isset($_POST["registerBtn"])){
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password= $_POST['password'];
        $comfirmpassword=$_POST['comfirmpassword'];

        // echo strlen($password);
         if($name !="" && $email !="" && $password != "" && $comfirmpassword != ""){
            if (strlen($password) >= 6 && strlen($comfirmpassword) >= 6){ 
                if ($password == $comfirmpassword){
                    $status=checkStrongPassword ($password);
                    // var_dump ($status);
                    if ($status){
                        $_SESSION['email']= $email;
                        $_SESSION['password']= password_hash ($password,PASSWORD_BCRYPT);
                        echo "Register Success..";
                    }else{
                        echo "Your password is not strongpassword! (eg.  conatin => A-Z,a-z,0-9,!@#$%^&*)";
                    }

                }else{
                    echo "password not same ! Type Again .";
                }
            
            }else{
                echo "password must be greater than 6.";
            }    
            
         }else {
            echo "need to fill";
         }
        


    }






?>
</body>
</html>