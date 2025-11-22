<?php 
    require_once "../../../tcc_leoPab/register.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .btn-outline-bad{padding-top: 20px;}
    </style>
</head>
<body>
    <header>
            <div class="container">
                    <h1 class="logo">LocalCerto</h1>
                    <nav>
                        <a href="../index.php">Início</a>
                        <a href="../analise.php" >Análise</a>
                        <a href="../sobre.php">Sobre</a>
                        <a href="../contato.php">Contato</a>
                        <a href="welcome.php">Conta</a>
                    </nav>
                </div>
    </header>
    <section id="loginForm" class="login-form">
        <div class="container">
            <h2>Cadastro</h2>
            <p>Por favor, preencha este formulário para criar uma conta.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Nome do usuário</label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Confirme a senha</label>
                    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-primary" value="Criar Conta">
                    <input type="reset" class="btn-outline-bad" value="Apagar Dados">
                </div>
                <p>Já tem uma conta? <a href="login.php">Entre aqui</a>.</p>
                <p>Quer apenas conhecer o programa? <a href="login.php">Clique aqui</a>.</p>
            </form>
        </div>
    </section>
    
</body>
</html>