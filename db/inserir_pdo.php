<div class="titulo">PDO: Inserir</div>

<?php

    require_once "conexao_pdo.php";

    $sql = "INSERT INTO cadastro
        (nome, email, nascimento, site, filhos, salario)
        VALUES('Déboro', 'db@gmail.com', '2025-05-18', 'https://deoro.com', 0, 3000)";
    
    $conexao = novaConexao();
    //print_r(get_class_methods($conexao));

    if($conexao->exec($sql)) {
        $id = $conexao->lastInsertId();
        echo "Novo cadastro com id $id";
    }else {
        echo $conexao->errorCode();
        print_r($conexao->errorInfo());
    }

?>