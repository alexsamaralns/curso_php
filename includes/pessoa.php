<?php

    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {   
            $this->nome = $nome;
            $this->idade = $idade;
            echo 'Pessoa criada!<br>';
        }

        function __destruct() {
            echo 'Pessoa saiu!<br>';
        }

        public function apresentar() {
            echo "{$this->nome} idade: {$this->idade} anos.<br>";
        }

    }

?>    