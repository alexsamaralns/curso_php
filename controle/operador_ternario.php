<div class="titulo">Operador ternário</div>

<?php
    $idade = 70;
    $status;

    if($idade >= 18) {
        $status = 'Mario de idade.';
    }else {
        $stauts = 'Menor de idade.';
    }
    echo "$status<br>";

    $idade = 17;
    $status = $idade >= 18 ? 'Maior de idade.' : 'Menor de idade.';
    echo "$status<br>";

    $idade = 65;
    $status = $idade >= 18 ? ($idade >= 65 ? 'Aposentado.' : 'Maior de idade.') : 'Menor de idade';
    echo "$status<br>";

    $status = $idade >= 18 ? (exemplo($idade)) : 'Menor de idade';
    echo "$status<br>";

    function exemplo($idade) {
        echo "A idade é de $idade anos. ";
        //$idade = 16;
        $idade >= 18 ? maiorDeIdade($idade) : menorDeIdade($idade);
    }

    function maiorDeIdade($idade) {
        echo "<br> $idade anos, de maior.";
    }

    function menorDeIdade($idade) {
        echo "<br> $idade anos, de menor.";
    }

?>