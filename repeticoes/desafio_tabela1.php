<div class="titulo">Desafio Tabela 1</div>

<?php
    $matriz = [
        ['01', '02', '03', '04', '05'],
        ['06', '07', '08', '09', '10'],
        ['11', '12', '13', '14', '15'],
        ['16', '17', '18', '19', '20']
    ];

    /*foreach($matriz as $linha) {
        foreach($linha as $valor) {
            echo "$valor ";
        }
        echo "<br>";
    }*/

?>

<table>
    <?php
        foreach($matriz as $linhas) {
            echo "<tr>";
            foreach($linhas as $valor) {
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
    ?>
</table> 

<br><hr>

<table>
    <?php
        foreach($matriz as $indice => $linhas) {
            $style = $indice % 2 == 0 ? "<tr style='background-color: #bac5fe;'>" : "<tr>";
            echo $style;
            foreach($linhas as $valor) {
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;       
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }    
</style>