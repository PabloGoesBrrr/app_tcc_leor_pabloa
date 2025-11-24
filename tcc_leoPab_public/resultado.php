<?php

    if (!isset($_GET['id'])) {
        header('Location: analise.php');
        exit;
    }

    $acao = 'recuperar_unico';
    $id = $_GET['id'];
    require 'address_control.php';

    require 'rand_result.php'

?>

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
                            <div class="resultado-icon" id="resultadoIcone">
                                <?= $resultado['recomendado'] ? '✅' : '⚠️' ?>
                            </div>

                            <h3 id="resultadoTitulo" style="color: <?= $resultado['recomendado'] ? '#27ae60' : '#f39c12' ?>">
                                <?= $resultado['recomendado']
                                    ? 'Localização Recomendada!'
                                    : 'Atenção: Localização com Ressalvas'
                                ?>
                            </h3>
                        </div>

                        <div class="resultado-detalhes">
                            <h4>Endereço Analisado:</h4>
                            <p >
                                <?= $endereco->endereco ?>,
                                <?= $endereco->cidade ?> -
                                <?= $endereco->estado ?>
                                
                            </p>

                            <h4>Tipo de Negócio:</h4>
                            <p id="tipoNegocio"><?= $endereco->tipo ?></p>

                            <h4>Avaliação:</h4>
                            <div class="avaliacao-items" >
                                <div class="avaliacao-item">
                                    <span class="avaliacao-label">Fluxo de Pessoas:</span>
                                    <span class="avaliacao-valor" style="color: <?= $resultado['recomendado'] ? '#27ae60' : '#f39c12' ?>" ><?= $resultado['fluxo'] ?></span>
                                </div>
                                <div class="avaliacao-item">
                                    <span class="avaliacao-label">Acessibilidade:</span>
                                    <span class="avaliacao-valor" style="color: <?= $resultado['recomendado'] ? '#27ae60' : '#f39c12' ?>"><?= $resultado['acessibilidade'] ?></span>
                                </div>
                                <div class="avaliacao-item">
                                    <span class="avaliacao-label">Concorrência:</span>
                                    <span class="avaliacao-valor" style="color: <?= $resultado['recomendado'] ? '#27ae60' : '#f39c12' ?>"><?= $resultado['concorrencia'] ?></span>
                                </div>
                                <div class="avaliacao-item">
                                    <span class="avaliacao-label">Potencial de Crescimento:</span>
                                    <span class="avaliacao-valor" style="color: <?= $resultado['recomendado'] ? '#27ae60' : '#f39c12' ?>"><?= $resultado['crescimento'] ?></span>
                                </div>
                            </div>

                            <h4>Observações:</h4>
                            <p id="observacoes">
                                <?= $resultado['recomendado']
                                    ? 'Este local apresenta boas características para o tipo de negócio informado. Recomendamos uma visita presencial para confirmar as condições do imóvel e negociar valores de aluguel.'
                                    : 'Este local apresenta alguns pontos de atenção. Recomendamos avaliar cuidadosamente os fatores listados acima antes de tomar uma decisão. Uma visita presencial é essencial.'
                                ?>
                            </p>
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

    </body>
</html>
