<div class="titulo">Argumentos Variáveis</div>

<?php

    function soma($n1, $n2) {
        return $n1 + $n2;
    }

    echo soma(4, 5, 6) . '<br>';

    //3 pontos significa que todos os argumentos serão inseridos em um array
    function somaCompleta(...$numeros) { 
        $soma = 0;
        foreach($numeros as $num) {
            $soma += $num;
        }
        return $soma;
    }

    echo somaCompleta(1, 2, 3, 4, 5, 6) . '<br>';

    $array = [6, 7, 8];

    //passando o array como parâmetros, coloca-se 3 pontos para desmembrar cada valor do array
    echo somaCompleta(...$array) . '<br>';

    function membros($titular, ...$dependentes) {
        echo "Titular: $titular<br>Dependentes:<br>";
        foreach($dependentes as $dep) {
            echo "$dep<br>";
        }
    }

    membros("Alex", "Izabela", "Alix", "Ecklysvaniah", "Déboro Terezo");    

?>