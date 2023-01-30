<?php

include('db_connect.php');

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c1 = $_POST['crs1'];
    $c2 = $_POST['crs2'];
    $c3 = $_POST['crs3'];


    $sql1 = "INSERT INTO `student` (fname,lname,id_number,email,pass,course_1,course_2,course_3)
    VALUES('$fname','$lname','$id','$email','$password','$c1','$c2','$c3')";

    $query1 = mysqli_query($conn, $sql1);
    if ($query1) {
        header('location:studentlist.php');
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
    <title>Add Student Information</title>
</head>

<body>



    <?php
    include('./sidebar_4.php');




    ?>
    <div class="container col-md-7 offset-3">
        <h3 style="text-align: center;">Enter Student Information</h3>
        <br>
        <br>
        <form class="row g-3" method="POST">

            <div class="input-group">
                <span class="input-group-text">First and last name</span>
                <input type="text" aria-label="First name" class="form-control" name="fname" autocomplete="off">
                <input type="text" aria-label="Last name" class="form-control" name="lname" autocomplete="off">
            </div>
            <div class="input-group">
                <span class="input-group-text">ID</span>
                <input type="varchar" class="form-control" id="inputEmail4" placeholder="Example: 2018-1-60-203" name="id" autocomplete="off">
            </div>
            <div class="input-group">
                <span class="input-group-text">Email</span>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Example: 2018-1-60-203@std.ewudbd.edu" name="email" autocomplete="off">
            </div>

            <div class="input-group">
                <span class="input-group-text">Password</span>
                <input type="password" class="form-control" id="inputPassword4" name="password" autocomplete="off">
            </div>

            <div class="input-group">
                <span class="input-group-text">Course 1</span>

                <select id="inputState" class="form-select" name="crs1">
                    <option selected>Choose...</option>
                    <?php
                    $sql1 = "SELECT * FROM `courses` ORDER BY name";
                    $result1 = mysqli_query($conn, $sql1);
                    while ($row1 = mysqli_fetch_array($result1)) :; ?>

                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>

                    <?php endwhile; ?>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-text">Course 2</span>

                <select id="inputState" class="form-select" name="crs2">
                    <option selected>Choose...</option>
                    <?php

                    $sql2 = "SELECT * FROM `courses` ORDER BY name";
                    $result2 = mysqli_query($conn, $sql2);
                    while ($row2 = mysqli_fetch_array($result2)) :; ?>

                        <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>

                    <?php endwhile; ?>
                </select>
            </div>

            <div class="input-group">
                <span class="input-group-text">Course 3</span>

                <select id="inputState" class="form-select" name="crs3">
                    <option selected>Choose...</option>
                    <?php

                    $sql3 = "SELECT * FROM `courses` ORDER BY name";
                    $result3 = mysqli_query($conn, $sql3);
                    while ($row3 = mysqli_fetch_array($result3)) :; ?>

                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[1]; ?></option>

                    <?php endwhile; ?>
                </select>
            </div>


            <div id="liveAlertPlaceholder" class="col-12">
                <button type="submit" class="btn btn-primary" id="liveAlertBtn" name="submit" value="submit">Submit</button>
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