<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method= "POST">
        <label for="name">Name</label>
        <input type="text" name="taskName" id="name" placeholder="Enter your Name...">
        <button type="submit" name="addBtn">add</button>
    </form>

    <?php 
    
    if(isset($_POST['addBtn'])){

        require_once("04_db_connection.php");

        $name = $_POST['taskName'];

       if($name == "" || $name == null){
        echo " <small style='color:red' >Message is requierd!...</small>";
      
        }else{
            $sql= " INSERT INTO work(name) VALUES ('$name')";
            // if(mysqli_query(connection,query))// 
            if (mysqli_query($connect,$sql)) {

                echo "insert  success...";
            }else {
                echo " query fail!... ".mysqli_error();
            }
       }

    }
    
    
    
    
    
    
    
    ?>

</body>
</html>