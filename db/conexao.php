<?php

    function novaConexao($banco = 'curso_php') {
        $servidor = 'localhost';
        $usuario = 'root';
        $senha = '';

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);

        if($conexao->connect_error) {
            die('Erro: ' . $conexao->connect_error);
            /*echo 'Erro: ' . $conexao->connect_error;
            exit();*/
        }

        return $conexao;
    }

?>