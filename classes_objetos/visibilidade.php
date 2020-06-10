<div class="titulo">Visibilidade</div>

<?php

    class A {

        public $publico = 'Público';
        protected $protegido = 'Protegido';
        private $privado = 'Privado';

        public function mostrarA() {
            echo "Class A: Público = {$this->publico}.<br>
                Class A: Protegio = {$this->protegido}.<br>
                Class A: Privado = {$this->privado}.<br>";
        }

        private function naoMostrar() {
            echo 'Não vai imprimir.<br>';
        }

        protected function porHeranca() {
            echo 'Impresso por herança.<br>';
        }

    }

    $a = new A();
    $a->mostrarA();

    class B extends A {

        public function mostrarB() {
            echo "Class B: Público = {$this->publico}.<br>
                  Class B: Protegio = {$this->protegido}.<br>
                  Class B: Privado = {$this->privado}.<br>";
            parent::porHeranca();
        }

    }

    $b = new B();
    $b->mostrarB();
    $b->mostrarA();
    //$b->porHeranca(); //não irá acessar

?>