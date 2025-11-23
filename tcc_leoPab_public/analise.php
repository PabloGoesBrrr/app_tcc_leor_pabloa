<?php
    require_once '../../tcc_leoPab/verify.php';

?>

<!doctype html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Análise de Localização - LocalCerto</title>
        <link rel="stylesheet" href="style.css">
        <style>

        </style>
    </head>

    <body>
        <header>
            <div class="container">
                    <h1 class="logo">LocalCerto</h1>
                    <nav>
                        <a href="index.php">Início</a>
                        <a href="analise.php" class="active">Análise</a>
                        <a href="sobre.php">Sobre</a>
                        <a href="contato.php">Contato</a>
                        <a href="welcome.php">Conta</a>
                    </nav>
                </div>
        </header>

        <?php if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
		<div class="hero">
			<h3>Endereço inserido com sucesso!</h3>
            <a href="all_address.php" class="btn-primary">Veja seus endereços em analise</a>
		</div>
		<?php } ?>

        <main>
            <section class="form-section">
                <div class="container">
                    <h2>Analisar Localização</h2>
                    <p>Preencha os dados abaixo para descobrir se o local é ideal para seu negócio.</p>

<!-- analiseForm é o form que a main.js pega suas informacoes -->

                    <form method="post" action="address_control.php?acao=inserir" id="analiseForm" class="analise-form">
                        <div class="form-group">
                            <label for="endereco">Endereço Completo *</label>
                                <input type="text" id="endereco" name="endereco" required placeholder="Ex: Rua das Flores, 123">
                        </div>

                        <div class="form-group">
                        <label for="cidade">Cidade *</label>
                            <input type="text" id="cidade" name="cidade" required placeholder="Ex: São Paulo">
                        </div>

                        <div class="form-group">
                            <label for="estado">Estado *</label>
                            <input type="text" id="estado" name="estado" required placeholder="Ex: SP">
                        </div>

                        <div class="form-group">
                        <label for="tipo">Tipo de Negócio *</label>
                            <select id="tipo" name="tipo" required>
                            <option value="">Selecione...</option>
                            <option value="restaurante">Restaurante</option>
                            <option value="loja">Loja de Varejo</option>
                            <option value="servicos">Serviços</option>
                            <option value="escritorio">Escritório</option>
                            <option value="outros">Outros</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-primary">Analisar Localização</button>
                    </form>
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
