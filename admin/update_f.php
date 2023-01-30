<?php

include('db_connect.php');

$id = $_GET['updateid'];

$sql = "SELECT * FROM `faculty` WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$fname = $row['fname'];
$lname = $row['lname'];
$init = $row['init'];
$email = $row['email'];


if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $init = $_POST['init'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $sql1 = "UPDATE `faculty` SET id='$id',fname='$fname',lname='$lname',init='$init',
    email='$email',pass='$password' WHERE id=$id";

    $query1 = mysqli_query($conn, $sql1);
    if ($query1) {
        header('location:facultylist.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Update Faculty Information</title>
</head>

<body>



    <?php
    include('./sidebar_3 f.php');
    ?>
    <div class="container col-md-7 offset-3">
        <h3 style="text-align: center;">Update Faculty Information</h3>
        <br>
        <br>
        <form class="row g-3" method="POST">

            <div class="input-group">
                <span class="input-group-text">First and last name</span>
                <input type="text" aria-label="First name" class="form-control" name="fname" autocomplete="off" value=<?php echo"$fname"; ?>>
                <input type="text" aria-label="Last name" class="form-control" name="lname" autocomplete="off" value=<?php echo"$lname"; ?>>
            </div>
            <div class="input-group">
                <span class="input-group-text">ID</span>
                <input type="varchar" class="form-control" id="inputEmail4" placeholder="Example: DSU" name="init" autocomplete="off" value=<?php echo"$init"; ?>>
            </div>
            <div class="input-group">
                <span class="input-group-text">Email</span>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Example: dsu@ewudbd.edu" name="email" autocomplete="off"value=<?php echo"$email"; ?>>
            </div>

            <div class="input-group">
                <span class="input-group-text"> New/Old Password</span>
                <input type="password" class="form-control" id="inputPassword4" name="password" autocomplete="off">
            </div>

     


            <div id="liveAlertPlaceholder" class="col-12">
                <button type="submit" class="btn btn-primary" id="liveAlertBtn" name="submit" value="submit">Update</button>
            </div>
        </form>
    </div>
    <script>
        var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        var alertTrigger = document.getElementById('liveAlertBtn')

        function alert(message, type) {
            var wrapper = document.createElement('div')
            wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

            alertPlaceholder.append(wrapper)
        }

        if (alertTrigger) {
            alertTrigger.addEventListener('click', function() {
                alert('Information Updated', 'success')
            })
        }
    </script>

</body>

</html>