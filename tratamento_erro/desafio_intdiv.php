<div class="titulo">Desafio IntDiv</div>

<?php

    /* Sobreescrever método intdiv para...
     * -Lançar uma exceção quando tentar dividir por zero
     * -Lançar uma exceção quando o resultado não for inteiro
     * -Dividir normalmente nos demais casos
     *
     * Os Testes:
     * -intdiv com os parâmetros 8 e 2 [Sucesso]
     * -intdiv com os parâmetros 8 e 3 [Exceção]
     * -intdiv com os parâmetros 8 e 0 [Exceção]
     * -intdiv "original" com os parâmetros 8 e 3 [Sucesso]
    */

    include_once('desafio_intdiv_func.php');
    include_once('desafio_intdiv_tratamento.php');

    use function \CustomIntDiv\intdiv as calcularDivisao;

    $dividendo = 8;
    $divisor = 2;

    try {
        echo "O resultado da divisão de $dividendo por $divisor é: " . calcularDivisao($dividendo, $divisor) . ".<br>";
    }catch(DivisaoException $e) {
        echo "Erro ao efetuar cálculo!<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }

    echo "<hr><br>";

    $dividendo = 8;
    $divisor = 3;

    try {
        echo "O resultado da divisão de $dividendo por $divisor é: " . calcularDivisao($dividendo, $divisor) . ".<br>";
    }catch(DivisaoException $e) {
        echo "Erro ao efetuar cálculo!<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }

    echo "<hr><br>";

    $dividendo = 8;
    $divisor = 0;

    try {
        echo "O resultado da divisão de $dividendo por $divisor é: " . calcularDivisao($dividendo, $divisor) . ".<br>";
    }catch(DivisaoException $e) {
        echo "Erro ao efetuar cálculo!<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }

    echo "<hr><br>";

    $dividendo = 8;
    $divisor = 3;

    try {
        echo "O resultado da divisão de $dividendo por $divisor é: " . intdiv($dividendo, $divisor) . ".<br>";
    }catch(DivisaoException $e) {
        echo "Erro ao efetuar cálculo!<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
    




?>