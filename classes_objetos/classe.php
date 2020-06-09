<div class="titulo">Primeira Classe</div>

<?php

    class Cliente {
        //atributos
        public $nome = "Alex";
        public $idade = 33;

        public function apresentar1() {
            echo "Nome: {$this->nome}, idade: {$this->idade} anos.<br>";
        }

        public function apresentar2() {
            return "Nome: {$this->nome}, idade: {$this->idade} anos.";
        }
    }

    $c1 = new Cliente();
    $c1->apresentar1();
    
    $c2 = new Cliente();
    $c2->nome = 'Izabela';
    $c2->idade = 23;
    $c2->apresentar1();

    $c3 = new Cliente();
    $c3->nome = 'Alix';
    $c3->idade = 10;
    echo $c3->apresentar2() . '<br>';

?>