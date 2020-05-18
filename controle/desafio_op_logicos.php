<div class="titulo">Desafio Operadores Lógico</div>

<!--
    Dois trabalhos -> terça e quinta.
    - Se os dois forem executados -> TV 50' e sorvete.
    - Se apenas um for executado -> TV 32' e sorvete.
    - Se nenhum for executado -> Fica em casa mais saudável.
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div><br>
    <div>
        <label for="t2">Trabalho 2 (Terça):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div><br>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php

    if(isset($_POST['t1']) && isset($_POST['t2'])) {
        $t1 = $_POST['t1'] === '1';
        $t2 = !!$_POST['t2'];

        if($t1 && $t2) {
            echo "<br><p class='divisao'>Compraremos uma TV 50' e tomaremos sorvete!</p>";
        }else if($t1 != $t2) {
            echo "<br><p class='divisao'>Compraremos uma TV 32' e tomaremos sorvete!</p>";
        }else {
            echo "<br><p class='divisao'>Fica em casa mais saudável!</p>";
        }
    }    

?>