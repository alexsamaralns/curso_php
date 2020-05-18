<div class="titulo">Desafio Laço For</div>

<!--
    1) Pode usar incremento $i++
    2) Não pode usar valor aritmético de incremento

    #
    ##
    ###
    ####
    #####    
-->

<?php
    
    $str = '';

    for($i = 0; $i < 5; $i++) {
        $str .= '#';
        echo "$str <br>";
    }

    echo "<hr>";

    $str = '';

    for(; $i > strlen($str);) {
        $str .= '#';
        echo "$str <br>";
    }
    
    echo "<hr>";

    for($str = '#'; $str !== '######'; $str .= '#') {
        echo "$str <br>";
    }

?>