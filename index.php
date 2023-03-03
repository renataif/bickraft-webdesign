<?php require "./router.php"?>
<?php require('./view/head.php')?>
<?php require('./view/header.php')?>

<section class="intro">
  <div class="intro-conteiner container">
    <h1>BICICLETAS FEITAS A MÃO</h1>
    <blockquote data-anime="800" class="fadeInDown quote-externo">
      <p>“não tenha nada em sua casa que você não considere útil ou acredita ser bonito”</p>
      <cite>WILLIAM MORRIS</cite>
    </blockquote>
    <a class="btn" href="/bickraftweb/produtos">ORÇAMENTO</a>
  </div>
</section>

<section class="home-produto">
  <h2>PRODUTOS</h2>
  <ul class="container-produtos">
    <li class="grid-1-3 itens-prod">
      <div class="item-conteiner"><img src="./img/produtos/passeio.svg" alt="Passeio"></div>
      <h3>PASSEIO</h3>
      <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
    </li>
    <li class="grid-1-3 itens-prod">
      <div class="item-conteiner"><img src="./img/produtos/esporte.svg" alt="Esporte"></div>
      <h3>ESPORTE</h3>
      <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
    </li>
    <li class="grid-1-3 itens-prod">
      <div class="item-conteiner"><img src="./img/produtos/retro.svg" alt="Retro"></div>
      <h3>RETRO</h3>
      <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
    </li>
  </ul>
  <div class="btn-alin">
    <a class="btn btn-preto" href="/bickraftweb/produtos">PRODUTOS</a>
  </div>
</section>

<section class="home-port">
  <div class="container">
    <h2>portifólio</h2>
    <ul class="port-img">
      <li class="grid-8"><img src="./img/portfolio/retro.jpg" alt=""></li>
      <li class="grid-8"><img src="./img/portfolio/passeio.jpg" alt=""></li>
      <li class="grid-16 esporte"><img src="./img/portfolio/esporte.jpg" alt=""></li>
    </ul>
    <div class="btn-alin">
      <a class="btn" href="/bickraftweb/produtos">portifólio</a>
    </div>
  </div>
</section>

<section class="qualidade">
  <div class="container">
    <h2>Qualidade</h2>
    <img src="./img/bikcraft-qualidade.svg" alt="Bickraft">
    <ul>
      <li class="grid-1-3">
        <h3>Durabilidade</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
      </li>
      <li class="grid-1-3">
        <h3>design</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
      </li>
      <li class="grid-1-3">
        <h3>sustentabilidade</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
      </li>
    </ul>
    <div class="btn-alin">
      <a href="/bickraftweb/sobre" class="btn btn-preto">SOBRE</a>
    </div>
  </div>
</section>

<?php require('./view/footer.php')?>