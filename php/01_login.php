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
                        login
                        <form action="" class="p-3" method="POST">
                            <div class="mb-3">
                                <label for="" >Eamil</label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="" >password</label>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                            <button type="submit" class="btn bg-dark text-white float-end" name="loginBtn">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    
    session_start();

    if(isset($_POST["loginBtn"])){


        $userEmail= $_POST["email"];
        $userPassword= $_POST["password"];
     //    echo $userPassword;
         
         if ($userEmail != "" || $userPassword!= ""){
             if ( $userEmail == $_SESSION ["email"] && $userPassword == password_verify ($userPassword,$_SESSION['password'])){
                 echo "login success";
             }else{
                 echo "login fail! Try Again...";
             }
         }else{
             echo "Need to fill";
         }
    }
      
    
    ?>

</body>
</html>