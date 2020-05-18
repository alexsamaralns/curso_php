<div class="titulo">Constantes</div>

<?php
    define('TAXA_DE_JUROS', 5.9); //constantes sempre maiúsculas e separadas por underline
    echo TAXA_DE_JUROS; //variáveis constantes não necessitam do cifrão '$'
    const NOVA_TAXA = 2.5;
    echo '<br>' . NOVA_TAXA;
    $valor = 2.8;
    define('NOVISSIMA_TAXA', $valor);
    echo '<br>' . NOVISSIMA_TAXA;
?>