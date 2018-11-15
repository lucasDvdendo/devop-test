<?php
$version= "1.6";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Devop Test v<?=$version?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        body{
            background-color:#007fff;
            color:#fff;
        }
        #wrapper {
            margin-top:200px;
        }
    </style>
  </head>

  <body class="text-center">

      <div id="wrapper">
        <img class="mb-4" src="dvdendo-footer.png" alt="" width="200">
        <br>
        <h3>Devop Test v.<?=$version?><br></b><small><?=$_SERVER['ENVIRONMENT']?></small></h3>
      </div>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
