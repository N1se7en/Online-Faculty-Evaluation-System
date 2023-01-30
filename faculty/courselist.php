<?php

session_start();

include('./sidebar_2.php');

include('./db_connect.php');
$currentuser = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="../style.css">

    <title>Report</title>


</head>

<body>

   
    <div class="container col-md-auto offset-3">
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>

                </tr>
            </thead>
            <tbody>



                <?php
                $sql = "SELECT crs.c_id AS Course_Code ,crs.name AS Course_Name

                    FROM faculty f
                    JOIN courses crs
                        ON f.id = crs.id
                    WHERE f.email = '$currentuser'";

                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['Course_Code'];
                        $cname = $row['Course_Name'];

                        echo ' <tr>

                        <td>' . $id . '</td>
                        <td>' . $cname . '</td>
                        
                        <td>
                        <a href="check.php?updateid=' . $id . '" class="btn btn-outline-primary btn  tabindex="-1" role="button">Check</a>
                        
                        </td>
                    
                   
                         </tr>';
                    }
                }
               

                ?>

            </tbody>
        </table>
      
    </div>

</body>

</html>