<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">


<?php
session_start();

include('./db_connect.php');

$sql = "SELECT no, Question, Ans FROM evaluation";
$result = $conn->query($sql);
$i = 1;

if (isset($_POST['ans'])) {
    
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo " <br> " . $row["no"] . ". " . $row["Question"] . " " . $_POST['' . $i . ''];
            $i = $i + 1;
        }
    echo '<br> <br> <a href="student.php" class="btn btn-outline-primary btn  tabindex="-1" role="button">Return Home</a>';
        
    

    }
    }
    $sql1 = "INSERT INTO `result` (email,course_id,ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10)
    VALUES('$_SESSION[email]','$_POST[course_id]','$_POST[1]','$_POST[2]','$_POST[3]','$_POST[4]','$_POST[5]','$_POST[6]','$_POST[7]','$_POST[8]','$_POST[9]','$_POST[10]')";
    $query1 = mysqli_query($conn, $sql1);

?>


