<?php  $v->layout("_theme"); ?>
<?= $v->start("style") ?>
  <link rel="stylesheet" href="<?= url("/theme/css/style.css") ?>">
<?= $v->end() ?>

<div class="error">
  <h2>OOOOOPS</h2>
  <h2>erro <?= $error ?>! </h2>
  <p>Amet consectetur proident laboris elit mollit in adipisicing officia qui excepteur.</p>
</div>

<!-- Modifica a Side Bar -->
<?php $v->start("sidebar"); ?>

  <a href="<?= url() ?>" title="voltar ao inicio">Voltar</a>

<?php $v->end(); ?>