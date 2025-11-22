<?php 
    require_once "../../../tcc_leoPab/login.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
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
                        <a href="../welcome.php">Conta</a>
                    </nav>
                </div>
    </header>
    <section id="loginForm" class="login-form">
        <div class="container" >
            <h2>Login</h2>
            <p>Por favor, preencha os campos para fazer o login.</p>
            <?php 
            if(!empty($login_err)){
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }        
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Nome do usuário</label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-primary" value="Entrar">
                    
                </div>
                <p>Não tem uma conta? <a href="register.php">Inscreva-se agora</a>.</p>
                <p>Quer apenas conhecer o programa? <a href="../index.php">Clique aqui</a>.</p>
            </form>
        </div>
    </section>
    
</body>
</html>