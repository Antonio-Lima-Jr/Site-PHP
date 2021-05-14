<?php  $v->layout( '_dashboard' );?>


<?= $v->start("style") ?>

<link rel="stylesheet" href="<?= url("/theme/admin/plugins/summernote/summernote-bs4.min.css") ?>">

<?= $v->end() ?>

<!-- Content Header (Page header) -->
<?php if (isset($post)){echo "<postid data-id='".$post->id."'/>";}; ?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 id="page" >Blog Post</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Post Blog</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Folders</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item active">
                <a href="#" class="nav-link">
                  <i class="fas fa-inbox"></i> Inbox
                  <span class="badge bg-primary float-right">12</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-filter"></i> Junk
                  <span class="badge bg-warning float-right">65</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Compor novo Artigo</h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <input class="form-control titulo-post" name="titulo" <?php if (isset($post)){echo "value='".$post->title."'";}; ?> placeholder="Titulo">
            </div>
            <div class="form-group">
              <input class="form-control descricao-post" <?php if (isset($post)){echo "value='".$post->description."'";}; ?> name="descricao" placeholder="Descrição">
            </div>
            <div class="form-group">
              <textarea id="compose-textarea" class="form-control" style="height: 500px">
              <?php if (isset($post)){echo $post->body;}; ?>
              </textarea>
            </div>
            <div class="form-group">
              <div class="btn btn-default btn-file">
                <i class="fas fa-paperclip"></i> Attachment
                <input type="file" name="attachment">
              </div>
              <p class="help-block">Max. 10MB</p>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="float-right">

              <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
            </div>
            <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


<?= $v->start("js") ?>

<script src="<?= url("/theme/admin/plugins/summernote/summernote-bs4.min.js") ?>"></script>
<script>
  const INCLUDE_PATH = $('base').attr('base')
$(function() {
  //Add text editor
  $('#compose-textarea').summernote()
})


$("button[type=reset]").click(() => {
  $('.note-editable').text('');
})

var cover;
$('input[type=file]').change(function(){
   cover = $("input[type=file]");
   cover = cover[1].value.replace('fakepath', 'blogImages');
   cover = cover.replaceAll("\\", '/');
   cover = cover.replace('C:', '');
 
})

$("button[type=submit]").click(function(e) {
  e.preventDefault();
  const titulo = $(".titulo-post").val();
  const descricao = $(".descricao-post").val();

  const conteudo = $('.note-editable').html();
  var idPost;
if ($("postid").length) { 
    var idPost = $("postid").data("id")
    var data = {
    id : idPost,
    titulo: titulo,
    descricao: descricao,
    conteudo: conteudo,
    cover: cover
  }
  data = JSON.stringify(data);
} else {
  var data = {
   titulo: titulo,
   descricao: descricao,
   conteudo: conteudo,
   cover: cover
  }
  data = JSON.stringify(data);
}

  


  $.ajax({
      url: INCLUDE_PATH + '/dashboard/composeblog/save',
      dataType: 'json',
      type: 'POST',
      data: data,
      beforeSend: function() {
        $('loader').css('display', 'block');


      },
      complete: function() {
      
        $('loader').css('display', 'none');

      },
      success: function(data) {

        if(data.success === true){
          $(".alert-success").text(data.mensagem)
          $(".alert-success").fadeIn();
          setTimeout(() => {
            $(".alert-success").fadeOut()
          }, 3000);
        } else {
          $(".alert-danger").text(data.mensagem)
          $(".alert-danger").fadeIn();
          setTimeout(() => {
            $(".alert-danger").fadeOut()
          }, 3000);
        }

      },
      
  });    

});
</script>

<?= $v->end() ?>