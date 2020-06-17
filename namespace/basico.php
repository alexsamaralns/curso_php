<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php

    echo __NAMESPACE__ . '<br>';

    const  CONSTANTE1 = 123;
    define('contexto\CONSTANTE2', 234);
    define('CONSTANTE2', 111); // constante definida no NAMESPACE raiz do PHP;
    define(__NAMESPACE__ . '\CONSTANTE3', 456);
    define('outro_contexto\CONSTANTE4', 678);

    echo CONSTANTE1 . '<br>';
    echo CONSTANTE2 . '<br>';
    echo \CONSTANTE2 . '<br>'; //acessa a constante no NAMESPACE raiz do PHP
    echo \contexto\CONSTANTE3 . '<br>'; //acessando pelo caminho absoluto deve-se colocar a barra invertida
    echo constant(__NAMESPACE__ . '\CONSTANTE3') . '<br>';
    echo \outro_contexto\CONSTANTE4 . '<br>';

    function soma($a, $b) {
        return $a + $b;
    }

    echo \contexto\soma(1, 3) . '<br>';
    echo soma(15, 15) . '<br>'; // irá acessar por estar dentro do namespace

    function strpos($str, $text) {
        echo "Buscando o texto '{$text}' em '{$str}'.<br>";
        return 1;
    }

    echo strpos('Texto genérico para busca', 'busca') . '<br>'; //acessa a função dentro do namespace
    echo \strpos('Texto genérico para busca', 'busca') . '<br>'; //acessa a mesma função na API do PHP

?>