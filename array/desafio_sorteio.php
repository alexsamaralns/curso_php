<div class="titulo">Desafio Sorteio</div>

<?php
    $personagens = [
        "Chaves",
        "Quico",
        "Seu Madruga",
        "Chiquinha",
        "Dona Florinda",
        "Bruxa do 71",
        "Senhor Barriga",
        "Inhonhô"
    ];

    $indice = array_rand($personagens);
    echo "<div center><h1>$personagens[$indice]</h1></div>";
?>
    <div center>
        <input type="button" value="Qual personagem?" onClick="history.go(0)">
    </div>    

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>