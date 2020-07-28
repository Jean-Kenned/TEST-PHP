<?php

class Usuario {
  public $id;
  public $nome;
  public $cpf;
  public $email;
  public $sexo;

  
function __construct($id, $nome,$cpf,$email,$sexo) {
    $this->id = $id;
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->email = $email;
    $this->sexo = $sexo;
  }

}

?>