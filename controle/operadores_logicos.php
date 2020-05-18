<div class="titulo">Operados Lógicos</div>

<?php
    echo "<p class='divisao'>V ou F</p>";
    var_dump(true);
    echo "<br>";
    var_dump(!true);

    echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr class='divisao'>";
    echo "<br>true && true ";
    var_dump(true && true);
    echo "<br>true && false ";
    var_dump(true && false);
    echo "<br>false && false ";
    var_dump(false && false);
    echo "<br>true && 3 > 2 && 7 <= 7 ";
    var_dump(true && 3 > 2 && 7 <= 7);

    echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr class='divisao'>";
    echo "<br>true || true ";
    var_dump(true || true);
    echo "<br>true || false ";
    var_dump(true || false);
    echo "<br>false || false ";
    var_dump(false || false);
    echo "<br>true || 3 > 2 || 7 <= 7 ";
    var_dump(true || 3 > 2 || 7 <= 7);

    echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr class='divisao'>";
    echo "<br>true xor true ";
    var_dump(true xor true);
    echo "<br>true xor false ";
    var_dump(true xor false);
    echo "<br>false xor false ";
    var_dump(false xor false);
    echo "<br>true xor 3 > 2 xor 7 <= 7 ";
    var_dump(true xor 3 > 2 xor 7 <= 7);
    echo "<br><br>true != true ";
    var_dump(true != true);
    echo "<br>true != false ";
    var_dump(true != false);
    echo "<br>false != false ";
    var_dump(false != false);
    echo "<br>true != 3 > 2 ";
    var_dump(true != 3 > 2);

    echo "<p class='divisao'>Exemplo</p><hr class='divisao'>";
    $idade = 62;
    $sexo = 'M';
    $aposentar = "Pode se aposentar. Idade = ".$idade.". Sexo = ".$sexo.".";
    $criterioHomem = ($idade > 65 && $sexo === 'M');
    $criterioMulher = ($idade >= 60 && $sexo === 'F');
    $pagouPrevidencia = true;

    /*if($idade >= 60 && $sexo === 'F') {
        echo $aposentar." Idade = ".$idade.". Sexo = ".$sexo.".";
    }else if($idade > 65 && $sexo === 'M') {
        echo $aposentar." Idade = ".$idade.". Sexo = ".$sexo.".";
    }else {
        echo "Vai ter de trabalhar mais um pouco...";
    }*/

    if($pagouPrevidencia && $criterioHomem) {
        echo $aposentar;
    }else if($pagouPrevidencia && $criterioMulher) {
        echo $aposentar;
    }else {
        echo "Vai ter de trabalhar mais um pouco...";
    }
?>