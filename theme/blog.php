<?php
  use Source\Support\DateFormat;
  use Source\Support\TratURI;
  $v->layout( '_theme' );
?>


<?= $v->start( 'style' ) ?>
  <link rel='stylesheet' href='<?= url('/theme/css/style.css'); ?>'>
  <link rel='stylesheet' href='<?= url('/theme/css/blogStyle.css'); ?>'>
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
      $urlTratamento = TratURI::getDbUri($post->title);
?>     
      <div class='alignPost'>
        <a href="<?= url("/blog". "/". $urlTratamento ); ?>" title="<?= $post->title; ?>">
          <article class='post'>
            <img src="<?= url('/' . $post->cover); ?>" title="<?= $post->title; ?>" alt='<?= $post->title; ?>' />
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
    foreach ( $posts as $post ):
      $urlTratamento = TratURI::getDbUri($post->title);
?>
   
        <a href="<?= url("/blog/{$urlTratamento}"); ?>" title="<?= $post->title; ?>"><p><?= $post->title; ?> </p></a> 
    
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


<?php $v->end(); ?>

