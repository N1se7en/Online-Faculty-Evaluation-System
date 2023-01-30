<?php

include ('db_connect.php');

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `faculty` WHERE id = $id";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:facultylist.php');
        }
    else{
        die("Could not connect to mysql" . mysqli_error($conn));
    }
}
