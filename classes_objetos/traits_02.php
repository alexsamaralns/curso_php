<div class="titulo">Traits 02</div>

<?php

    trait validacao {
        public function validarString($str) {
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor {
        public function validarString($str) {
            return isset($str) && trim($str);
        }
    }

    class Usuario{
        use validacao, validacaoMelhor {
            //Resolvendo conflito, definindo qual método de qual traits usar
            validacaoMelhor::validarString insteadOf validacao;

            //Se ainda for usar o método, pode-se aplicar um alias
            validacao::validarString as validacaoSimples;
        }
    }

    $user = new Usuario();
    var_dump($user->validarString(' '));
    echo "<br>";
    var_dump($user->validacaoSimples(' '));

?>