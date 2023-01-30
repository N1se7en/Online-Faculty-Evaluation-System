<?php

session_start();
include('./sidebar_3 c.php');

include('./db_connect.php');



?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Course List</title>


</head>

<body>

 
  <div class="container col-md-auto offset-3">
    <table class="table">
      <thead>
        <tr>

          <th scope="col">Course ID</th>
          <th scope="col">Course Name</th>
          <th scope="col">Faculty</th>

        </tr>
      </thead>
      <tbody>



        <?php
        $sql = "SELECT 
        crs.c_id AS ID,crs.name AS Course_name,f.init AS Faculty 
        FROM courses crs JOIN faculty f ON crs.id = f.id";

        $result = mysqli_query($conn, $sql);
        
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['ID'];
            $fname1 = $row['Course_name'];
            $faculty = $row['Faculty'];
           


                 echo ' <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $fname1 . '</td>
                        <td>' . $faculty . '</td>

                        <td>
                        <a href="update_c.php?updateid=' . $id . '" class="btn btn-outline-primary btn  tabindex="-1" role="button">Update</a>
                        <a href="delete_c.php?deleteid=' . $id . '" class="btn btn-outline-danger btn " tabindex="-1" role="button">Delete</a>
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