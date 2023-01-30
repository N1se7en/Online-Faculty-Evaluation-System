<?php

$conn = new mysqli('localhost', 'root', '', 'feval')
    or

    die("Could not connect to mysql" . mysqli_error($conn));
