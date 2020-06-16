<div class="titulo">Include vs Require</div>

<?php

    echo "Usando include com arquivo inexsitente...<br>";
    include('arquivo_inexistente.php');
    
    echo "Usando require com arquivo inexsitente...<br>";
    require('arquivo_inexistente.php');

    echo "Não achou mesmo!";

?>