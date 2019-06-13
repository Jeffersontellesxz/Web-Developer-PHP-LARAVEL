<?php
  // Modelo
  class Funcionario {
    
    // atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    // getters & setters
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function getNome() {
        return $this->nome;
    }

    function getNumFilhos() {
        return $this->numFilhos;
    }
    
    // métodos
    function resumirCadFunc() {
        return "$this->nome possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }
  }

  $y = new Funcionario();
  $y->setNome('Jose');
  $y->setNumFilhos(2);
  // echo $y->resumirCadFunc();
  echo $y->getNome() .  ' possui ' . $y->getNumFilhos() . ' filho(s)';

  echo '<br>';
  $x = new Funcionario();
  $x->getNome('Maria');
  $x->getNumFilhos(0);
  echo $x->getNome() .  ' possui ' . $x->getNumFilhos() . ' filho(s)';
?>