<?php
    require_once '../../tcc_leoPab/verify.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="style.css">
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
    <section class="features">
        <div class="container">
            <h3>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bem-vindo à sua conta.</h3>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">📊</div>
                            <h4>Faça sua Analise</h4>
                            <a href="analise.php" class="btn-primary">Aqui</a>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">👋</div>
                            <h4>Sair da conta</h4>
                            <a href="login/logout.php" class="btn-outline-bad">Logout</a>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">🗺️</div>
                            <h4>Veja seus Endereços</h4>
                            <a href="all_address.php" class="btn-primary">Aqui</a>
                        </div>

                </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2025 LocalCerto. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>