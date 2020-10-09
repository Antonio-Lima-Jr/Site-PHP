<?php  $v->layout("_theme"); ?>

<?= $v->start("style") ?>
  <link rel="stylesheet" href="<?= url("/theme/css/style.css") ?>">
<?= $v->end() ?>

<section class="bannerPortfolio">
  <div class="overlayer">
    <div class="container">
      <h1>Portfólio</h1>
    </div>
  </div>
</section>

<section class='portifolio'>
  <div class='container'>
    <div class='topAgencia'>
      <h1>SITES</h1>
      <h1 class='styleAgencia'>DISPONÍVEIS</h1>
      <div class='linhaTituloAgencia'></div>
    </div><!-- topAgencia -->
    <div class='projetos'>
      <div class='projetoPortifolio'>

        <a href='http://kinow.epizy.com/?i=1' title="Quero um site bonito zucdeveloper">
          <img id='site2' src='<?= url('/theme/img/portifolio/kinown.jpg'); ?>' title="Sites disponiveis" alt='Sites disponiveis' srcset='' width='100%'>
        </a>
        <a href='http://www.beautif.ga/' title="Quero um site bonito zucdeveloper">
          <img id='site2' src='<?= url('/theme/img/portifolio/beautif.jpg'); ?>' title="Sites disponiveis" alt='Sites disponiveis' srcset='' width='100%'>
        </a>
        <a href='http://www.girlys.ga/?i=1'>
          <img id='site2' src='<?= url('/theme/img/portifolio/girlys.jpg'); ?>' title="Sites disponiveis" alt='Sites disponiveis' srcset='' width='100%'>
        </a>
        <a href='http://www.itsys.ga/?i=1'>
          <img id='site2' src='<?= url('/theme/img/portifolio/itsys.jpg'); ?>' title="Sites disponiveis" alt='Sites disponiveis' srcset='' width='100%'>
        </a>
        <a href='http://www.scenica.ga/?i=1'>
          <img id='site2' src='<?= url('/theme/img/portifolio/scenica.jpg'); ?>' title="Sites disponiveis" alt='Sites disponiveis' srcset='' width='100%'>
        </a>
        <a href='http://bluesk.ga/'>
          <img id='site2' src='<?= url('/theme/img/portifolio/bluesk.jpg'); ?>' title="Sites disponiveis" alt='Sites disponiveis' srcset='' width='100%'>
        </a>
        <a href='http://tastys.ga/'>
          <img id='site2' src='<?= url('/theme/img/portifolio/tastys.jpg'); ?>' title="Sites disponiveis" alt='Sites disponiveis' srcset='' width='100%'>
        </a>
        <a href='http://www.beblack.ga/?i=1'>
          <img id='site1' src='<?= url('/theme/img/portifolio/site1.jpg'); ?>' title="Sites disponiveis" alt='Sites disponiveis' srcset='' width='100%'>
        </a>
        </><!-- projetosPortifolio -->
      </div><!-- Projetos -->
    </div><!-- Container -->
</section><!-- portifolio -->



<section class="duvidas">
  <h1>Ficou com alguma dúvida? <strong>FALE CONOSCO</strong></h1>
</section>

<section class='redes paralax'>
  <div class='container'>
    <div class='tituloRedes'>
      <h1>PRODUÇÃO DE SITES</h1>
      <h2>Entre em contato conosco.</h2>
    </div>
    <div class='imgRedes'>
      <a href='https://www.facebook.com/zuc.dev.9' title="Link para o Facebook">
        <div class='iconRede'>
          <img src='<?= url('/theme/img/iconTop/iconFace.svg'); ?>'title="Orçamento de sites sem compromisso" alt='Orçamento de sites sem compromisso' srcset=''>
          <h1>Facebook</h1>
        </div>
      </a>
      <a href="https://www.linkedin.com/in/ant%C3%B4nio-jr-250a841b5/" title="Sites personalizados em Javasript, HTML, CSS">
        <div class='iconRede'>
          <img src='<?= url('/theme/img/iconTop/iconLinked.svg'); ?>' alt='Orçamento de blog sem compromisso' alt='Orçamento de blog sem compromisso' srcset=''>
          <h1>Linked</h1>
        </div>
      </a>
      <a href="https://www.instagram.com/zucdeveloper" title="Zucdeveloper criação de layouts personalizados">
        <div class='iconRede'>
          <img src='<?= url('/theme/img/iconTop/iconInsta.svg'); ?>' title="Produção de sites e blogs personalizados" alt='Produção de sites e blogs personalizados' srcset=''>
          <h1>Instagram</h1>
        </div>
      </a>
      <div class='iconRede' onclick='abrirWats()'>
        <img src='<?= url('/theme/img/iconTop/iconWats.svg'); ?>' title="Sites personalizados com SEO otimizados" alt='Sites personalizados com SEO otimizados' srcset=''>
        <h1>WatsApp</h1>
      </div>
    </div>
  </div>
