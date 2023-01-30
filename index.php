<?php

include('admin/db_connect.php');
if (isset($_SESSION['email'])) {
    header("location:index.php?page=home");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Evaluation System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
    h1::before {
        transform: scaleX(0);
        transform-origin: bottom right;
    }

    h1:hover::before {
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    h1::before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        inset: 0 0 0 0;
        background: hsl(200 100% 80%);
        z-index: -1;
        transition: transform .3s ease;
    }

    h1 {
        position: relative;
        font-size: 5rem;
    }

    html {
        block-size: 100%;
        inline-size: 100%;
    }

    body {
        min-block-size: 100%;
        min-inline-size: 100%;
        margin: 0;
        box-sizing: border-box;
        display: grid;
        place-content: center;
        font-family: system-ui, sans-serif;
    }

    @media (orientation: landscape) {
        body {
            grid-auto-flow: column;
        }

    a:hover {
            text-decoration: underline;
        }

    }
</style>

<body>

    <div class="badge bg-danger text-wrap" style="width: 6rem;">
        <a href="admin\login\adminlogin.php" style="color: white;font-size:23px;text-decoration:none"> <br> ADMIN Login</a>
    </div>
    
    <div class="badge bg-primary text-wrap" style="width: 6rem;">
        <a href="student\login\studentlogin.php" style="color: white;font-size:23px;text-decoration:none"> <br>Student Login</a>

    </div>
    
    <div class="badge bg-warning text-wrap" style="width: 6rem;">
        <a href="faculty\login\facultylogin.php" style="color: white;font-size:23px;text-decoration:none"><br>Faculty Login</a>

    </div>


    <h1> Online Evaluation System</h1>



</body>

</html>