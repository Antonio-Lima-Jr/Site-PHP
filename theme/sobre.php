<?php  $v->layout("_theme"); ?>

<?= $v->start("style") ?>
  <link rel="stylesheet" href="<?= url("/theme/css/style.css") ?>">
<?= $v->end() ?>

<section class="bannerSobre">
  <div class="overlayer">
    <div class="container">
      <h1>Sobre nós</h1>
    </div>
  </div>
</section>



<section class="agencia">
  <div class="container">
    <div class="topAgencia">
      <h1>ZUC </h1>
      <h1 class="styleAgencia"> DEVELOPER</h1>
      <div class="linhaTituloAgencia"></div>
    </div><!-- topAgencia -->
    <h2>Trajetoria na criação de sites, sistemas, sites institucionais, blogs em programação PHP HTML5 CSS3 JAVASCRIPT.
    </h2>
    <div class="corpoAgencia">
      <div>
        <p>A zucDeveloper surgiu com o objetivo de gerenciar e orientar empresas e negócios num mercado promissor que é
          a
          publicidade on-line, através de parcerias de sucesso fez com que entrássemos em constante aprimoramento com
          novas tecnologias e metodologias do mercado para entregar sempre qualidade em 1º lugar aos nossos clientes.
        </p>
        <p>Agora como uma Agência Digital presente de uma forma mais solida, focamos no planejamento estratégico,
          criação,
          desenvolvimento, manutenção e mídias sociais para o uso de plataformas interativas na internet para sempre
          garantir resultado aos nossos parceiros.</p>
      </div>
      <section class="banner-container">
        <div style="background-image: url('<?= url("/theme/img/carousel/construcao-site.jpg"); ?>')"
          class="banner-single"></div>
        <!--banner-single-->
        <div style="background-image: url('<?= url("/theme/img/carousel/2.jpg"); ?>')" class="banner-single">
        </div>
        <!--banner-single-->
        <div style="background-image: url('<?= url("/theme/img/carousel/3.jpg");?>')" class="banner-single">
        </div>
        <!--banner-single-->
        <div style="background-image: url('<?= url("/theme/img/carousel/4.jpg"); ?>')" class="banner-single">
        </div>
        <!--banner-single-->
      </section>
    </div><!-- corpoAgencia -->
    <div class="videosAgencia">
      <div class="videos">
        <iframe src="https://www.youtube.com/embed/qVUfDkb9_7E" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div><!-- VIdeos -->
      <div class="videos">
        <iframe src="https://www.youtube.com/embed/NR5WlmPUFiA" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div><!-- Videos -->
    </div><!-- videosAgencia -->
  </div><!-- Container -->
</section><!-- agencia -->

<section id="portifolio" class="outroContato">
  <div class="container">
    <h1>FIQUE A VONTADE PARA ENTRAR EM CONTATO!</h1>
    <h2>Ligue ou mande uma mensagem sem compromisso.</h2>
    <div class="buttonOutroContato" onclick="abrirWats()">
      <img src="<?= url("/theme/img/home/iconWatsVerde.svg"); ?>" alt="">
      <h1>61 99636-0059</h1>
    </div><!-- buttonHome -->
  </div><!-- Container -->
</section><!-- outroContato -->

<section class="portifolio">
  <div class="container">
    <div class="topAgencia">
      <h1>SITES</h1>
      <h1 class="styleAgencia">DISPONÍVEIS</h1>
      <div class="linhaTituloAgencia"></div>
    </div><!-- topAgencia -->
    <div class="projetos">
      <div class="projetoPortifolio">
        <a href="http://kinow.epizy.com/?i=1">
          <img id="site2" src="<?= url("/theme/img/portifolio/kinown.jpg"); ?>" alt="" srcset="" width="100%">
        </a>
        <a href="http://www.beautif.ga/">
          <img id="site2" src="<?= url("/theme/img/portifolio/beautif.jpg"); ?>" alt="" srcset="" width="100%">
        </a>
        <a href="http://www.girlys.ga/?i=1">
          <img id="site2" src="<?= url("/theme/img/portifolio/girlys.jpg"); ?>" alt="" srcset="" width="100%">
        </a>
        <a href="http://www.itsys.ga/?i=1">
          <img id="site2" src="<?= url("/theme/img/portifolio/itsys.jpg"); ?>" alt="" srcset="" width="100%">
        </a>
        <a href="http://www.scenica.ga/?i=1">
          <img id="site2" src="<?= url("/theme/img/portifolio/scenica.jpg"); ?>" alt="" srcset="" width="100%">
        </a>
        <a href="http://bluesk.ga/">
          <img id="site2" src="<?= url("/theme/img/portifolio/bluesk.jpg"); ?>" alt="" srcset="" width="100%">
        </a>
        <a href="http://tastys.ga/">
          <img id="site2" src="<?= url("/theme/img/portifolio/tastys.jpg"); ?>" alt="" srcset="" width="100%">
        </a>
        <a href="http://www.beblack.ga/?i=1">
          <img id="site1" src="<?= url("/theme/img/portifolio/site1.jpg"); ?>" alt="" srcset="" width="100%">
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
      <a href='https://www.facebook.com/zuc.dev.9'>
        <div class='iconRede'>
          <img src='<?= url('/theme/img/iconTop/iconFace.svg'); ?>' alt='' srcset=''>
          <h1>Facebook</h1>
        </div>
      </a>
      <a href="https://www.linkedin.com/in/ant%C3%B4nio-jr-250a841b5/">
        <div class='iconRede'>
          <img src='<?= url('/theme/img/iconTop/iconLinked.svg'); ?>' alt='' srcset=''>
          <h1>Linked</h1>
        </div>
      </a>
      <a href="https://www.instagram.com/zucdeveloper">
        <div class='iconRede'>
          <img src='<?= url('/theme/img/iconTop/iconInsta.svg'); ?>' alt='' srcset=''>
          <h1>Instagram</h1>
        </div>
      </a>
      <div class='iconRede' onclick='abrirWats()'>
        <img src='<?= url('/theme/img/iconTop/iconWats.svg'); ?>' alt='' srcset=''>
        <h1>WatsApp</h1>
      </div>
    </div>
  </div>
</section>

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
        <form action="" name="formContato">
          <h2>Mande uma mensagem sobre o seu projeto</h2>
          <div class="campoForm">
            <input type="text" name="nome" id="nome" placeholder="nome">
          </div>
          <div class="campoForm">
            <input type="email" name="email" id="email" placeholder="email">
          </div>
          <div class="campoForm">
            <input type="text" name="telefone" id="telefone" placeholder="telefone">
          </div>
          <div class="selectAssunto">
            <select id="assunto" name="select">
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
            <textarea id="msg" placeholder="Fale mais sobre seu projeto"></textarea>
          </div>
          <input id="enviar" type="submit" value="Enviar">
        </form>
      </div>
    </div>
  </div>
</section>
<section class="mapaSite">

</section>

<?= $v->start("js") ?>

<script src="<?= url("/theme/script/abrirWats.js"); ?>"></script>
<script src="<?= url("/theme/script/script.js"); ?>"></script>
<script src="<?= url("/theme/script/form.js"); ?>"></script>
<script src="<?= url("/theme/script/carousel.js"); ?>"></script>

<?= $v->end() ?>