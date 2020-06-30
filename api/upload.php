<div class="titulo">Upload</div>

<?php

    print_r($_FILES);
    print_r($_POST);
    print_r($_GET);

    if($_FILES && $_FILES['arquivo']) { // 'arquivo é o name do input
        $pastaUpload = "/opt/lampp/htdocs/curso_php/"; // destino do arquivo
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload . $nomeArquivo;
        $tmp = $_FILES['arquivo']['tmp_name']; // uma vez tendo o arquivo temporário, posso mover o arquivo temporário para o caminho definitivo
        if(move_uploaded_file($tmp, $arquivo)) { // nessa função passa-se o arquivo temporário e também o caminho
            echo "<br>Arquivo válido e enviado com sucesso!";
        }else {
            echo "<br>Erro no upload do arquivo!";
        } 
    }

?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>