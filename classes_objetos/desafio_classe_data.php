<div class="titulo">Desafio Classe Data</div>

<?php

    class Data {
        public $dia = '01';
        public $mes = '01';
        public $ano = 1970;

        public function apresentar() {
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }

    }

    $d1 = new Data();
    echo $d1->apresentar() . '<br>';

    $d2 = new Data();
    $d2->dia = date('d');
    $d2->mes = date('m');
    $d2->ano = date('yy');
    echo $d2->apresentar() . '<br>';

    $d3 = new Data();
    $d3->dia = '26';
    $d3->mes = '07';
    $d3->ano = 1986;
    echo $d3->apresentar() . '<br>';

?>