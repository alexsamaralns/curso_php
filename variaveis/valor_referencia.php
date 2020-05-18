<div class="titulo">Valor vs Referência</div>

<?php
    $variavel = 'valor inicial';
    echo $variavel;

    echo "<br><br>Atribuição por valor";
    $variavelValor = $variavel;
    echo "<br>$variavelValor";
    $variavelValor = 'novo valor';
    echo "<br>$variavel";
    echo "<br>$variavelValor";
    
    echo "<br><br>Atribuição por referência";
    $variavelReferencia = &$variavel;
    $variavelReferencia = 'mesma referencia';
    echo "<br>$variavel $variavelReferencia";

?>