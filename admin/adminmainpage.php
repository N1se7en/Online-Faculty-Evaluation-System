<?php
include('db_connect.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Panel</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/feval/admin/adminmainpage.php"> <img src="admin.jpg" alt="" width="32" height="32" class="rounded-circle me-2">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://localhost/feval/admin/student.php">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/feval/admin/faculty.php">Faculty</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/feval/admin/courses.php">Courses</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           
                            <li>
                                
                            </li>
                            <li><a class="dropdown-item" href="http://localhost/feval/admin/logout.php">Sign out</a></li>
                        </ul>
                    </li>

                </ul>
                
            </div>
        </div>

    </nav>
    <br>

    <div class="row justify-content-md-center">
        <div class="card border border-3 border-primary col-12 col-sm-6 col-md-4">

            <div class="card-body">
                <div class="inner">
                    <h5 class="card-title">Total Students:</h5>
                    <h5 class="card-text"><?php echo $conn->query("SELECT * FROM student ")->num_rows; ?></h5>
                    <a href="http://localhost/feval/admin/studentlist.php" class="btn btn-primary">See All Students</a>
                </div>

            </div>
        </div>
        <br>
        <br>
        <div class="card border border-3 border-warning col-12 col-sm-6 col-md-4">

            <div class="card-body">
                <div class="inner">
                    <h5 class="card-title">Total Faculties:</h5>
                    <h5 class="card-text"><?php echo $conn->query("SELECT * FROM faculty ")->num_rows; ?></h5>
                    <a href="http://localhost/feval/admin/facultylist.php" class="btn btn-warning">See All Faculties</a>
                </div>

            </div>
        </div>



    </div>
    <div class="row justify-content-md-center">
        <div class="card border border-3 border-success col-12 col-sm-6 col-md-4">

            <div class="card-body">
                <div class="inner">
                    <h5 class="card-title">Total Courses:</h5>
                    <h5 class="card-text"><?php echo $conn->query("SELECT * FROM courses ")->num_rows; ?></h5>
                    <a href="http://localhost/feval/admin/courselist.php" class="btn btn-success">See All Courses</a>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>