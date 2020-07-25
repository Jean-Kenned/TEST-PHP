<?php

class Usuario {
  public $id;
  public $nome;
  public $cpf;
  public $cep;
  public $email;
  public $sexo;

  
function __construct($id, $nome,$cpf,$cep,$email,$sexo) {
    $this->id = $id;
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->cep = $cep;
    $this->email = $email;
    $this->sexo = $sexo;
  }

}

?>