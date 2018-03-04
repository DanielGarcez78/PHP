<?php

  if (!isset($_SESSION["ROOT"])) {
    $_SESSION["ROOT"] = __DIR__ . DIRECTORY_SEPARATOR;
  }

  spl_autoload_register(function($nomeClass){
    //  Registro as classes das entidades do módulo de segurança
    $filename = $_SESSION["ROOT"] . $nomeClass . ".php";
    if (file_exists($filename)) {
      require_once($filename);
    }
  });

?>
