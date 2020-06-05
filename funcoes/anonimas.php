<div class="titulo">Funções Anônimas</div>

<?php

    $soma = function($a, $b) {
        return $a + $b;
    };

    echo $soma(5, 8) . "<br>";

    function executar($a, $b, $op, $funcao) {
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

    executar(2, 3, '+', $soma);

    $multiplicacao = function($a, $b) {
        return $a * $b;
    };

    executar(2, 3, 'x', $multiplicacao);

    function divisao($a, $b) {
        return $a / $b;
    }

    executar(9, 3, '÷', divisao);    

?>