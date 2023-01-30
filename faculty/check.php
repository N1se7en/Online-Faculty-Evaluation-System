<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">


<?php
session_start();

include('./db_connect.php');
include('./sidebar_2.php');
$id = $_GET['updateid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="../style.css">

    <title>Report</title>


</head>

<body>

<?php   
$sql = "SELECT AVG(SUM)FROM(
    SELECT (ans1+ans2+ans3+ans4+ans5+ans6+ans7+ans8+ans9+ans10) AS SUM
    FROM result r
    JOIN courses crs
        ON r.course_id = crs.c_id
    WHERE course_id = '2'
    )t1";

$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$sum = $row['AVG(SUM)'];

?>

<style>

@-webkit-keyframes extend {
  0% {
    width: 600px;
    height: 200px;
    border-radius: 100px;
  }
  10% {
    width: 610px;
    height: 210px;
    background: #fff;
    margin-left: -5px;
    margin-top: -5px;
  }
  20% {
    width: 600px;
    height: 200px;
    background: #6fb07f;
    margin-left: 0px;
    margin-top: 0px;
  }
  100% {
    width: 200px;
    height: 200px;
    border-radius: 100px;
    margin-left: 190px;
    background: #6fb07f;
  }
}
@keyframes extend {
  0% {
    width: 600px;
    height: 200px;
    border-radius: 100px;
  }
  10% {
    width: 610px;
    height: 210px;
    background: #fff;
    margin-left: -5px;
    margin-top: -5px;
  }
  20% {
    width: 600px;
    height: 200px;
    background: #6fb07f;
    margin-left: 0px;
    margin-top: 0px;
  }
  100% {
    width: 200px;
    height: 200px;
    border-radius: 100px;
    margin-left: 190px;
    background: #6fb07f;
  }
}

@-webkit-keyframes disappear {
  0% {
    opacity: 1;
  }
  20% {
    color: #fff;
  }
  100% {
    opacity: 0;
  }
}
@keyframes disappear {
  0% {
    opacity: 1;
  }
  20% {
    color: #fff;
  }
  100% {
    opacity: 0;
  }
}

@-webkit-keyframes appear {
  0% {
    opacity: 0;
  }
  70% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes appear {
  0% {
    opacity: 0;
  }
  70% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
html {
  background: #fff;
}

input,
a.btn,
submit {
  border: none;
}

.cont {
  position: absolute;
  width: 610px;
  height: 10px;
  left: 50%;
  top: 50%;
  margin: -100px 0 0 -300px;
}

a.btn {
  border-width: 1px;
  width: 600px;
  height: 200px;
  /*border-radius*/
  border-radius: 100px;
  background: #fff;
  position: absolute;
  border: 5px solid #6fb07f;
}

a.btn > span {
  font-size: 48px;
  color: #6fb07f;
}

img {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: alpha(opacity=0);
  opacity: 0;
}

a.btn:focus {

  -webkit-animation: extend 1s ease-in-out;
  -ms-animation: extend 1s ease-in-out;
  animation: extend 1s ease-in-out;
  -webkit-animation-fill-mode: forwards;
  
  animation-fill-mode: forwards;
}

a.btn:focus > span {

  -webkit-animation: disappear 1s ease-in-out;
  -ms-animation: disappear 1s ease-in-out;
  animation: disappear 1s ease-in-out;
  -webkit-animation-fill-mode: forwards;
 
  animation-fill-mode: forwards;
}
a.btn:focus > img {
  
  -webkit-animation: appear 1s ease-in-out;
  -ms-animation: appear 1s ease-in-out;
  animation: appear 1s ease-in-out;
  -webkit-animation-fill-mode: forwards;
  
  animation-fill-mode: forwards;
}


</style>
<div class="container col-md-7 offset-3">
<div class="cont">	
<a class="btn" href='http://localhost/feval/faculty/courselist.php'><span>Average Score : <br> <?php echo "$sum"; ?></span><img src="https://i.cloudup.com/2ZAX3hVsBE-3000x3000.png" height="62" width="62"></a>
	
</div>


</div>

</body>

</html>
