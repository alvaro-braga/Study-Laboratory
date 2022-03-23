<?php

class Pessoa {

  public $nome;//Atributo

  public function talk() {//Método

    return "My name is " . $this->nome;

  }

}

$someone = new Pessoa();
$someone->nome = "Alvaro Braga";
echo $someone->talk();

?>