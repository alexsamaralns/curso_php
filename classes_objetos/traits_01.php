<div class="titulo">Traits 01</div>

<?php

    trait validacao {
        public $a = 'Valor a';
        private $c = "Valor C privado!";
        public function validarString($str) {
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor {
        public $b = 'Valor b';
        public function validarStringMelhor($str) {
            return isset($str) && trim($str);
        }
    }

    class Usuario {
        use validacao, validacaoMelhor;

        public function imprimirValorC() {
            echo $this->c;
        }
    }

    $user = new Usuario();
    var_dump($user->validarString((' ')));
    echo "<br>";
    var_dump($user->validarStringMelhor((' ')));
    echo "<br>";
    echo $user->a . '<br>';
    echo $user->b . '<br>';
    echo $user->imprimirValorC() . '<br>';
    
?>