<?php

    session_start();
    print_r($_SESSION);

?>

<p>
    <b>Nome: </b><?= $_SESSION['nome'] ?>
</p>

<p>
    <b>E-mail: </b><?= $_SESSION['email'] ?>
</p>

<?php

    $_SESSION['nome'] = 'Alex Amaral';
    $_SESSION['email'] = 'alexsamaralns@gmail.com';

?>

<p>
    <a href="basico_sessao.php">Voltar</a>
</p>

<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>