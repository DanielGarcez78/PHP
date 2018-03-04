<?php

namespace ENT\Security;

class Usuario {

  private $usuarioID;
  private $nome;
  private $email;
  private $senha;


  public function __construct($nome, $email, $senha) {
      $this->nome = $nome;
      $this->email = $email;
      $this->senha = $senha;
  }


  public function __destruct() {

  }

  public function getUsuarioID() {
    return $this->usuarioID;
  }

  public function setUsuarioID($usuarioID) {
    $this->usuarioID = $usuarioID;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getSenha() {
    return $this->senha;
  }

  public function setSenhha($senha) {
    $this->senha = $senha;
  }

  public function __toString() {
    return $this->nome." ".$this->email;
  }

}

?>
