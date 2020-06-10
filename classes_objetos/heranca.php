<div class="titulo">Herança</div>

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

    class Usuario extends Pessoa {
        public $login;

        function __construct($nome, $idade, $login) {
            //$this->nome = $nome;
            //$this->idade = $idade;
            parent::__construct($nome, $idade); //chamando o construtor da super classe
            $this->login = $login;
            echo 'Usuário criado!<br>';
        }

        function __destruct() {
            echo 'Usuário saiu!<br>';
            parent::__destruct(); //chamando o destrutor da super classe
        }

        public function apresentar() {
            parent::apresentar(); //chama a função da super classe
            echo "{$this->login}: {$this->nome} idade: {$this->idade} anos.<br>";
        }

    }

    $usuario = new Usuario('Alex', 33, 'alexsamaralns');
    $usuario->apresentar();
    unset($usuario);

?>