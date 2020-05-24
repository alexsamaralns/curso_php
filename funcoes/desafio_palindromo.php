<div class="titulo">Desafio Palíndromo</div>

<form method="post">
    <div>
        <label for="palavra">Palavra:</label>
        <input class="palavra" type="text" id="palavra" name="palavra" placeholder="Digite a palavra" required>
    </div>
    <div>
        <input class="btn" type="submit" name="verificar" id="verificar" value="Verificar">
    </div>
</form>

<?php
    if(isset($_POST['verificar'])) {

        function verificaPlaindromo($palavra) {
            return $palavra === strrev($palavra) ? true : false;
        }

        if(verificaPlaindromo(strtolower($_POST['palavra']))) {
            echo "<div class='container blue'>
                      <h4>{$_POST['palavra']} é uma palavra palíndromo!</h4>  
                  </div>";
        }else {
            echo "<div class='container red'>
                      <h4>{$_POST['palavra']} não é uma palavra palíndromo!</h4>  
                  </div>";
        }

    }
?>

<style>
    .container.red {
        display: flex;
        margin-top: 20px;
        border-style: solid;
        border: 1px solid #e82828;
        border-top-style: solid;
        border-top-color: solid;
        border-top-width: 5px;
        width: 50%;
        border-radius: 10px;
        align-items: center;
        justify-content: center; 
        color: #e82828;   
    }

    .container.blue {
        display: flex;
        margin-top: 20px;
        border-style: solid;
        border: 1px solid #3655f0;
        border-top-style: solid;
        border-top-color: solid;
        border-top-width: 5px;
        width: 50%;
        border-radius: 10px;
        align-items: center;
        justify-content: center; 
        color: #3655f0;   
    }

    .palavra{
        width: 200px;
        height: 20px;
    }

    .btn {
        margin-top: 20px;
        border: none;
        height: 50px;
        width: 150px;
        background-color: #6c82f1;
        color: white;
        font-size: 22px;
    }

    .btn:hover {
        cursor: pointer;
        background-color: #3655f0;
    }
</style>