<?php

include('db_connect.php');

$id = $_GET['updateid'];

$sql = "SELECT * FROM `courses` WHERE c_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$c_id = $row['c_id'];
$name = $row['name'];
$fid = $row['id'];


if (isset($_POST['submit'])) {
    $c_id = $_POST['c_id'];
    $name = $_POST['name'];
    $fid = $_POST['id'];

    

    $sql1 = "UPDATE `courses` SET c_id='$c_id',name='$name',id='$fid' WHERE id=$id";

    $query1 = mysqli_query($conn, $sql1);
    if ($query1) {
        header('location:courselist.php');
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
    <title>Update Course Information</title>
</head>

<body>



    <?php
    include('./sidebar_3 c.php');
    ?>
    <div class="container col-md-7 offset-3">
        <h3 style="text-align: center;">Update Course Information</h3>
        <br>
        <br>
        <form class="row g-3" method="POST">

            <div class="input-group">
                <span class="input-group-text">Course Name</span>
                <input type="text" aria-label="Dept and Code" class="form-control" name="name" autocomplete="off" value="<?php echo "$name"; ?>">
               
            </div>
            <div class="input-group">
                <span class="input-group-text">Course ID</span>
                <input type="int" class="form-control" id="initials4" name="c_id" autocomplete="off" value="<?php echo "$c_id"; ?>">
            </div>
            <div class="input-group">
                <span class="input-group-text">Faculty ID</span>
                <input type="int" class="form-control" id="inputEmail4"  name="id" autocomplete="off" value="<?php echo "$fid"; ?>">
            </div>

        


            <div id="liveAlertPlaceholder" class="col-12">
                <button type="submit" class="btn btn-primary" id="liveAlertBtn" name = "submit" value="submit">Submit</button>
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
                alert('Information Added', 'success')
            })
        }
    </script>

</body>

</html>