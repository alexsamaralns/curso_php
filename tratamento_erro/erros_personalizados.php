<div class="titulo">Erros Personalizados</div>

<?php

    class FaixaEtariaException extends Exception {

        public function __construct($message, $code = 0, $previous = null) {

            echo "Erro personalizado: $message<br>";
            parent::__construct($message, $code, $previous);

        }

    }

    function calcularTempoAposentadoria($idade) {

        if($idade < 18) {

            throw new FaixaEtariaException("Ainda está muito longe!");
            
        }

        if($idade > 70) {

            throw new FaixaEtariaException("Já deveria estar aposentado.");

        }

        return 70 - $idade;

    }


    $idadesAvaliadas = [15, 18, 14, 25, 26, 54, 60, 68, 70, 82, 71, 33, 37, 23];

    foreach($idadesAvaliadas as $idade) {
        try {
            $tempoRestante = calcularTempoAposentadoria($idade);
            echo "Idade: $idade, $tempoRestante anos para se aposentar.<br>";
        }catch(FaixaEtariaException $e) {
            echo "Não foi possível calcular a idade para $idade anos.<br>";
            echo "Motivo: {$e->getMessage()}<br>";
        }
    }

    echo "Fim.<br>";

?>