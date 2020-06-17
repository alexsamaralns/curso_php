<?php namespace App; ?>

<div class="titulo">Sub-Namespaces</div>

<?php

    echo __NAMESPACE__ . '<br>';
    const constante = 123;
    echo constante . '<br>';

    namespace App\Principal;
    echo __NAMESPACE__ . '<br>';
    const constante = 234;
    echo constante . '<br>';

    namespace App\Principal\Especifico;
    echo __NAMESPACE__ . '<br>';
    const constante = 345;
    echo constante . '<br>';

    echo constante('\\' . __NAMESPACE__ . '\constante') . '<br>'; //acessando a variável do namespace diretamente

    echo \App\constante . '<br>'; //acessando a variável de um namespace específico

    echo \App\Principal\constante . '<br>';

    echo \App\Principal\Específico\constante . '<br>';

?>