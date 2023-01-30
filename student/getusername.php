<?php
$currentuser = $_SESSION['email'];

$sql = "SELECT * FROM `student` WHERE email='$currentuser'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$fname = $row['fname'];
$lname = $row['lname'];
