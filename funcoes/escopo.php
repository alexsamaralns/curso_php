<div class="titulo">Função & Escopo</div>

<?php
    function imprimirMensagens() {
        echo "Olá! ";
        echo "Até a próxima!<br>";
    }

    imprimirMensagens();
    
    $variavel = 1;

    function trocaValor() {
        $variavel = 2;
        echo "Durante a função: $variavel<br>";
    }

    echo "Antes: $variavel<br>";

    trocaValor();

    echo "Depois: $variavel<br><hr>";

    function trocaValorDeVerdade() {
        global $variavel; //global referencia a variável que está no escopo global
        $variavel = 3;
        echo "Durante a função: $variavel<br>";
    }

    echo "Antes: $variavel<br>";

    trocaValorDeVerdade();

    echo "Depois: $variavel<br><hr>";

    var_dump(trocaValorDeVerdade());


?>