<?php

    namespace CustomIntDiv;

    require('desafio_intdiv_tratamento.php');

    function intdiv($dividendo, $divisor) {
        if($divisor == 0) {
            throw new \DivisaoException("Erro ao efetuar divisão por zero!");
        }

        if($dividendo % $divisor != 0) {
            throw new \DivisaoException("Divisão não retornou número inteiro!");
        }

        return ($dividendo / $divisor);

    }
    

?>