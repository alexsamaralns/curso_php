<div class="titulo">Escrever Arquivo</div>

<?php

    $arquivo = fopen('teste.txt', 'w');
    fwrite($arquivo, "Valor inicial.\n");
    $str = "Segunda linha.\n";
    fwrite($arquivo, $str);
    fclose($arquivo);

    $arquivo = fopen('teste.txt', 'w'); // 'w' apaga todo conteúdo antes de escrever
    fwrite($arquivo, "Novo conteúdo");
    fclose($arquivo);

    $arquivo = fopen('teste.txt', 'a'); // 'a' acrescenta conteúdo ao arquivo
    fwrite($arquivo, " com novos valores");
    fwrite($arquivo, " adicionados em um segundo momento.\n");
    fclose($arquivo);

    $arquivo = fopen('teste2.txt', 'x'); // 'x' quando necessário trabalhar com um novo arquivo
    fwrite($arquivo, "Arquivo novo.\n");
    fclose($arquivo);


?>