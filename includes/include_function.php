<div class="titulo">Include Função</div>

<?php

    echo "Carregando: include_function.<br>";

    function carregandoArquivo() {
        include('include_arquivo.php');

        echo "Variável: " . $variavel . "<br>";

        echo soma(2, 5) . "!<br>";
    }

    echo "Novamente no arquivo include_funcao.<br>";
    //echo soma(1, 8) . "!<br>";
    carregandoArquivo();
    echo "Variável: " . $variavel . "<br>";

?>