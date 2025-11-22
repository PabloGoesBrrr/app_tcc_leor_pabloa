<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Resultado da Análise - LocalCerto</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <h1 class="logo">LocalCerto</h1>
                <nav>
                    <a href="index.php" >Início</a>
                    <a href="analise.php" >Análise</a>
                    <a href="sobre.php">Sobre</a>
                    <a href="contato.php">Contato</a>
                    <a href="welcome.php">Conta</a>
                </nav>
            </div>
        </header>

        <main>
            <section class="resultado-section">
                <div class="container">
                    <h2>Resultado da Análise</h2>

                    <div id="resultadoConteudo" class="resultado-card">
                        <div class="resultado-header">
                            <div class="resultado-icon" id="resultadoIcone">✅</div>
                            <h3 id="resultadoTitulo">Localização Recomendada!</h3>
                        </div>

                        <div class="resultado-detalhes">
                            <h4>Endereço Analisado:</h4>
                            <p id="enderecoAnalisado"></p>

                            <h4>Tipo de Negócio:</h4>
                            <p id="tipoNegocio"></p>

                            <h4>Avaliação:</h4>
                            <div class="avaliacao-items">
                                <div class="avaliacao-item">
                                    <span class="avaliacao-label">Fluxo de Pessoas:</span>
                                    <span class="avaliacao-valor" id="fluxoPessoas">Alto</span>
                                </div>
                                <div class="avaliacao-item">
                                    <span class="avaliacao-label">Acessibilidade:</span>
                                    <span class="avaliacao-valor" id="acessibilidade">Boa</span>
                                </div>
                                <div class="avaliacao-item">
                                    <span class="avaliacao-label">Concorrência:</span>
                                    <span class="avaliacao-valor" id="concorrencia">Moderada</span>
                                </div>
                                <div class="avaliacao-item">
                                    <span class="avaliacao-label">Potencial de Crescimento:</span>
                                    <span class="avaliacao-valor" id="crescimento">Alto</span>
                                </div>
                            </div>

                            <h4>Observações:</h4>
                            <p id="observacoes">Este local apresenta boas características para o tipo de negócio informado. Recomendamos uma visita presencial para confirmar as condições do imóvel.</p>
                        </div>

                        <div class="resultado-acoes">
                            <a href="analise.php" class="btn-secondary">Nova Análise</a>
                            <a href="index.php" class="btn-outline">Voltar ao Início</a>
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
