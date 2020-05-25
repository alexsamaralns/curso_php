<div class="titulo">Argumento Padrão</div>

<?php

    function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
        return "Bem vindo, $nome $sobrenome!";
    }

    echo saudacao() . '<br>';
    echo saudacao(null) . '<br>';
    echo saudacao(null, null) . '<br>';
    echo saudacao('Mestre', 'Supremo') . '<br>';

    function anotarPedido($comida, $bebida = 'Água') {
        echo "Para comer = $comida<br>";
        echo "Para beber = $bebida<br>";
    }

    anotarPedido('Hamburguer');
    anotarPedido('Pizza', 'Refrigerante');

    function anotarPedido2($bebida = 'Água', $comida) {
        echo "Para comer = $comida<br>";
        echo "Para beber = $bebida<br>";
    }

    //anotarPedido2('Hamburguer');
    anotarPedido2('Refrigerante2', 'Pizza2');

?>