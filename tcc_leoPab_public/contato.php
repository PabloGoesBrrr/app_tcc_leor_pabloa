<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contato - LocalCerto</title>
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
                        <a href="contato.php" class="active">Contato</a>
                        <a href="welcome.php">Conta</a>
                </nav>
            </div>
        </header>

        <main>
            <section class="contato-section">
                <div class="container">
                    <h2>Entre em Contato</h2>
                    <p>Tem alguma dúvida ou sugestão? Envie-nos uma mensagem!</p>

                    <div class="contato-content">
                        <form id="contatoForm" class="contato-form">
                        <div class="form-group">
                            <label for="nome">Nome Completo *</label>
                            <input type="text" id="nome" name="nome" required placeholder="Seu nome">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail *</label>
                            <input type="email" id="email" name="email" required placeholder="seu@email.com">
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000">
                        </div>

                        <div class="form-group">
                            <label for="assunto">Assunto *</label>
                            <input type="text" id="assunto" name="assunto" required placeholder="Sobre o que deseja falar?">
                        </div>

                        <div class="form-group">
                            <label for="mensagem">Mensagem *</label>
                            <textarea id="mensagem" name="mensagem" rows="5" required placeholder="Escreva sua mensagem aqui..."></textarea>
                        </div>

                        <button type="submit" class="btn-primary">Enviar Mensagem</button>
                        </form>

                        <div class="contato-info">
                            <h3>Outras Formas de Contato</h3>
                            <div class="info-item">
                                <strong>E-mail:</strong>
                                <p>contato@localcerto.com.br</p>
                            </div>
                            <div class="info-item">
                                <strong>Telefone:</strong>
                                <p>(11) 9999-9999</p>
                            </div>
                            <div class="info-item">
                                <strong>Horário de Atendimento:</strong>
                                <p>Segunda a Sexta: 9h às 18h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="container">
                <p>&copy; 2025 LocalCerto. Todos os direitos reservados.</p>
            </div>
        </footer>

        <script src="main.js"></script>
    </body>
</html>
