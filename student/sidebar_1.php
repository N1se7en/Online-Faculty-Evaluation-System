<?php
include('./db_connect.php');
include('./getusername.php');
?>
<div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark " style="width: 250px;position:relative"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="32"> </svg> <span class="fs-4">Student Panel</span> </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item"> <a href="http://localhost/feval/student/student.php" class="nav-link active" aria-current="page"> <i class="fa fa-home"></i><span class="ms-2">Home</span> </a> </li>
        <li> <a href="http://localhost/feval/student/evaluation.php" class="nav-link text-white"> <i class="fa fa-cog"></i><span class="ms-2">Evaluation</span> </a> </li>

    </ul>
    <hr>
    <div class="dropdown"> <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> <img src="admin.jpg" alt="" width="32" height="32" class="rounded-circle me-2"> <strong> <?php echo" $fname"?> </strong> </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">

            <li><a class="dropdown-item" href="http://localhost/feval/student/updateprofile.php">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="http://localhost/feval/student/logout.php">Sign out</a></li>
        </ul>
    </div>
</div>