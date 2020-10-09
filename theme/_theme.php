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
<!-- google ADSENSE -->
<script data-ad-client="ca-pub-7300703075437353" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <?= $head; ?>
  <?=  $v->section("style");?>
  <?=  $v->section("ads");?>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="<?= url("/theme/img/favicon.ico"); ?>" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
</head>

<body>
          
  <div class="watsFixed">
    <img onclick="abrirWats()" src="<?= url("/theme/img/home/iconWatsVerde.svg"); ?>" title="Orçamento de sites e Blogs personalizados em Brasilia-DF" alt="Orçamento de sites e Blogs personalizados em Brasilia-DF">
  </div>

  <div class="load"><img src="<?= url("/theme/img/loadder.svg"); ?>" title="Sites Blogs e Imagens para redes sociais" alt="Sites Blogs e Imagens para redes sociais"></div>
  <base base="<?= url() ?>">
  </base>
  <section class="backgroundTop">
    <div class="container">
      <section class="top">
        <div class="rigth">
          <a href="<?= url("/contato") ?>">
            <div class="faleconosco">
              <img src="<?= url("/theme/img/top/iconCarta.svg"); ?>" title="Designer de sites e Blogs exclusivos" alt="Designer de sites e Blogs exclusivos" />
              <label>FALE CONOSCO</label>
            </div><!-- faleconosco -->
          </a>
          <a href="<?= url("/contato"); ?>">
            <div class="orcamento">
              <img src="<?= url("/theme/img/top/IconEuro.svg"); ?>" title="Designer de sites e Blogs exclusivos" alt="Designer de sites e Blogs exclusivos" />
              <label>ORÇAMENTO</label>
            </div>
          </a>
          <!--orcamento -->

          <div onclick="abrirWats()" class="watsapp">
            <img src="<?= url("/theme/img/top/iconContato.svg"); ?>" title="Orçamento de Sites institucionais em Brasilia-DF" alt="Orçamento de Sites institucionais em Brasilia-DF" />
            <label>61 9 9636-0059</label>
          </div><!-- watsapp -->

        </div><!-- rigth -->
        <div class="left">
        <a href="https://www.facebook.com/zuc.dev.9" title="Sites bonitos com SEO otimizado para midias sociais"><img src="<?= url("/theme/img/iconTop/iconFace.svg"); ?>" title="Sites com designer personalizado " alt="Sites com designer personalizado no DF"></a>
          <a href="https://www.instagram.com/zucdeveloper" title="Designer de sites bonitos em Brasilia-DF"><img src="<?= url("/theme/img/iconTop/iconInsta.svg"); ?>" title="Blogs com designer personalizados "  alt="Blogs com designer personalizados"></a>
         <a href="https://www.linkedin.com/in/ant%C3%B4nio-jr-250a841b5/" title="Designer de sites bonitos em Brasilia-DF"><img src="<?= url("/theme/img/iconTop/iconLinked.svg"); ?>" title="Criação de sites responsivo e rapidos para mobile" alt="Criação de sites responsivo e rapidos para mobile"></a>
          <img onclick="abrirWats()" src="<?= url("/theme/img/iconTop/iconWats.svg"); ?>" title="zucdeveloper para sites no DF" alt="zucdeveloper para sites no DF">
        </div><!-- left -->
      </section> <!-- top -->
    </div><!-- container -->
  </section><!-- backgroundTOP -->


  <header>
    <div class="container">
      <div class="layout">
        <div class="logo"><img src="<?= url("/theme/img/Logo.png"); ?>" title="Produção de sites, blogs, sites intitucionais bonitos e com SEO otimizados e conteúdo para midias sociais" alt="Produção de sites, blogs, sites intitucionais bonitos e com SEO otimizados e conteúdo para midias sociais"></div>
        <nav class="navBar">
          <ul>
          <li><a href="<?= url(); ?>" rel="external dofollows" title="zucdeveloper Home" alt="zucdeveloper home">HOME</a></li>
            <li><a href="<?= url("/sobre"); ?>" rel="external dofollows" title="zucdeveloper sobre" alt="zucdeveloper sobre">SOBRE</a></li>
            <li><a href="<?= url("/portfolio"); ?>" rel="external dofollows" title="zucdeveloper portifolio" alt="zucdeveloper portifolio">PORTFÓLIO</a></li>
            <li><a href="<?= url("/blog"); ?>" rel="external dofollows" title="zucdeveloper blog" alt="zucdeveloper blog">BLOG</a></li>
            <li><a href="<?= url("/contato"); ?>" rel="external dofollows" title="zucdeveloper contato" alt="zucdeveloper contato">CONTATO</a></li>
          </ul>
        </nav>
        <div class="iconMenu" id="iconMenu"><img src="<?= url("/theme/img/iconMenu.svg"); ?>" title="Sites Bonitos em Brasilia-DF com SEO aprimorado" alt="Sites Bonitos em Brasilia-DF com SEO aprimorado" srcset=""
            width="35px"></div>
      </div><!-- layout -->
    </div><!-- container -->
  </header>

  <div class="toogleMenu">
    <nav class="toogleBar">
      <ul>
      <li><a href="<?= url(); ?>" rel="external dofollows" title="zucdeveloper Home" alt="zucdeveloper home">HOME</a></li>
            <li><a href="<?= url("/sobre"); ?>" rel="external dofollows" title="zucdeveloper sobre" alt="zucdeveloper sobre">SOBRE</a></li>
            <li><a href="<?= url("/portfolio"); ?>" rel="external dofollows" title="zucdeveloper portifolio" alt="zucdeveloper portifolio">PORTFÓLIO</a></li>
            <li><a href="<?= url("/blog"); ?>" rel="external dofollows" title="zucdeveloper blog" alt="zucdeveloper blog">BLOG</a></li>
            <li><a href="<?= url("/contato"); ?>" rel="external dofollows" title="zucdeveloper contato" alt="zucdeveloper contato">CONTATO</a></li>
      </ul>
    </nav><!-- toogleBar -->
  </div><!-- toogleMenu -->
  <main>
    <?=  $v->section("content");?>
  </main>

  <footer>
    <div class="row1">
      <div class="coll">
        <div class="logo"><img src="<?= url("/theme/img/Logo.png"); ?>" title="Criação de sites e blogs no Distrito Federal, Brasília" alt="Criação de sites e blogs no Distrito Federal, Brasília"></div>
        <p>"Fale sobre sua idéia conosco, nós podemos ajudar"</p>
      </div>
      <div class="coll">
        <nav>
          <ul>
            <li>
              <h1>LINKS</h1>

            </li>
            <li><a href="<?= url(); ?>" rel="external dofollows" title="zucdeveloper Home">HOME</a></li>
            <li><a href="<?= url("/sobre"); ?>" rel="external dofollows" title="zucdeveloper sobre" >SOBRE</a></li>
            <li><a href="<?= url("/portfolio"); ?>" rel="external dofollows" title="zucdeveloper portifolio" >PORTFÓLIO</a></li>
            <li><a href="<?= url("/blog"); ?>" rel="external dofollows" title="zucdeveloper blog" >BLOG</a></li>
            <li><a href="<?= url("/contato"); ?>" rel="external dofollows" title="zucdeveloper contato" >CONTATO</a></li>
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
              <div onclick="abrirWats()" class="watsapp" title="zucdeveloper contato whatsapp para orçamento de site personalizado">
                <p class="tel">(61) 9 9636-0059</p>
              </div>
            </li>
            <li><a href="<?= url(); ?>" rel="external dofollows" title="Produçao de sites e blogs personalizados ZucDeveloper">www.zucdeveloper.com</a></li>

            <li>
              <a href="mailto:contato@zucdeveloper.com?subject=Hello" title="Sites Bonito com seo aprimorado e programação de ponta">
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
            <a href="https://www.freepik.com/" rel="external nofollows" >Tree photo created by - freepik</a>
        </small>
      </div>
    </div>
  </footer>
  <script src="<?= url("/theme/script/jquery.js"); ?>"></script>

  <?=  $v->section("js");?>
  <!-- pages script -->


</body>

</html>