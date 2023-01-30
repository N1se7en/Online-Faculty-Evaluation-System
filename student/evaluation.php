<?php

session_start();


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

  <title>Course List</title>


</head>

<body>

  <?php
  include('./sidebar_2.php');
  ?>
  <div class="container col-md-auto offset-3">
 
    <table class="table">
      <thead>
        <tr>

          <th scope="col">Course Code</th>
          <th scope="col">Course Name</th>
          <th scope="col">Faculty</th>

        </tr>
      </thead>
      <tbody>



        <?php
        $sql = "SELECT 
        c1.c_id AS cid1 ,c1.name AS course_1,f1.init AS fac_1,
        c2.c_id AS cid2 ,c2.name AS course_2,f2.init AS fac_2,
        c3.c_id AS cid3 ,c3.name AS course_3,f3.init AS fac_3
        
        FROM student s
        JOIN courses c1
          ON c1.c_id = s.course_1 
        JOIN faculty f1
          ON c1.id = f1.id
        JOIN courses c2
          ON c2.c_id = s.course_2 
        JOIN faculty f2
          ON c2.id = f2.id
        JOIN courses c3
          ON c3.c_id = s.course_3 
        JOIN faculty f3
          ON c3.id = f3.id
           WHERE s.email='$currentuser'";
        $result = mysqli_query($conn, $sql);


        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['course_1'];
            $fname1 = $row['fac_1'];
            $id2 = $row['course_2'];
            $fname2 = $row['fac_2'];
            $id3 = $row['course_3'];
            $fname3 = $row['fac_3'];
            $c1 = $row['cid1'];
            $c2 = $row['cid2'];
            $c3 = $row['cid3'];



            echo ' <tr>
                        <td>' . $c1 . '</td>
                        <td>' . $id . '</td>
                        <td>' . $fname1 . '</td>
                        <td>
                        <a href="evaluationtest.php?updateid=' . $c1 . '" class="btn btn-outline-primary btn  tabindex="-1" role="button">Evaluate</a>
                        
                        </td>
                    
                    </tr>
                    <tr>
                        <td>' . $c2 . '</td>    
                        <td>' . $id2 . '</td>
                        <td>' . $fname2 . '</td>
                       
                        <td>
                        <a href="evaluationtest.php?updateid=' . $c2 . '" class="btn btn-outline-primary btn  tabindex="-1" role="button">Evaluate</a>
                        
                        
                        </td>
                    </tr>
                    <tr>
                    <td>' . $c3 . '</td>
                    <td>' . $id3 . '</td>
                    <td>' . $fname3 . '</td>
                   
                    <td>
                    <a href="evaluationtest.php?updateid=' . $c3 . '" class="btn btn-outline-primary btn  tabindex="-1" role="button">Evaluate</a>
                    
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