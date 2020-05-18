<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km -> Milha</option>
        <option value="milha-km">Milha -> Km</option>
        <option value="metro-km">Metro -> Km</option>
        <option value="km-metro">Km -> Metro</option>
        <option value="f-c">ºF -> ºC</option>
        <option value="c-f">ºC -> ºF</option>
    </select>
    <button>Converter</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
    if(isset($_POST['param'])) {
        $param = floatval ($_POST['param']);
        $conversao = $_POST['conversao'];
        if($param == 0) {
            $conversao = '';
        }
        switch($conversao) {
            case 'km-milha':
                $calculo = number_format(($param * 0.621371), 2);
                echo "<p class='divisao'>$param Km são equivalente a $calculo Milhas.</p><br>";
                break;
            case 'milha-km':
                $calculo = number_format(($param * 1.60934), 2);
                echo "<p class='divisao'>$param Milhas são equivalente a $calculo Km.</p><br>";
                break;
            case 'metro-km':
                $calculo = number_format(($param * 0.001), 2);
                echo "<p class='divisao'>$param metros são equivalente a $calculo Km.</p><br>";
                break;
            case 'km-metro':
                $calculo = number_format(($param * 1000), 2);
                echo "<p class='divisao'>$param Km são equivalente a $calculo metros.</p><br>";
                break;
            case 'f-c':
                $calculo = number_format(($param * (9 / 5) + 32), 2);
                echo "<p class='divisao'>$paramºF graus são equivalente a $calculoºC graus.</p><br>";
                break;
            case 'c-f':
                $calculo = number_format((($param - 32) * (5 / 9)), 2);
                echo "<p class='divisao'>$paramºC graus são equivalente a $calculoºF graus.</p><br>";
                break;    
            default:
                echo "<p class='divisao'>Insira um valor!</p>";
                break;
        }
    }
?>