</section>
<section id='portifolio' class='outroContato'>
  <div class='container'>
    <h1>FIQUE A VONTADE PARA ENTRAR EM CONTATO!</h1>
    <h2>Ligue ou mande uma mensagem sem compromisso.</h2>
    <div class='buttonOutroContato' onclick='abrirWats()'>
      <img src='<?= url('/theme/img/home/iconWatsVerde.svg'); ?>' title="Entrar em contato para fazer meu site" alt='Entrar em contato para fazer meu site'>
      <h1>61 99636-0059</h1>
    </div><!-- buttonHome -->
  </div><!-- Container -->
</section><!-- outroContato -->
<!-- --------------------------------------------------Fale conosco -->
<section id="contato" class="enviarMensagem">
  <div class="container">
    <div class="topAgencia">
      <h1 id="fale">FALE </h1>
      <h1 class="styleAgencia">CONOSCO</h1>
      <div class="linhaTituloAgencia"></div>
    </div><!-- topAgencia -->
    <div class="contatoMensagem">
      <div class="informacao">
        <div class="layoutInformacao">
          <img src="<?= url("/theme/img/sectionSubHome/friends.svg"); ?>" alt="" srcset="" width="50px">
          <h1>Brasilia-DF Samambaia-Sul<br>
            72308-107</h1>
        </div>
        <a href="mailto:zucdeveloper@gmail.com?subject=Hello">
          <div class="layoutInformacao">
            <img src="<?= url("/theme/img/contato/iconCarta.svg"); ?>" alt="" srcset="" width="50px">
            <h1>zucdeveloper@gmail.com</h1>
          </div>
        </a>
        <div class="layoutInformacao cursor" onclick="abrirWats()">
          <img src="<?= url("/theme/img/contato/iconTel.svg"); ?>" alt="" srcset="" width="50px">
          <h1>61 99636-0059</h1>
        </div>
      </div>

      <div class="formulario">

        <form method="post">
          <h2>Mande uma mensagem sobre o seu projeto</h2>
          <div class="campoForm">
            <input type="text" name="nome" id="nome" placeholder="nome" required>
          </div>
          <div class="campoForm">
            <input type="email" name="email" id="email" placeholder="email" required>
          </div>
          <div class="campoForm">
            <input type="text" name="telefone" id="telefone" placeholder="telefone" required>
          </div>
          <input type="hidden" id="identificador" value="form-home">
          <div class="selectAssunto">
            <select id="assunto" name="select" required>
              <option value="valor1" selected>Selecione o assunto</option>
              <option value="Quero fazer um site">Quero fazer um site</option>
              <option value="Quero otimizar o SEO">Quero otimizar o SEO</option>
              <option value="Quero dar manutenção em um site">Quero dar manutenção em um site</option>
              <option value="Quero anunciar no Google">Quero anunciar no Google</option>
              <option value="Quero hospedar um site">Quero hospedar um site</option>
              <option value="Sugestões">Sugestões</option>
              <option value="Reclamações">Reclamações</option>
            </select>
          </div>
          <div class="msg">
            <textarea id="msg" placeholder="Fale mais sobre seu projeto" required></textarea>
          </div>
          <input id="enviar" type="submit" name="acao" value="Enviar">
        </form>
      </div>
    </div>
  </div>
</section>
<section class="mapaSite">

</section>






<?php $v->start("js"); ?>

<script src="<?= url("/theme/script/abrirWats.js"); ?>"></script>
  <script src="<?= url("/theme/script/script.js"); ?>"></script>
  <script src="<?= url("/theme/script/form.js"); ?>"></script>

<?php $v->end(); ?>