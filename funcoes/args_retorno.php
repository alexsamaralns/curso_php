<div class="titulo">Argumentos & Retorno</div>

<?php
    function obterMensagem() {
        return 'Seja bem vindo(a)!';
    }

    echo obterMensagem();

    $mensagem = obterMensagem();

    echo "<br>$mensagem";

    echo '<br>', obterMensagem(), '<br>';

    var_dump(obterMensagem());

    function obterMensagemComNome($nome) {
        return "Bem vindo, {$nome}!";
    }

    echo "<br>", obterMensagemComNome('Alex');

    function soma($num1, $num2) {
        return $num1 + $num2;
    }

    echo '<br>', soma(4, 5);

    $x = 9;
    $y = 15;

    echo '<br>', soma($x, $y);
    
    function trocaValor($a, $novoValor) {
        $a = $novoValor;
    }

    $variavel = 1;

    trocaValor($variavel, 3);

    echo '<br>'.$variavel.'<br>';

    function trocaValorDeVerdade(&$a, $novoValor) {
        $a = $novoValor;
    }

    trocaValorDeVerdade($variavel, 3);

    echo $variavel.'<br>';

?>