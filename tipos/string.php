<div class="titulo">Strings</div>

<?php
    echo 'Isto é uma string';
    echo '<br>';
    var_dump("É uma String"); //o acento conta como 1 caracter
    echo '<br>';

    //Concatenação
    echo "Esta string" . " está concatenada!", '<br>';
    echo "String ", "concatenada com vírgula.", '<br>'; //vĺido apenas no echo
    echo "'Aspas simples', " . '"aspas duplas, " ' . '\'aspas simples com barra,\' ' . "\"aspas duplas com barra,\" " . "\\";
    print("<br>Função print usando parênteses.");
    print "<br>Função print sem parênteses.";

    //Algumas funções
    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('MINIMIZADO');
    echo '<br>' . ucfirst('só a primeira letra');
    echo '<br>' . ucwords('todas as palavras com primeira letra maiúscula');
    echo '<br>' . '<p>Tamanho da string: quantidade de caracteres</p>' . strlen('quantidade de caracteres');
    echo '<br>' . '<p>Tamanho da string: Não conta acentos ó ô</p>' . mb_strlen("Não conta acentos ó ô");
    echo '<br>' . substr('Só uma parte da string', 7, 6);
    $frase = "Trocar isso!";
    echo '<br>' . str_replace('isso', 'aquilo', $frase);
?>