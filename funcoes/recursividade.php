<div class="titulo">Recursividade</div>

<?php

    function somaUmAte($num) {
        $soma = 0;
        for(; $num >= 1; $num--){
            $soma += $num;
        }
        return $soma;
    }

    echo somaUmAte(5) .'<br>';

    function somaRecursivaUmAte($num) {
        if($num == 1) {
            return 1;
        }else {
            return $num + somaRecursivaUmAte($num - 1);
        }
    }

    echo somaRecursivaUmAte(10) . '<br>';

    function somaRecursivaEconomica($num) {
        return $num == 1 ? 1 : $num + somaRecursivaEconomica($num - 1);
    }

    echo somaRecursivaEconomica(10) . '<br>';

?>