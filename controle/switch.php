<div class="titulo">Switch</div>

<?php
    $categoria = 'luxo';
    $preco = 0.0;
    $carro = '';

    if($categoria === 'luxo') {
        $carro = 'Mercedes';
        $preco = 250000;
    }else if($categoria === 'SUV') {
        $carro = 'Renegade';
        $preco = 80000;
    }else {
        $carro = 'Mobi';
        $preco = 33000;
    }

    $precoFormatado = number_format($preco, 2, ',', '.');
    echo "<p class='divisao'>Usando apenas If/Else</p><hr class='divisao'>";
    echo "<p>Carro: $carro<br>Preço: R$$precoFormatado</p>";

    $categoria = 'SUV';

    switch($categoria) {
        case 'luxo':
            $carro = 'Mercedes';
            $preco = 250000;
            break;
        case 'SUV':
        case 'SUV básico':
            $carro = 'Renegade';
            $preco = 80000;
            break;
        default:
            $carro = 'Mobi';
            $preco = 33000;
            break;
    }
    $precoFormatado = number_format($preco, 2, ',', '.');
    echo "<p class='divisao'>Usando Switch</p><hr class='divisao'>";
    echo "<p>Carro: $carro<br>Preço: R$$precoFormatado</p>";

?>