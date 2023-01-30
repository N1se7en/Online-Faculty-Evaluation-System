<?php
$currentuser = $_SESSION['email'];

$sql = "SELECT * FROM `faculty` WHERE email='$currentuser'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$fname = $row['fname'];
$lname = $row['lname'];
