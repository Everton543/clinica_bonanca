<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clínica Bonança</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to left, #B9C6A2, #E5EBC6);
    }
    .top-bar {
      background-color: #ffffff;
      border-bottom: 1px solid #ccc;
    }
    .top-bar .info {
      font-size: 0.9rem;
    }
    .section {
      padding: 60px 0;
    }
    .section img {
      max-width: 100%;
      border-radius: 8px;
    }
    .contact-btn {
      background-color: #28a745;
      color: #fff;
    }
    .footer {
      background-color: #f8f9fa;
      padding: 30px 0;
      font-size: 0.9rem;
    }
    .mission-box {
      background: #ffffff;
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      height: 100%;
    }
    .img-fixed-ratio {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 8px;
    }
    @media (max-width: 768px) {
      .top-bar .info {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>
<body>
  <div class="top-bar fixed-top py-2">
    <div class="container d-flex justify-content-between align-items-center info">
      <div><i class="bi bi-whatsapp"></i> 11 91155-6053</div>
      <div><i class="bi bi-envelope"></i> psico.drleo@gmail.com</div>
      <div><i class="bi bi-geo-alt"></i> Rua. Bernardo Sabadini 11, Imirim – São Paulo – SP</div>
      <div><a href="https://wa.me/5511911556053" class="btn btn-sm contact-btn">Entre em contato</a></div>
    </div>
  </div>

  <div class="container section" style="margin-top: 80px;">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="<?= base_url('imagens/musicoterapia.jpg'); ?>" alt="Musicoterapia" class="img-fixed-ratio">
      </div>
      <div class="col-md-6">
        <h2>Musicoterapia</h2>
        <p>A Musicoterapia é uma abordagem terapêutica que utiliza a música para tratar e reabilitar pacientes, promovendo o bem-estar físico, emocional e psicológico...</p>
        <ul>
          <li>Melhora na coordenação motora</li>
          <li>Redução do estresse e ansiedade</li>
          <li>Ajuda no tratamento de doenças crônicas</li>
        </ul>
        <a href="https://wa.me/5511911556053" class="btn contact-btn">Entre em contato</a>
      </div>
    </div>
  </div>

  <div class="container section">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <img src="<?= base_url('imagens/neuropsicologia.jpg'); ?>" alt="Neuropsicologia" class="img-fixed-ratio">
      </div>
      <div class="col-md-6">
        <h2>Neuropsicologia</h2>
        <p>A Neuropsicologia é uma interface entre a Psicologia e a Neurologia, que estuda as relações entre o cérebro e o comportamento humano...</p>
        <a href="https://wa.me/5511911556053" class="btn contact-btn">Entre em contato</a>
      </div>
    </div>
  </div>

  <div class="container section">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="<?= base_url('imagens/tcc.jpg'); ?>" alt="Terapia Cognitivo-Comportamental" class="img-fixed-ratio">
      </div>
      <div class="col-md-6">
        <h2>Terapia Cognitivo-Comportamental (TCC)</h2>
        <p>A Terapia Cognitivo-Comportamental é uma abordagem baseada em evidências que ajuda a identificar padrões de pensamento e comportamentos que causam sofrimento...</p>
        <ul>
          <li>Reconhecer pensamentos automáticos</li>
          <li>Gerenciamento eficaz do estresse</li>
          <li>Construir autoestima</li>
        </ul>
        <a href="https://wa.me/5511911556053" class="btn contact-btn">Entre em contato</a>
      </div>
    </div>
  </div>

  <div class="container section">
    <div class="row text-center">
      <div class="col-md-4">
        <div class="mission-box">
          <h4>Missão</h4>
          <p>Oferecer um espaço terapêutico acolhedor e seguro, promovendo bem-estar e crescimento pessoal.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mission-box">
          <h4>Visão</h4>
          <p>Ser referência em atendimento psicológico de qualidade, promovendo empatia e saúde emocional.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mission-box">
          <h4>Valores</h4>
          <p>Empatia, Ética, Acolhimento, Comprometimento e Excelência.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container section text-center">
    <h5>Localização</h5>
    <iframe src="https://www.google.com/maps?q=Rua+Bernardo+Sabadini+11,+Imirim,+São+Paulo,+SP&output=embed" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>

  <footer class="footer text-center">
    <p><img src="<?= base_url('imagens/logo.png'); ?>" alt="Logo" style="height:40px;"> Clínica Bonança</p>
    <p><a href="https://www.instagram.com/psico.drleo" target="_blank">Instagram: @psico.drleo</a></p>
    <p>Contato: 11 91155-6053 | psico.drleo@gmail.com | Rua. Bernardo Sabadini 11, Imirim – São Paulo – SP</p>
    <p><a href="/politica-de-privacidade">Política de Privacidade</a> | Certificado SSL Ativo</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>