<div class="titulo">Datas 02</div>

<?php

    $formatoData01 = 'D, d \d\e M \d\e Y';
    $formatoData02 = '%A, %d de %B de %Y';
    $formatoData03 = '%a, %d de %B de %Y - %H:%M:%S';

    $agora = new DateTime();

    print_r($agora);
    echo '<br>';

    echo $agora->format($formatoData01) . '<br>';

    setlocale(LC_TIME, 'pt-br');
    echo strftime($formatoData02, $agora->getTimestamp()) . '<br>';

    $dataFixa = new DateTime('1975-01-25 15:30:50');
    echo strftime($formatoData03, $dataFixa->getTimestamp()) . '<br>';

    $amanha = new DateTime('-2 day');
    echo strftime($formatoData02, $amanha->getTimestamp()) . '<br>';

    $amanha = new DateTime('+2 week');
    echo strftime($formatoData02, $amanha->getTimestamp()) . '<br>';

    $amanha->modify('+1 day');
    echo strftime($formatoData03, $amanha->getTimestamp()) . '<br>';

    $amanha->setDate(2000, 5, 20);
    echo strftime($formatoData03, $amanha->getTimestamp()) . '<br>';

    $dataPassada = new DateTime('2000-05-17');
    $dataFutura = new DateTime('2030-11-26');
    $outraData = new DateTime('2030-11-26');

    echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
    echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
    echo ($outraData === $dataFutura ? 'Igual' : 'Diferente') . '<br>';
    echo ($outraData == $dataFutura ? 'Igual' : 'Diferente') . '<br>';

    $tz = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime(null, $tz);
    echo $agora->format('d/M/Y H:i:s') . '<br>';

?>