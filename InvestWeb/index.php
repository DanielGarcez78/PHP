<?php
  session_start();
  require_once("Config.php");
 ?>



<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="InvestWeb">
    <meta name="author" content="www.joust.com.br">

    <title>InvestWeb - Aprenda a Investir</title>
    <!-- Bootstrap core CSS -->
    <link href="/InvestWeb/Style/css/bootstrap.min.css" rel="stylesheet">
    <link href="/InvestWeb/Style/css/Index/index.css" rel="stylesheet">

  </head>

  <body class="text-center">

    <form method="post" class="form-signin" action="./Api/Services/Login.php">

      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="email" class="sr-only">E-mail</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" autofocus>
      <label for="senha" class="sr-only">Senha</label>
      <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
      <!--
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      -->
      <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>

    </form>
  <body>
</html>
