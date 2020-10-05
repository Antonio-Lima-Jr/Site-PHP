<!DOCTYPE html>
<html lang="pt-BR">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179583186-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179583186-1');
</script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <?= $head; ?>
  <?=  $v->section("style");?>
  <?=  $v->section("ads");?>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="<?= url("/theme/img/favicon.ico"); ?>" />
</head>

<body>
          
  <div class="watsFixed">
    <img onclick="abrirWats()" src="<?= url("/theme/img/home/iconWatsVerde.svg"); ?>" alt="">
  </div>

  <div class="load"><img src="<?= url("/theme/img/loadder.svg"); ?>" alt=""></div>
  <base base="<?= url() ?>">
  </base>
  <section class="backgroundTop">
    <div class="container">
      <section class="top">
        <div class="rigth">
          <a href="<?= url("/contato") ?>">
            <div class="faleconosco">
              <img src="<?= url("/theme/img/top/iconCarta.svg"); ?>" alt="icone SVG de carta" />
              <label>FALE CONOSCO</label>
            </div><!-- faleconosco -->
          </a>
          <a href="<?= url("/contato"); ?>">
            <div class="orcamento">
              <img src="<?= url("/theme/img/top/IconEuro.svg"); ?>" alt="icone svg do euro" />
              <label>ORÇAMENTO</label>
            </div>
          </a>
          <!--orcamento -->

          <div onclick="abrirWats()" class="watsapp">
            <img src="<?= url("/theme/img/top/iconContato.svg"); ?>" alt="" />
            <label>61 9 9636-0059</label>
          </div><!-- watsapp -->

        </div><!-- rigth -->
        <div class="left">
        <a href="https://www.facebook.com/zuc.dev.9"><img src="<?= url("/theme/img/iconTop/iconFace.svg"); ?>" alt="icone svg do facebook"></a>
          <a href="https://www.instagram.com/zucdeveloper"><img src="<?= url("/theme/img/iconTop/iconInsta.svg"); ?>" alt=""></a>
         <a href="https://www.linkedin.com/in/ant%C3%B4nio-jr-250a841b5/"><img src="<?= url("/theme/img/iconTop/iconLinked.svg"); ?>" alt="icone svg do linked"></a>
          <img onclick="abrirWats()" src="<?= url("/theme/img/iconTop/iconWats.svg"); ?>" alt="">
        </div><!-- left -->
      </section> <!-- top -->
    </div><!-- container -->
  </section><!-- backgroundTOP -->


  <header>
    <div class="container">
      <div class="layout">
        <div class="logo"><img src="<?= url("/theme/img/Logo.png"); ?>" alt="ZucDeveloper logo"></div>
        <nav class="navBar">
          <ul>
            <li><a href="<?= url(); ?>" rel="external dofollows">HOME</a></li>
            <li><a href="<?= url("/sobre"); ?>" rel="external dofollows">SOBRE</a></li>
            <li><a href="<?= url("/portfolio"); ?>" rel="external dofollows">PORTFÓLIO</a></li>
            <li><a href="<?= url("/blog"); ?>" rel="external dofollows">BLOG</a></li>
            <li><a href="<?= url("/contato"); ?>" rel="external dofollows">CONTATO</a></li>
          </ul>
        </nav>
        <div class="iconMenu" id="iconMenu"><img src="<?= url("/theme/img/iconMenu.svg"); ?>" alt="ZucDeveloper icone de menu SVG" srcset=""
            width="35px"></div>
      </div><!-- layout -->
    </div><!-- container -->
  </header>

  <div class="toogleMenu">
    <nav class="toogleBar">
      <ul>
        <li><a href="<?= url(); ?>" rel="external dofollows">HOME</a></li>
        <li><a href="<?= url("/sobre "); ?>" rel="external dofollows">SOBRE</a></li>
        <li><a href="<?= url("/portfolio"); ?>" rel="external dofollows">PORTFÓLIO</a></li>
        <li><a href="<?= url("/blog"); ?>" rel="external dofollows">BLOG</a></li>
        <li><a href="<?= url("/contato"); ?>" rel="external dofollows">CONTATO</a></li>
      </ul>
    </nav><!-- toogleBar -->
  </div><!-- toogleMenu -->
  <main>
    <?=  $v->section("content");?>
  </main>

  <footer>
    <div class="row1">
      <div class="coll">
        <div class="logo"><img src="<?= url("/theme/img/Logo.png"); ?>" alt=""></div>
        <p>"Fale sobre sua idéia conosco, nós podemos ajudar"</p>
      </div>
      <div class="coll">
        <nav>
          <ul>
            <li>
              <h1>LINKS</h1>

            </li>
            <li><a href="<?= url(); ?>" rel="external dofollows">HOME</a></li>
            <li><a href="<?= url("/sobre"); ?>" rel="external dofollows">SOBRE</a></li>
            <li><a href="<?= url("/portfolio"); ?>" rel="external dofollows">PORTFÓLIO</a></li>
            <li><a href="<?= url("/blog"); ?>" rel="external dofollows">BLOG</a></li>
            <li><a href="<?= url("/contato"); ?>" rel="external dofollows">CONTATO</a></li>
          </ul>
        </nav>
      </div>
      <div class="coll">
        <nav>
          <ul>
            <li>
              <h1>INFORMAÇÕES PARA CONTATO</h1>
            </li>
            <li>
              <p>CEP: 72308-000, Brasília-DF</p>
            </li>
            <li>
              <div onclick="abrirWats()" class="watsapp">
                <p class="tel">(61) 9 9636-0059</p>
              </div>
            </li>
            <li><a href="<?= url(); ?>" rel="external dofollows">www.zucdeveloper.com</a></li>

            <li>
              <a href="mailto:contato@zucdeveloper.com?subject=Hello">
                <p>contato@zucdeveloper.com</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="coll1">
        <small>
          <green class="block">&copy;</green> 2020 <green class="block">Zuc</green>Developer</small>
        <small>
            <a href="https://www.freepik.com/" rel="external nofollows">Tree photo created by - freepik</a>
        </small>
      </div>
    </div>
  </footer>
  <script src="<?= url("/theme/script/jquery.js"); ?>"></script>

  <?=  $v->section("js");?>
  <!-- pages script -->


</body>

</html>