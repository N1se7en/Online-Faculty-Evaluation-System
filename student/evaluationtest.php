<?php


session_start();
include('./sidebar_2.php');

include('./db_connect.php');


$cid = $_GET['updateid'];

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">

    <title>Evaluation Form</title>
</head>

<body>
    <div class="container col-md-7 offset-3 ">
        <?php
        
        $sql = "SELECT no, Question, Ans FROM evaluation";
        $result = $conn->query($sql);
        echo "<h3 style='text-align: center;'>Evaluate by answering questions</h3>";
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

                echo "<div > <br> " . $row["no"] . ". " . $row["Question"] . " " . $row["Ans"] .
                    '<form  action="ans.php" method="post">' . '<br> <br>' .

                    '<div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="Very_Poor" name="' . $row["no"] . '" value="1" required>
            <label class="form-check-label" for="Very_Poor">Very Poor</label>
            </div>

            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="Poor" name="' . $row["no"] . '" value="2" required>
            <label for="Poor">Poor</label>
            </div>

            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="Fair" name="' . $row["no"] . '" value="3" required>
            <label class="form-check-label"  for="Fair">Fair</label>
            </div>

            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="Good" name="' . $row["no"] . '" value="4" required>
            <label class="form-check-label"  for="Good">Good</label>
            </div>

            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="Very_Good" name="' . $row["no"] . '" value="5" required>
            <label class="form-check-label" for="Very_Good">Very Good</label>
            </div>
            <input type="hidden" name="course_id" value='.$cid.'"/> 

        
         ' . "<br>  </div>";
            }
        } else {
            echo "0 results";
        }
        ?>
        <br>
        <div class="container" style="text-align: center">
            <button onClick="window.location.reload();" class="btn btn-dark">Reset</button>
            <button type="submit" class="btn btn-primary" id="liveAlertBtn" name="ans" value="submit">Update</button>
        </div>

    </div>
    </form>
    <?php
    $conn->close();
    ?>
    </div>




</body>

</html>