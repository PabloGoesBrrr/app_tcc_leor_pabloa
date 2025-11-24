<?php 
function gerarResultadoAleatorioPHP() {
    $opcoes = [
        'fluxo' => ['Muito Alto', 'Alto', 'Moderado', 'Baixo'],
        'acessibilidade' => ['Excelente', 'Boa', 'Regular', 'Difícil'],
        'concorrencia' => ['Baixa', 'Moderada', 'Alta', 'Muito Alta'],
        'crescimento' => ['Muito Alto', 'Alto', 'Moderado', 'Baixo']
    ];

    $fluxoIdx = rand(0, 3);
    $acessIdx = rand(0, 3);
    $concIdx = rand(0, 3);
    $crescIdx = rand(0, 3);

    $pontuacao = (3 - $fluxoIdx) + (3 - $acessIdx) + $concIdx + (3 - $crescIdx);

    return [
        'fluxo' => $opcoes['fluxo'][$fluxoIdx],
        'acessibilidade' => $opcoes['acessibilidade'][$acessIdx],
        'concorrencia' => $opcoes['concorrencia'][$concIdx],
        'crescimento' => $opcoes['crescimento'][$crescIdx],
        'recomendado' => $pontuacao >= 6
    ];
    }

    $resultado = gerarResultadoAleatorioPHP();
?>