<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="periodo">
        <option value="diurno">Diurno</option>
        <option value="vespertino">Vespertino</option>
        <option value="noturno">Noturno</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
    echo $_POST;
    print_r($_POST);
    echo "<br>";
    print_r($_GET);
    echo '<br>' . $_POST['nome'];
?>