<?php

    session_start();
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($_POST['email']) {
            $usuario = [
                [
                    "nome" => "Alex",
                    "email" => "alexsamaralns@gmail.com",
                    "senha" => "6456",
                ],
                [
                    "nome" => "Alix",
                    "email" => "alixsamaralns@gmail.com",
                    "senha" => "1234",
                ],
                [
                    "nome" => "Izabela",
                    "email" => "izaah@gmail.com",
                    "senha" => "00000",
                ],
                [
                    "nome" => "Déboro",
                    "email" => "deborote@gmail.com",
                    "senha" => "55555",
                ],
            ];

            foreach($usuario as $user) {
                $emailValido = $email === $user['email'];
                $senhaValida = $senha === $user['senha'];

                if($emailValido && $senhaValida) {
                    $_SESSION['erros'] = '';
                    $_SESSION['usuario'] = $usuario['nome'];
                    header('Location: index.php');
                }
            }

            if(!$_SESSION['usuario']) {
                $_SESSION['erros'] = 'Usuário/senha inválidos';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo!</h2>
    </header>
    <main class="principal">
        <div class="conteudo">  
            <h3>Identifique-se</h3>
            <?php if($_SESSION['erros']):  ?>
                <div class="erros">
                    <?php foreach($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>    
                </div>
            <?php endif ?>  
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha">
                </div>
                <button>Entrar</button>
            </form>  
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y');?>
    </footer>
</body>
</html>