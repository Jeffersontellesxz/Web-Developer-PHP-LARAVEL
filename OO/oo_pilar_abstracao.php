<?php
  // Modelo
  class Funcionario {
    
    // atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = Null;

    // getters & setters (overloading / sobrecarga)
    function __set($name, $value) {
        $this->$name = $value;
    }

    function __get($name) {
        return $this->$name;
    }
    /*
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
    */
    
    // métodos
    function resumirCadFunc() {
        return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s)";
    }

    function modificarNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }
  }

  $y = new Funcionario();
  $y->__set('nome', 'José');
  $y->__set('numFilhos', 2);
  $y->__set('cargo', 'Design');
  $y->__set('salario', 1500);
  echo $y->resumirCadFunc();
//   echo $y->__get('nome') .  ' possui ' . $y->__get('numFilhos') . ' filho(s), seu cargo é de ' . $y->__get('cargo'). ' é seu salario e de ' . $y->__get('salario') .'R$';

  echo '<br>';
  $x = new Funcionario();
  $x->__set('nome', 'Maria');
  $x->__set('numFilhos', 0);
  $x->__set('cargo', 'Programadora');
  $x->__set('salario', 2100);
  echo $x->resumirCadFunc();
//   echo $x->__get('nome') .  ' possui ' . $x->__get('numFilhos') . ' filho(s), seu cargo é de ' . $x->__get('cargo'). ' é seu salario e de ' . $x->__get('salario') .'R$';
?>