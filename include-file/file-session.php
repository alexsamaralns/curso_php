<?php
    session_start();
    //Antes de verificar se o usuário está setado na session
    //Verifica-se se o usuário está presente nos cookies associados ao site
    if(!$_COOKIE['usuario']) {
        $_SESSION['usuario'] = $_COOKIE['usuario'];
    }
    
    if(!$_SESSION['usuario']) {
        header('Location: login.php');
    }
?>