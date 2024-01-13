<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
         file upload
        <hr>

        <form method="post" enctype="multipart/form-data">

            <input type="file" name="userImage" >
            <br><br>
            <input type="submit" value="save" name="storeImage">

        </form>

        <?php
        if(isset($_POST["storeImage"])) {
            echo "<pre>";
            print_r($_FILES);

            $imgName=$_FILES['userImage']['name'];
            $tmpName = $_FILES['userImage']['tmp_name'];
            // echo $imgName;
            // echo $tmpName;
            $targetName='image/'.$imgName;
            // $targetName='photo/'.$imgName;

            // move_uploaded_file($tmpName,$targetName);

            if(move_uploaded_file($tmpName,$targetName)){

                move_uploaded_file($tmpName,$targetName);
                echo "success";
            }else {
                echo "error";
            }



        }
        
        
        
        
        ?>
</body>
</html>