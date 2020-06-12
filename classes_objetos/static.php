<div class="titulo">Membros Estáticos</div>

<?php

    class A {
        public $naoStatic = 'Variável de instância.';
        public static $static = 'Variável de classe (estática).';

        public function mostrarA() {
            echo "Não estática = {$this->naoStatic}<br>";
            //Tentativa 1
            //echo "Estática = {$this->static}<br>";
            //Tentativa 2
            echo "Estática = " . self::$static . "<br>";
        }

        public static function mostrarStatic() { //Em uma função estática, só acessa membros estáticos
            //echo "Não estática = {$this->naoStatic}<br>";
            //echo "Estática = {$static}<br>";
            echo "Estática = " . self::$static . "<br>";
        }
    }

    //$objetoA = new A();
    //$objetoA->mostrarA();
    //$objetoA->mostrarStatic(); //Acessando função estática de forma não ideal
    A::mostrarStatic(); //Forma correta de acessar função estática diretamente da classe mesmo sem instância
    echo A::$static; //Apenas membros estáticos

    A::$static = "<br>Alterando membro de classe";
    echo A::$static;    

?>