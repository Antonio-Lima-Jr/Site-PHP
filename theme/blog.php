<?php
  use Source\Support\DateFormat;
  $v->layout( '_theme' );
?>
<?= $v->start( 'ads' ) ?>
  <script data-ad-client='ca-pub-7300703075437353' async src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<?= $v->end() ?>

<?= $v->start( 'style' ) ?>
  <link rel='stylesheet' href='<?= url('/theme/css/style.css') ?>'>
  <link rel='stylesheet' href='<?= url('/theme/css/blogStyle.css') ?>'>
<?= $v->end() ?>

<div class='bannerBlog'>
  <div class='overlayerBlog'>
    <div class='container'>
      <h1></h1>
    </div><!-- container -->
  </div><!-- overlayerBlog -->
</div><!-- bannerBlog -->
<div class='container'>
  <div class='blogMain'>
    <div class='conteudo'>
<?php
  if ( $posts ):
    foreach ( $posts as $post ):
      $urlTratamento = str_replace('.', '', $post->title);
      $urlTratamento = str_replace(' ', '-', $urlTratamento);
?>     
      <div class='alignPost'>
        <a href="<?= url("/blog". "/". $urlTratamento ); ?>">
          <article class='post'>
            <img src="<?= url('/' . $post->cover) ?>" alt='' title='' />
            <div class='body'>
              <h1>
                <?=$post->title;?>
              </h1>
              <h3>
                <?=$post->description;?>
              </h3>
              <small>
                <?=DateFormat::beautDate( $post->created_at );?>
              </small>
              <br/>
              <br/>
            </div><!--body -->
          </article><!-- post -->
        </a>
      </div><!-- alignPost -->
<?php
endforeach;
endif;
?>
    </div><!--conteudo -->
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
        </div><!-- inconesDasRedesBlog -->
        <h1>Artigos</h1>
<?php
  if ( $posts ):
    foreach ( $posts as $post ):
      $urlTratamento = str_replace('.', '', $post->title);
      $urlTratamento = str_replace(' ', '-', $urlTratamento);
?>
   
        <a href="<?= url("/blog/{$urlTratamento}") ?>"><p><?=$post->title;?></p></a> 
    
<?php
    endforeach;
  endif;
?>
      </div><!-- redesSociaisBlog -->
    </section>
  </div><!-- blogMain -->
</div><!-- container -->
<?php $v->start( 'js' ); ?>

  <script src='<?= url('/theme/script/abrirWats.js'); ?>'></script>
  <script src='<?= url('/theme/script/script.js'); ?>'></script>
  <script src='<?= url('/theme/script/horaUsuario.js'); ?>'></script>
  <script src='<?= url('/theme/script/redirectBlog.js'); ?>'></script>

<?php $v->end(); ?>