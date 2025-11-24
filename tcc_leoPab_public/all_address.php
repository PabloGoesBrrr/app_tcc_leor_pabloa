<?php 
	$acao = 'recuperar';
    require 'address_control.php';

	require_once '../../tcc_leoPab/verify.php';

?>


<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Endereços em Análise - LocalCerto</title>
        <link rel="stylesheet" href="style.css">

        <script>
            function remover(id){
                location.href= 'all_address.php?acao=remover&id='+id;
            }
        </script>
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
            <section class="features">

                <div class="container">
                    <h3>Seus Endereços em Analise</h3>
                    <hr>

                    <?php foreach($address as $indice => $endereco){ ?>

                    <div class="features-grid" >
                        <div method="post" class="feature-card" id="analiseForm">
                            <h4 id="endereco_<?= $endereco->id?>"> Endereço: <?= $endereco->endereco ?></h4>
                            <p id="endereco_<?= $endereco->id?>"> Cidade: <?= $endereco->cidade ?> </p>
                            <p id="endereco_<?= $endereco->id?>"> Estado: <?= $endereco->estado ?> </p>
                            <p id="endereco_<?= $endereco->id?>"> Tipo: <?= $endereco->tipo ?> </p>
                            
                            <a href="resultado.php?id=<?= $endereco->id ?>" class="btn-outline">Analisar Localização</a>
                            <h1 class="btn-bad" onclick="remover(<?= $endereco->id?>)">remover endereço</h1>
                        </div>
                    </div>

                    <?php } ?>

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
