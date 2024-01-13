<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    Request & Response  Title

    Get | Post 

    <!-- Get <a href=""></a> -->
    <!-- post <form action=""></form>  get also use this form  -->

    <h1>Client site </h1>

     <!-- Get method  --> 
     <!-- http://localhost:8080/php_lessons/projectsimple/sever.php?firstUserName=aaa&secUserName=bbb -->
    
    
     <!-- <a href="./sever.php?name=nyeinchan&job=developer&address=pyay">Sever site</a> -->

    <!-- post method -->
    <!-- http://localhost:8080/php_lessons/projectsimple/sever.php     -->

    
     <form action="./sever.php" method="post" enctype='multipart/form-data'>
        FirstName <input type="text" name="firstUserName" require >
        <br><br>
        SecName <input type="text" name="secUserName" require >
        <br><br>

        addressName <input type="text" name="addressName" require>
        <br><br>

        <select name="Gender" >
            <option value="MALE">male</option>
            <option value="FEMALE">female</option>
        </select>
        <br><br>

        <input type="file" name="myImage" >

        <br><br>
        <!-- <button type="submit">Click to send</button> -->
        <input type="submit" value="Click to send">
     </form>


</body>
</html>