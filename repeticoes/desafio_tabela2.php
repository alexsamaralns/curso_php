<div class="titulo">Desafio Tabela 2</div>

<form method="post">
    <div>
        <label for="colunas">Número de linhas:</label>
        <input class="linhas" type="number" id="linhas" name="linhas" value="1" required>
    </div>
    <div>
        <label for="linhas">Número de colunas:</label>
        <input class="colunas" type="number" id="colunas" name="colunas" value="1" required>
    </div>
    <div>
        <input class="btn" type="submit" name="gerar" id="gerar" value="Gerar Tabela">
    </div>
</form>

<?php

    $matriz = [];

    if(isset($_POST['gerar'])) {
        if($_POST['linhas'] <= 0 || $_POST['colunas'] <= 0) {
            echo "<div class='container'>
                      <h4>Defina valores maiores que 0!</h4>  
                  </div>";
        }else {
            $count = 1;
            for($i = 0; $i < $_POST['linhas']; $i++) {
                for($j = 0; $j < $_POST['colunas']; $j++) {
                    $matriz[$i][$j] = $count;
                    $count++;
                }
            } 
        }     
    }


?>

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
    
    label {
        font-size: 22px;
    }

    .container {
        display: flex;
        margin-top: 20px;
        border-style: solid;
        border: 1px solid #e82828;
        border-top-style: solid;
        border-top-color: solid;
        border-top-width: 5px;
        border-radius: 10px;
        width: 430px;
        height: 80px;
        align-items: center;
        justify-content: center; 
        color: #e82828;   
    }

    .linhas{
        margin-top: 20px;
        width: 80px;
        height: 20px;
    }

    .colunas{
        margin-top: 20px;
        width: 80px;
        height: 20px;
    }

    .btn {
        border: none;
        height: 30px;
        width: 150px;
        background-color: #6c82f1;
        color: white;
    }

    .btn:hover {
        cursor: pointer;
        background-color: #3655f0;
    }
</style>