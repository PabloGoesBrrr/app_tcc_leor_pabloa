<?php
    require_once '../../tcc_leoPab/verify.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <header>
            <div class="container">
                    <h1 class="logo">LocalCerto</h1>
                    <nav>
                        <a href="index.php">Início</a>
                        <a href="analise.php" >Análise</a>
                        <a href="sobre.php">Sobre</a>
                        <a href="contato.php">Contato</a>
                        <a href="welcome.php" class="active">Conta</a>
                    </nav>
                </div>
    </header>
    <h1 class="my-5">Oi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bem vindo ao nosso site.</h1>
    <p>
        <a href="analise.php" class="btn-primary">Faça sua análise</a>
        <a href="login/logout.php" class="btn-bad">Sair da conta</a>
    </p>
</body>
</html>