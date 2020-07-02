<div class="titulo">Desafio Extensão</div>

<?php

    ini_set('display_errors', 0);
    //session_start();

    $arquivo = $_SESSION['arquivos'] ?? []; // '??' caso esteja vazio irá iniciar no modo default um array vazio
    $pastaUpload = __DIR__ . '/../files/'; // __DIR__ = diretório atual
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];
    if(move_uploaded_file($tmp, $arquivo)) {
        echo "<br>Arquivo válido e enviado com sucesso!";
        $arquivos[] = $nomeArquivo; //acrescenta no array do arquivo o nome do arquivo que fez upload
        $_SESSION['arquivos'] = $arquivos;
    }else {
        echo "<br>Erro de upload de arquivo!";
    }

?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <?php if(stripos($arquivo, '.png') > 0): ?>
            <li>
                <img src="../files/<?= $arquivo ?>" heigth="120">
            </li>
        <?php endif ?>
    <?php endforeach ?>    
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>