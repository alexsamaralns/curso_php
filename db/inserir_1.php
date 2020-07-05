<div class="titulo">Inserir Registrtos 1</div>

<?php

    require_once "conexao.php";

    $sql = "INSERT INTO cadastro(nome, nascimento, email, site, filhos, salario)
        VALUES('Ecklysvaniah', '2031-10-20', 'klysh@gmail.com', 'designer.com', 0, 3000.00)";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    if($resultado) {
        echo "Dados inseridos com sucesso!<br>";
    }else {
        echo "Erro $conexao->error<br>";
    }

    $conexao->close();

?>