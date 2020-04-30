<div class="titulo">Variáveis</div>

<?php
    $numeroA = 13;
    echo $numeroA, '<br>';
    var_dump($numeroA);
    echo '<br>';
    $a = 3;
    $b = 16;
    $soma = $a + $b;
    echo $soma;
    echo '<br>';
    echo isset($soma);
    echo '<br>';
    unset($soma);
    echo isset($soma);
    echo '<br>';
    var_dump($soma);
    echo '<br>';
    $variavel = 10;
    echo $variavel;
    echo '<br>';
    $variavel = "Now is a string";
    echo $variavel;
    echo '<br>';

    //Nomes de variáveis
    $var = 'válida';
    $var2 = 'válida';
    $VAR3 = 'válida';
    $vâr5 = 'válida'; //evitar!!!
    //$6var = 'inválida';
    //$%var7 = 'inválida';
    //$var8% = 'inválida';

    echo '<br>';
    var_dump($_SERVER);
    echo '<br>';
    var_dump($_SERVER['HTTP_HOST']);
?>