<div class="titulo">Variáveis variáveis</div>

<?php
    $a = 'valorA';
    $$a = 'valorAA';
    echo "$a {$$a}";
    echo "<br> $a {$$a} ${$a} $valorA";

    $epa = 'opa';
    $opa = 'vish';
    $vish = 'eita';
    echo "<br>$epa";
    echo "<br>$epa {$$epa} {$$$epa}";
?>