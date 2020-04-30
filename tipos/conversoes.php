<div class="titulo">Conversões</div>

<?php
    echo is_int(PHP_INT_MAX);

    //Conversões de int para float
    echo '<p>---Int para Float---</p>';
    var_dump(PHP_INT_MAX + 1);
    echo '<br>';
    var_dump(1 + 1.0);
    echo '<br>';
    var_dump((float) 3);

    //Conversões de float para int
    echo '<p>---Float para Int---</p>';
    var_dump((int) 2.8);
    echo '<br>';
    var_dump(intval(2.8, 10)); //após a vírgula é a base que será convertido
    echo '<br>';
    var_dump(round(2.8)); //arredonda porém mantém como float
    echo '<br>';
    var_dump((int)round(2.8)); //arredonda e converte para int

    //Operações com strings
    echo '<p>--Operações com Strings---</br>';
    var_dump(3 + "2");
    echo '<br>';
    var_dump("3" + 2);
    echo '<br>';
    var_dump("3" . 2);
    echo '<br>', is_string("3" . 2);
    echo '<br>', is_string("3" + 2); //não irá aparecer nada pois se tornou um int e a função retorna false
    var_dump(1 + "cinco");
    echo '<br>';
    var_dump(1 + "5 cinco");
    echo '<br>';
    var_dump(1 + "3.2");
    echo '<br>';
    var_dump(1 + "-3.2e2");
    echo '<br>';
    var_dump((int) "10.5");
    echo '<br>';
    var_dump((float) "10.5");
?>