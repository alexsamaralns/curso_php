<div class="titulo">Desafio do Módulo</div>

<?php

    require_once('usuario.php');

    $usuario = new Usuario('Alex', 33, 'alexsamaralns');
    $usuario->apresentar();
    unset($usuario);

?>