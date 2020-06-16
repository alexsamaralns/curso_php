<div class="titulo">Modificador Final</div>

<?php

    /*
     * Uma classe final não pode gerar herança
     * Um método final não pode ser reescrito
    */

    abstract class Abstrata {
        abstract public function metodo1();

        final public function metodo2() {
            echo "Não pode ser mudado!<br>";
        }
    }

    class Classe extends Abstrata {
        public function metodo1() {
            echo "Executando metodo1.<br>";
        }

        /*public function metodo2() {
            echo "Executando metodo2.<br>";
        }*/
    }

    $classe = new Classe();
    $classe->metodo1();
    $classe->metodo2();

    final class Unica {
        public $attr = "Valor único.";
    }

    $unica = new Unica();
    echo $unica->attr . '<br>';

    /*class Duplicata extends Unica {
        public $att2;
    }*/

?>