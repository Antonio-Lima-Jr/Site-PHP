<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login zucDeveloper</title>

<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= url("/theme/admin/plugins/fontawesome-free/css/all.min.css"); ?>">
  <!-- IonIcons -->
  <link rel="stylesheet" href="<?= url("/theme/admin/dist/css/icheck-bootstrap.css"); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= url("/theme/admin/dist/css/adminlte.css"); ?>">



</head>

<body class="hold-transition login-page">
<base base="<?= url(); ?>">

<div class="login-box">
  <div class="login-logo">
    <a href="<?= url(); ?>"><b>Zuc</b>Developer</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Começar sessão</p>

      <form  method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="senha" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= url("/theme/script/jquery.js"); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= url("/theme/admin/dist/js/bootstrap.bundle.js"); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= url("/theme/admin/dist/js/adminlte.js"); ?>"></script>
 <script type="text/javascript">
  
$('form').on("submit" , function(e) {
  e.preventDefault();
  const INCLUDE_PATH = $('base').attr('base');
  const serie = $(this).serializeArray();
  var data = {};
  serie.forEach((element) => {
    data[element.name] = element.value;
  });


  data = JSON.stringify(data);


  $.ajax({
      url: INCLUDE_PATH + '/login/authoriz',
      dataType: 'json',
      type: 'POST',
      data: data,
      beforeSend: function() {
        // $('.load').css('display', 'block');
      },
      complete: function(jqXHR, textStatus) {
        console.log("jqXHR do Complete" + jqXHR + textStatus)
      },
      success: function(data) {
        var objs = data
        localStorage.setItem("Authorization",objs.Authorization);
        window.location.href = objs.locale
      },
      error: function(error){
            console.log('error: ' + error) //exibe na aba console do navegador
            //ou

        }
      
  }).done(function (e) {
    console.log('e do DONE :>> '+ e);
  });     

})

</script>
</body>
</html>
