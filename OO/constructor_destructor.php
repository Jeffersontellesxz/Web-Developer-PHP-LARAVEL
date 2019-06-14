<?php
    class Pessoa {
        public $nome = null;

        // Construir Objeto
        function __construct($nome) {
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        // Destruir Objeto
        function __destruct() {
            echo 'Objeto removido';
        }

        function __get($name) {
            return $this->$name;
        }

        function correr() {
            return $this->__get('nome') . ' esta correndo';
        }
    }

    $pessoa = new Pessoa('Jeff');
    echo '<br />Nome ' . $pessoa->__get('nome');
    echo '<br />' . $pessoa->correr();

    echo '<br/>';
    //unset($pessoa);
?>