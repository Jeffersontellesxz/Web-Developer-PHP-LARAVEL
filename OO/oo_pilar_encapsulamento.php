<?php
    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        
        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $value;
        }

        private function executarMania() {
            echo 'Assobiar';
        }

        private function responder() {
            echo 'Oi';
        }

        public function executarAcao() {
            $x = rand(1, 10);

            if($x >= 1 && $x <= 8) {
                $this->responder();
            } else {
                $this->executarMania();
            }
        }
    }

    class Filho extends Pai {
        public function getAtributo($attr) {
            return $this->$attr;
        }

        public function setAtributo($attr, $value) {
            $this->$attr = $value;
        }
    }

    $filho = new Filho();

    echo '<pre>';
    print_r($filho);
    echo '</pre>';
    
    // Exibir os metodos do objeto
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';

    echo $filho->__get('nome');
    $filho->__set('nome', 'Jamilton');
    echo '<br>';
    echo $filho->__get('nome');
?>