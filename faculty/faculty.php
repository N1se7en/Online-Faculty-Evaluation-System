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
  <link rel="stylesheet" type="text/css" href="../stdstyle.css">

  <title>Faculty Panel</title>
</head>

<body>
  <?php
  session_start();
  include('./db_connect.php');
  include('./getusername.php');
  include('./sidebar_1.php');
?>
  <div class="container col-md-7 offset-3">


<div class="content">
  <div class="content__container">
    <p class="content__container__text">
      Hello
    </p>

    <ul class="content__container__list">
      <li class="content__container__list__item" style="color:cornflowerblue;">Instructor ! 👨‍🏫</li>
      <li class="content__container__list__item"><?php echo " $fname" ?>!</li>
      <li class="content__container__list__item">EWU !</li>
      <li class="content__container__list__item">World ! 🌎 </li>
    </ul>
  </div>
</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>