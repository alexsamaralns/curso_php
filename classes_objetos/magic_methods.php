<div class="titulo">Métodos Mágicos</div>

<?php

    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            echo "Construtor invocado!<br>"; 
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo "<br>Método destruir.";
        }

        public function __toString() {
            return "{$this->nome} tem {$this->idade} anos.<br>";
        }

        //O this automaticamente chamará o __toString
        public function apresentar() {
            echo $this;
        }

        public function __get($attr) {
            echo "Lendo um atributo não declarado: {$attr}.<br>";
        }

        public function __set($attr, $valor) {
            echo "Alterando atributo não declarado: {$attr} / {$valor};<br>";
        }

        public function __call($metodo, $params) {
            echo "<br>Tentando executar método: '${metodo}'.";
            echo "<br>, com os parâmetros: ";
            print_r($params);
        }
    }

    $pessoa = new Pessoa('Alex', 33);
    $pessoa->apresentar(); //chamando o _toString
    echo $pessoa; //chamando o _toString
    $pessoa->nome = "Izabela";
    $pessoa->idade = 23;

    //chama o método diretamente sem o __call
    $pessoa->apresentar();

    $pessoa->nomeCompleto = 'Alex Amaral'; // _set
    
    echo $pessoa->nome; // _get

    //acessa o atributo diretamente sem o __get

    $pessoa->exec(); 

    // __call porque o método não existe no objeto
    $pessoa->exec(1, 'teste', true, [1, 2, 3]);

    $pessoa = null;

?>