<?php

include('db_connect.php');

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Manage Student Information</title>
</head>

<body>

    <?php
    include('./sidebar_3 f.php');
    ?>
    <div class="container col-md-9 offset-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Initials</th>
                </tr>
            </thead>
            <tbody>
                <?php


                $sql = "SELECT * FROM `faculty`;";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $init = $row['init'];

                        echo ' <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $fname . '</td>
                        <td>' . $lname . '</td>
                        <td>' . $init . '</td>

                        <td>
                        <a href="update_f.php?updateid='. $id .'" class="btn btn-outline-primary btn  tabindex="-1" role="button">Update</a>
                        <a href="delete_f.php?deleteid='. $id .'" class="btn btn-outline-danger btn " tabindex="-1" role="button">Delete</a>
                        
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