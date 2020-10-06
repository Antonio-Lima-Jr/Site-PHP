<?php
  use Source\Support\DateFormat;
  $v->layout( '_theme' );
?>
<?= $v->start( 'style' ) ?>
  <link rel='stylesheet' href='<?= url('/theme/css/style.css') ?>'>
  <link rel='stylesheet' href='<?= url('/theme/css/blogStyleArticle.css') ?>'>
<?= $v->end() ?>

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
        <img src="<?= url('/'.$post->cover); ?>" alt="<?= $post->title; ?>">
        <div class="body">
          <h1><?= $post->title ?></h1>
          <h3><i><?= $post->description ?></i></h3>
          <small><?=DateFormat::beautDate( $post->created_at );?></small>
          <p><?= $post->body ?></p>
        </div>
      </article>

    <?php endif; ?>

      <section class='promocoes'>
        <div class='redesSociaisBlog'>
          <h1>Siga-nos nas redes sociais!</h1>
          <div class='inconesDasRedesBlog'>
            <a href='https://www.facebook.com/zuc.dev.9'>
              <img src='<?= url('/theme/img/bannerBlog/icones/iconFace.svg'); ?>' alt='icone svg do facebook'>
            </a>
            <a href='https://www.instagram.com/zucdeveloper'>
              <img src='<?= url('/theme/img/bannerBlog/icones/iconInsta.svg'); ?>' alt=''>
            </a>
            <a href='https://www.linkedin.com/in/ant%C3%B4nio-jr-250a841b5/'>
              <img src='<?= url('/theme/img/bannerBlog/icones/iconLinked.svg'); ?>' alt='icone svg do linked'>
            </a>
            <img onclick='abrirWats()' src='<?= url('/theme/img/bannerBlog/icones/iconWats.svg'); ?>' alt=''>
          </div><!-- icones das redes -->
          <h1>Artigos</h1>
<?php
  if ( $posts ):
    foreach ( $posts as $post ):
      $urlTratamento = str_replace('.', '', $post->title);
      $urlTratamento = str_replace(' ', '-', $urlTratamento);
?>

     <a href="<?= url("/blog/{$urlTratamento}"); ?>" title="<?= $post->title; ?>" ><p><?= $post->title; ?></p></a> 

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
    <textarea  name="w3review" placeholder="Mensagem"></textarea>
    <button>Enviar!</button>
  </form><!-- inputComentarios -->


  <div class="boxComentarios">
    <h1 class="contComentarios">Comentários</h1>

    <div class="coments">
      <h1>Antonio</h1><small> 18 de agosto de 2020 02:35</small>
      <p>Ótimo Conteúdo</p>
    </div>
    <div class="coments">
      <h1>Antonio</h1><small>18 de agosto de 2020 02:35</small>
      <p>Ótimo Conteúdo</p>
    </div>
    <div class="coments">
      <h1>Antonio</h1><small>18 de agosto de 2020 02:35</small>
      <p>Ótimo Conteúdo</p>
    </div>
  </div><!-- comentarios -->
  </div><!-- card -->

</div>

<?php $v->start( 'js' ); ?>
  <script src='<?= url('/theme/script/abrirWats.js'); ?>'></script>
  <script src='<?= url('/theme/script/script.js'); ?>'></script>
  <script src='<?= url('/theme/script/horaUsuario.js'); ?>'></script>
<?php $v->end(); ?>