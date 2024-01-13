<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body class="bg-light">
    <?php
    $errorName = $errorEmail = $errorPhone = $errorAddress = " ";
    $name = $email= $phone = $address = " "; 

    if(isset($_POST['saveBtn'])){

        if($_POST['name'] == null || $_POST['name']== "" || empty($_POST ['name'])) {
            $errorName=" Please fill name field!...";
        }else {
            $name=$_POST ['name'];
        }
        
        if($_POST['email'] == null || $_POST['email']== "" || empty($_POST ['email'])) {
            $errorEmail=" Please fill email field!...";
        }else {
            $email=$_POST ['email'];
        }
        
        if($_POST['phone'] == null || $_POST['phone']== "" || empty($_POST ['phone'])) {
            $errorPhone=" Please fill phone field!...";
        }else {
            $phone=$_POST ['phone'];
        }
        
        if($_POST['address'] == null || $_POST['address']== "" || empty($_POST ['address'])) {
            $errorAddress=" Please fill address field!...";
        }else {
            $address=$_POST ['address'];
        }

        if ( $name != "" && $email != " " && $phone != "" && $address != " "){
            echo $name. "<br>";
            echo $email. "<br>";
            echo $phone . "<br>";
            echo $address . "<br>";
        }else {
            echo "You need to fill!...";
        }

    }
    
    ?>
        
    <div class="container my-3 ">
        <div class="row">
        <div class="col-10 offset-1 shadow">
                <form method="POST" >
                    <div class="my-3 p-3">
                        <label for="">Name</label>
                        <input type="text" name="name"  class="form-control" placeholder="Enter your Name">
                        <small class="text-warning"><?php echo  $errorName;?></small>
                    </div>
                    <div class="my-3 p-3">
                        <label for="">Email</label>
                        <input type="email" name="email"  class="form-control" placeholder="Enter example@gmail.com">
                        <small class="text-warning"><?php echo  $errorEmail;?></small>
                    </div>
                    <div class="my-3 p-3">
                        <label for="">Phone</label>
                        <input type="number" name="phone"  class="form-control" placeholder="091566.........">
                        <small class="text-warning"><?php echo  $errorPhone;?></small>
                    </div>
                    <div class="my-3 p-3">
                       <label for="">Address</label>
                       <textarea name="address" id="" cols="30" rows="10" class ="form-control" placeholder="Enter your address"></textarea>
                       <small class="text-warning"><?php echo  $errorAddress;?></small>
                    </div>
                    <div class="my-3 p-3 float-end ">
                        <input type="submit" value="save" class="btn bg-dark text-white" name="saveBtn">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>