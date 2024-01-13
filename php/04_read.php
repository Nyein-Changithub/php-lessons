
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Tasks list</h1>
    <table border= "1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <td>1</td>
                <td>Code Lab</td>
                <td>20.12.2023</td>
                <td>
                    <a href="#">Created_at</a> |
                    <a href="#">Updated_at</a>
                </td>
            </tr> -->


            <?php
    
            require_once ("04_db_connection.php");

            // SELECT *  FROM Table_name WHERE;

            $sql= "SELECT * FROM work";
            $query = mysqli_query($connect,$sql);

             $tableRow = mysqli_num_rows($query);
        //    var_dump($row);    

            while ($row= mysqli_fetch_assoc($query)){

                $time= date ('g:i:a',strtotime($row['created_at']));
                echo "  <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>$time</td>
                            <td>
                                <a href='#'>Created_at</a> |
                                <a href='#'>Updated_at</a>
                            </td>
                         </tr> ";
            }

            ?>
        </tbody>
    </table>

</body>
</html>