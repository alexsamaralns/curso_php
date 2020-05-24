<div class="titulo">Desafio Impressão</div>

<!--
    Enunciado:
    --Imprima apenas os valores do array que contém índice par
    --Desafio adicional: Resolver com for e foreach
    --Valores esperados: AAA, CCC, EEE
-->

<?php
    $array = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];

    for($i = 0; $i < count($array); $i++) {
        if($i % 2 != 0) continue;
        echo "$array[$i]<br>";        
    }

    echo "<br><hr>";

    foreach($array as $i => $valor) {
        if($i % 2 != 0) continue;
        echo "$array[$i]<br>";
    }
    
?>