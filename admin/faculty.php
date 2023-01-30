<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Faculty Panel</title>
</head>

<body>
  <?php
  include('./sidebar_1 f.php');
  ?>



  <style>
    h1::before {
      transform: scaleX(0);
      transform-origin: bottom right;
    }

    h1:hover::before {
      transform: scaleX(1);
      transform-origin: bottom left;
    }

    h1::before {
      content: " ";
      display: block;
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      inset: 0 0 0 0;
      background: hsl(200 100% 80%);
      z-index: -1;
      transition: transform .3s ease;
    }

    h1 {
      position: relative;
      font-size: 5rem;
    }

    html {
      block-size: 100%;
      inline-size: 100%;
    }

    body {
      min-block-size: 100%;
      min-inline-size: 100%;
      margin: 0;
      box-sizing: border-box;
      display: grid;
      place-content: center;
      font-family: system-ui, sans-serif;
    }

    @media (orientation: landscape) {
      body {
        grid-auto-flow: column;
      }

    }
  </style>

  <h1> Faculty Management</h1>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>