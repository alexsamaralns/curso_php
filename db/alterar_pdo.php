<div class="titulo">PDO: Alterar</div>

<?php

    require_once "conexao_pdo.php";

    $sql = "UPDATE cadastro
        SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ?
        WHERE id = ?";
    
    $conexao = novaConexao();
    $stmt = $conexao->prepare($sql);
    $resultado = $stmt->execute([
        'Alex',
        '1986-07-26',
        'alex@gmail.com',
        'https://alexamaral.com.br',
        1,
        13000,
        1
    ]);

    if($resultado) {
        echo "Sucesso!";
    }else {
        print_r($stmt->errorInfo());
    }

?>