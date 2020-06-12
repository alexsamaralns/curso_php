<div class="titulo">Interface</div>

<?php

    interface Animal {
        function respirar();
    }

    interface Canino extends Animal {
        function latir(): string;
    }

    interface Mamar {
        function alimentar();
    }

    class Cachorro implements Canino {

        function respirar() {
            return "Irei usar oxigênio!";
        }

        function latir(): string {
            return "Au au au!";
        }

        function alimentar() {
            return "Irei usar leite.";
        }

    }

    $animal1 = new Cachorro();
    echo $animal1->respirar() . '<br>';
    echo $animal1->latir() . '<br>';
    echo $animal1->alimentar() . '<br>';

    echo "<br>";
    var_dump($animal1);
    echo "<br>";
    var_dump($animal1 instanceof Cachorro);
    echo "<br>";
    var_dump($animal1 instanceof Canino);
    echo "<br>";
    var_dump($animal1 instanceof Animal);

?>