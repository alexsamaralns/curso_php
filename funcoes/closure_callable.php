<div class="titulo">Closure & Callable</div>

<?php

    $soma1 = function($a, $b) {
        return $a + $b;
    };

    echo $soma1(1, 3). '<br>';

    echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

    $soma2 = 2;

    echo (is_callable($soma2) ? 'Sim' : 'Não') . '<br>';

    var_dump($soma1);

    //Colocando o tipo Callable, pode ser chamado uma função anônima ou não
    function executar($a, $b, $op, Callable $funcao) {
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

    executar(2, 3, '+', $soma1);

    //Colocando o tipo Closure, pode ser chamado apenas função anônima
    function executar2($a, $b, $op, Closure $funcao) {
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

?>