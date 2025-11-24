document.addEventListener('DOMContentLoaded', function() {

  const analiseForm = document.getElementById('analiseForm');
  if (analiseForm) {
    analiseForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const endereco = document.getElementById('endereco').value;
      const cidade = document.getElementById('cidade').value;
      const estado = document.getElementById('estado').value;
      const tipo = document.getElementById('tipo').value;

      const dadosAnalise = {
        endereco: endereco,
        cidade: cidade,
        estado: estado,
        tipo: tipo
      };

      localStorage.setItem('dadosAnalise', JSON.stringify(dadosAnalise));

      window.location.href = 'resultado.php';
    });
  }

  const contatoForm = document.getElementById('contatoForm');
  if (contatoForm) {
    contatoForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const nome = document.getElementById('nome').value;
      const email = document.getElementById('email').value;
      const assunto = document.getElementById('assunto').value;

      alert('Obrigado, ' + nome + '! Sua mensagem foi enviada com sucesso. Entraremos em contato em breve.');

      contatoForm.reset();
    });
  }

  

  const resultadoConteudo = document.getElementById('resultadoConteudo');
  if (resultadoConteudo) {
    const dadosString = localStorage.getItem('dadosAnalise');

    if (dadosString) {
      const dados = JSON.parse(dadosString);

      document.getElementById('enderecoAnalisado').textContent =
        dados.endereco + ', ' + dados.cidade + ' - ' + dados.estado;

      const tiposNegocio = {
        'restaurante': 'Restaurante',
        'loja': 'Loja de Varejo',
        'servicos': 'Serviços',
        'escritorio': 'Escritório',
        'outros': 'Outros'
      };

      document.getElementById('tipoNegocio').textContent = tiposNegocio[dados.tipo] || dados.tipo;

      const resultados = gerarResultadoAleatorio();

      document.getElementById('fluxoPessoas').textContent = resultados.fluxo;
      document.getElementById('acessibilidade').textContent = resultados.acessibilidade;
      document.getElementById('concorrencia').textContent = resultados.concorrencia;
      document.getElementById('crescimento').textContent = resultados.crescimento;

      if (resultados.recomendado) {
        document.getElementById('resultadoIcone').textContent = '✅';
        document.getElementById('resultadoTitulo').textContent = 'Localização Recomendada!';
        document.getElementById('resultadoTitulo').style.color = '#27ae60';
        document.getElementById('observacoes').textContent =
          'Este local apresenta boas características para o tipo de negócio informado. Recomendamos uma visita presencial para confirmar as condições do imóvel e negociar valores de aluguel.';
      } else {
        document.getElementById('resultadoIcone').textContent = '⚠️';
        document.getElementById('resultadoTitulo').textContent = 'Atenção: Localização com Ressalvas';
        document.getElementById('resultadoTitulo').style.color = '#f39c12';
        document.getElementById('observacoes').textContent =
          'Este local apresenta alguns pontos de atenção. Recomendamos avaliar cuidadosamente os fatores listados acima antes de tomar uma decisão. Uma visita presencial é essencial.';
      }
    } else {
      window.location.href = 'analise.php';
    }
  }
});

function gerarResultadoAleatorio() {
  const opcoes = {
    fluxo: ['Muito Alto', 'Alto', 'Moderado', 'Baixo'],
    acessibilidade: ['Excelente', 'Boa', 'Regular', 'Difícil'],
    concorrencia: ['Baixa', 'Moderada', 'Alta', 'Muito Alta'],
    crescimento: ['Muito Alto', 'Alto', 'Moderado', 'Baixo']
  };

  const fluxoIdx = Math.floor(Math.random() * 4);
  const acessIdx = Math.floor(Math.random() * 4);
  const concIdx = Math.floor(Math.random() * 4);
  const crescIdx = Math.floor(Math.random() * 4);

  const pontuacao = (3 - fluxoIdx) + (3 - acessIdx) + concIdx + (3 - crescIdx);

  return {
    fluxo: opcoes.fluxo[fluxoIdx],
    acessibilidade: opcoes.acessibilidade[acessIdx],
    concorrencia: opcoes.concorrencia[concIdx],
    crescimento: opcoes.crescimento[crescIdx],
    recomendado: pontuacao >= 6
  };
}
