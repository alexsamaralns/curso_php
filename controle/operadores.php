<div class="titulo">Operadores Relacionais</div>

<?php
    echo "1 == 1 ";
    var_dump(1 == 1);
    echo "<br>1 > 1 ";
    var_dump(1 > 1);
    echo "<br>1 >= 1 ";
    var_dump(1 >= 1);
    echo "<br>1 < 1 ";
    var_dump(1 < 1);
    echo "<br>1 != 1 ";
    var_dump(1 != 1);
    echo "<br>1 <> 1 ";
    var_dump(1 <> 1);

    echo "<br>111 == '111' ";
    var_dump(111 == '111');
    echo "<br>111 === '111' ";
    var_dump(111 === '111');
    echo "<br>111 != '111' ";
    var_dump(111 != '111');
    echo "<br>111 !== '111' ";
    var_dump(111 !== '111');

    echo "<p class='divisao'>Relacionais do If / Else</p><hr class='divisao'>";
    $idade = 70;
    if($idade < 18) {
        echo "Menor de idade. $idade anos.<br>";
    }else if($idade < 65) {
        echo "Adulto. $idade anos.<br>";
    }else {
        echo "Terceira idade. $idade anos.<br>";
    }

    echo "<p class='divisao'>Spaceship</p><hr class='divisao'>";
    var_dump(5 <=> 3);
    var_dump(5 <=> 5);
    var_dump(5 <=> 8);

    echo "<p class='divisao'>Valores podem ser verdadeiros ou falsos</p><hr class='divisao'>";
    var_dump(!!5);
    var_dump(!!0);
    var_dump(!!"");

?>