<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  include __DIR__.'/../Utils/verifica_login.php';
  ?>

<!DOCTYPE html>
<html class="bg" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Painel Ordens de serviço</title>
  <link rel="stylesheet" type="text/css" href="css/painel.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- bootbox code -->
  <script src="js/bootbox.min.js"></script>
  <script src="js/bootbox.locales.min.js"></script>
</head>

<body class="bg-light">
  <div class="navbar navColor">
    <h5 class="welcomeFont">Seja bem vindo!</h5>
    <a href="/logout" class="btn btn-outline-success my-2 my-sm-0" role="button" aria-pressed="true">Sair</a>
  </div>
  <div class="container"> -

  </div>

</body>

</html>

