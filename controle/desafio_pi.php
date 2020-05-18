<div class="titulo">Desafio PI</div>

<?php

    $pi = 3.14;

    echo "$pi = ".pi()."?";

    if($pi == pi()) {
        echo "<br>Iguais!";
    }else {
        echo "<br>Diferentes!";
    }

    echo "<br>$pi = ".number_format(pi(),2)."?";  

    if($pi == number_format(pi(),2)) {
        echo "<br>Iguais!";
    }else {
        echo "<br>Diferentes!";
    }

?>