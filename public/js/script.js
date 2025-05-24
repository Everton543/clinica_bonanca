document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const responsavel = document.getElementById('responsavel').value;
    const cliente = document.getElementById('cliente').value;
    const email = document.getElementById('email').value;
    const telefone = document.getElementById('telefone').value;
    const cidade = document.getElementById('cidade').value;
    const bairro = document.getElementById('bairro').value;
    const plano = document.getElementById('plano').value;
    const laudo = document.querySelector('input[name="laudo"]:checked').value;
    const reembolso = document.querySelector('input[name="reembolso"]:checked').value;

    const mensagem = `Olá! Gostaria de solicitar um atendimento com as seguintes informações:
        *Responsável:* ${responsavel}
        *Cliente:* ${cliente}
        *E-mail:* ${email}
        *Telefone:* ${telefone}
        *Cidade:* ${cidade}
        *Bairro:* ${bairro}
        *Plano de Saúde:* ${plano}
        *Possui laudo médico?* ${laudo}
        *Possui reembolso do plano?* ${reembolso}
    `;

    const whatsapp = "5511911556053";
    const link = `https://wa.me/${whatsapp}?text=${encodeURIComponent(mensagem)}`;
    window.open(link, '_blank');
});

document.addEventListener('DOMContentLoaded', function () {
  const telefoneInput = document.getElementById('telefone');

  telefoneInput.addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, '');

    if (value.length > 11) value = value.slice(0, 11);

    if (value.length > 0) {
      value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
    }
    if (value.length > 9) {
      value = value.replace(/(\d{5})(\d{4})$/, '$1-$2');
    } else {
      value = value.replace(/(\d{4})(\d{0,4})$/, '$1-$2');
    }

    e.target.value = value;
  });
});
