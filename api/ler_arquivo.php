<div class="titulo">Ler Arquivo</div>

<?php

    $arquivo = fopen('teste.txt', 'r'); // 'r' abre o arquivo em modo leitura
    echo fread($arquivo, 10);
    echo '<br>';
    echo fread($arquivo, 10);
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    $tamanho = filesize('teste.txt');
    echo $tamanho . '<br>';
    echo fread($arquivo, $tamanho) . '<br>';
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    echo fgets($arquivo) . '<br>';
    echo fgets($arquivo) . '<br>';
    var_dump(fgets($arquivo)); // fgets lê o arquivo linha por linha
    echo '<br>';
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    while(!feof($arquivo)) {
        echo fgets($arquivo) . '<br>';
    }
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    while(!feof($arquivo)) {
        echo fgetc($arquivo); // fgetc lê o arquivo caracter por caracter
    }   
    echo '<br>';
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r+'); // 'r+' abre o arquivo tanto como leitura como escrita
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    fwrite($arquivo, "Durante a leitura.");
    fclose($arquivo);

    echo "Fim!<br>";


?>