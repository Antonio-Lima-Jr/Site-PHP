<?php  $v->layout("_theme"); ?>
<?= $v->start("style") ?>
<link rel="stylesheet" href="<?= url("/theme/css/style.css") ?>">
<link rel="stylesheet" href="<?= url("/theme/css/styleErros.css") ?>">
<?= $v->end() ?>

<div class="container">
  <div class="error">
  <h2>OOPS</h2>
  <?php  if ($error == "404"): ?>
  <img src="<?= url("/theme/img/error/404.svg") ?>" alt="">

  <?php  endif; ?>

  <p>Não encontramos essa página!</p>
  <h6>Erro: <green class="block"><?= $error ?></green></h6>
  </div>
</div>

<?php $v->start( 'js' );
?>

<script src='<?= url('/theme/script/abrirWats.js'); ?>'></script>
<script src='<?= url('/theme/script/script.js'); ?>'></script>

<?php $v->end();
?>