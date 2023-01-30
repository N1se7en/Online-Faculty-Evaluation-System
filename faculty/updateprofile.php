<?php
session_start();
include('./db_connect.php');

$currentuser = $_SESSION['email'];

$sql = "SELECT * FROM `faculty` WHERE email='$currentuser'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
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


    $sql1 = "UPDATE `faculty` SET id='$id',fname='$fname',lname='$lname',init='$init',email='$email',pass='$password' WHERE email='$currentuser'";

    $query1 = mysqli_query($conn, $sql1);
    if ($query1) {

        header('location:faculty.php');
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
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Update Faculty Information</title>
</head>

<body>
    <?php
    include('./sidebar_1.php');
    ?>

    <div class="container col-md-7 offset-3">
        <h3 style="text-align: center;">Update Faculty Information</h3>
        <br>
        <br>
        <form class="row g-3" method="POST">

            <div class="input-group">
                <span class="input-group-text">First and last name</span>
                <input type="text" aria-label="First name" readonly class="form-control" name="fname" autocomplete="off" value=<?php echo "$fname"; ?>>
                <input type="text" aria-label="Last name" readonly class="form-control" name="lname" autocomplete="off" value=<?php echo "$lname"; ?>>
            </div>
            <div class="input-group">
                <span class="input-group-text">Initials</span>
                <input type="varchar" readonly class="form-control" id="inputEmail4" placeholder="Example: DSU" name="init" autocomplete="off" value=<?php echo "$init"; ?>>
            </div>
            <div class="input-group">
                <span class="input-group-text">Email</span>
                <input type="email" readonly class="form-control" id="inputEmail4" placeholder="Example: dsu@ewudbd.edu" name="email" autocomplete="off" value=<?php echo "$email"; ?>>
            </div>

            <div class="input-group">
                <span class="input-group-text"> New/Old Password</span>
                <input type="password" class="form-control" id="inputPassword4" name="password" autocomplete="off">
            </div>


            <div id="liveAlertPlaceholder" class="col-12">
                <button type="submit" class="btn btn-primary" id="liveAlertBtn" name="submit" value="submit">Update</button>
            </div>
        </form>
        <br>
        <br>
        <br>
        <div class="container" style="text-align: center;">
            <button type="button" class="btn btn btn-danger" data-bs-toggle="popover" title="About Disabled options" data-bs-content="Contact authorities for any changes in Name, ID and email">Why can I just update password? Click to know</button>
        </div>

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

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
        var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
            trigger: 'focus'
        })
    </script>


</body>

</html>