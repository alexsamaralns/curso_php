<div class="titulo">Gerenciando Sessão</div>

<?php

    //session_id('7aacba6947ca861aaa88429be60a7ed5');
    session_start();
    echo session_id();

    $contador =&$_SESSION['contador'];
    $contador = $contador ? $contador + 1 : 1;
    echo '<br>' . $_SESSION['contador'];

    if($_SESSION['contador'] % 5 === 0) {
        session_regenerate_id();
    }

    if($_SESSION['contador'] >= 15) {
        session_destroy();
    }

?>