<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- get data=> show => edit => update -->
    <?php

    require_once("./04_db_connection.php");
     
    // echo " this is update page";
    // echo $_GET['id'];    
    $id= $_GET['id'];
    $sql= "SELECT * FROM work WHERE id= $id ";
    $query=mysqli_query($connect,$sql);
    
    // echo "<pre>";
    // print_r(mysqli_fetch_assoc($query));
        $data = mysqli_fetch_assoc($query); // get data

        if(isset($_POST['updateBtn'])){
            $taskId=$_POST['taskId'];
            $taskName= $_POST['taskName'];

            $updateSql= "UPDATE work SET name='$taskName' WHERE id= $taskId ";

            if(mysqli_query($connect,$updateSql)){
                // echo "update is success";
                header("location:./04_read.php");
            
            }else{
                echo "update error...";
            }


        }
    ?>

    <a href="./04_read.php">List Page</a><br><br>

    <form action="#" method="POST">

        Tasks
        <input type="hidden" name="taskId" value="<?php echo $data['id']?>" required>
        <input type="text" name="taskName" value="<?php echo $data['name']?>" required >
        <button name="updateBtn" >Update</button>

    </form>
</body>
</html>