document.addEventListener('DOMContentLoaded', function() {


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

  

  
});
