<?php
  use Source\Support\DateFormat;
  use Source\Support\TratURI;
  $v->layout( '_theme' );
?>
<?= $v->start( 'style' ) ?>
  <link rel='stylesheet' href='<?= url('/theme/css/style.css') ?>'>
  <link rel='stylesheet' href='<?= url('/theme/css/blogStyleArticle.css') ?>'>
<?= $v->end() ?>
<!-- script do facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- script do twiter -->
<script>
window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));
</script>
<div class='bannerBlog'>
  <div class='overlayerBlog'>
    <div class='container'>
      <h1></h1>
    </div>
  </div>
</div>

<div class='container'>
  <div class='blogMain'>

    <?php if($post): ?>

      <article>
        <img src="<?= url('/'.$post->cover); ?>" title="<?= $post->title; ?>" alt="<?= $post->title; ?>">
   
        <div class="body">
          <!-- redes sociis -->
          <div class="redes-article-bonito a2a_kit a2a_kit_size_32 a2a_default_style">
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
          </div>
          <h1 class="tituloArticle"><?= $post->title ?></h1>
          <small><?=DateFormat::beautDate( $post->created_at );?></small>
          <h3><i><?= $post->description ?></i></h3>
          <div><?= $post->body ?></div>
           <!-- redes sociis -->
          <div class="redes-article-bonito a2a_kit a2a_kit_size_32 a2a_default_style">
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
          </div>
        </div>
      </article>

    <?php endif; ?>

      <section class='promocoes'>
        <div class='redesSociaisBlog'>
          <h1>Siga-nos nas redes sociais!</h1>
          <div class='inconesDasRedesBlog'>
          <a href='https://www.facebook.com/zuc.dev.9' title="Designer de sites e blog personalizados com SEO aprimorado">
            <img src='<?= url('/theme/img/bannerBlog/icones/iconFace.svg'); ?>' title="Site para aumentar lucro de negócio nas reses sociais" alt='Site para aumentar lucro de negócio nas reses sociais'>
          </a>
          <a href='https://www.instagram.com/zucdeveloper' title="Sites responsivos com SEO otimizado">
            <img src='<?= url('/theme/img/bannerBlog/icones/iconInsta.svg'); ?>' title="Produção de sites com SEO aprimorado e personalizado" alt='Produção de sites com SEO aprimorado e personalizado'>
          </a>
          <a href='https://www.linkedin.com/in/ant%C3%B4nio-jr-250a841b5/' title="Faça sua marca ganhar visibilidade">
            <img src='<?= url('/theme/img/bannerBlog/icones/iconLinked.svg'); ?>' title="Criar layout com HTML, JAVASCRIPT e CSS" alt='Criar layout com HTML, JAVASCRIPT e CSS'>
          </a>
          <img onclick='abrirWats()' src='<?= url('/theme/img/bannerBlog/icones/iconWats.svg'); ?>' title="Programação para a sua regra de negócio" alt='Programação para a sua regra de negócio'>
        </div><!-- inconesDasRedesBlog -->
          <h1>Artigos</h1>
<?php
  if ( $posts ):
    foreach ( $posts as $postis ):
      $urlTratamento = TratURI::getDbUri($postis->title);
?>

     <a href="<?= url("/blog/{$urlTratamento}"); ?>" title="<?= $postis->title; ?>" ><p><?= $postis->title; ?></p></a> 

<?php
    endforeach;
  endif;
?>
      </div><!-- redesSociaisBlog -->
    </section><!-- promoçoes -->
  </div><!-- blogMain -->
</div><!-- container -->


<div class="container">
  <div class="card">
  <h1 class="TitleComent">Deixe seu comentário</h1>

  <div class="alert">
    <p><b>Atenção:</b> Os comentários abaixo não representam as ideias zucDeveloper.</p>
  </div><!-- alert -->
  <form class="inputComentarios" >
    <input type="text" name="name" placeholder="Nome">
    <textarea  name="comentario" placeholder="Comentário"></textarea>
    <input type="hidden" name="title" value="<?= $post->title; ?>" />
    <input type="submit" value="Enviar"/>
    
  </form><!-- inputComentarios -->


  <div class="boxComentarios">
    <h1 class="contComentarios">Comentários</h1>
      <div class="listComents">
        
       
      </div><!-- listComents -->
  </div><!-- comentarios -->
  </div><!-- card -->

</div>

<?php $v->start( 'js' ); ?>
  <script src='<?= url('/theme/script/abrirWats.js'); ?>'></script>
  <script src='<?= url('/theme/script/script.js'); ?>'></script>
  <script src='<?= url('/theme/script/horaUsuario.js'); ?>'></script>
  <script src="<?= url("/theme/script/coments.js"); ?>"></script>
  <script async src="https://static.addtoany.com/menu/page.js"></script>
<?php $v->end(); ?>

