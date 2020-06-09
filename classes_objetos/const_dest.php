<div class="titulo">Construtor e Desconstrutor</div>

<?php

    class Pessoa {

        public $nome;
        public $idade;

        function __construct($novoNome, $idade = 18) {
            echo 'Construtor invocado!<br>';
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo 'Destruiu!' . '<br>';
        }

        public function apresentar() {
            echo "{$this->nome}, {$this->idade} anos.<br>";
        }

    }

    $pessoa = new Pessoa('Alex Amaral', 33);
    $pessoa->apresentar();

    //$pessoa = new Pessoa(); //Forma errada

    unset($pessoa);

    $pessoaB = new Pessoa('Alix Amaral', 10);
    $pessoaB->apresentar();
    $pessoaB = null;



    
?>