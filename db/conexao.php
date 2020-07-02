<?php

    function novaConexao($banco = 'curso_php') {
        $servidor = '127.0.0.1:3301';
        $usuario = 'root';
        $senha = 'root';

        $conexao = new mysqli($servidor, $usuario, $banco);

        if($conexao->connect_error) {
            die('Erro: ' . $conexao->connect_error);
            /*echo 'Erro: ' . $conexao->connect_error;
            exit();*/
        }

        return $conexao;
    }

?>