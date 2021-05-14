$(function () {
  const INCLUDE_PATH = $('base').attr('base')
  var checkbox ;
  $(".box-email input[type=checkbox]").click(function () {
    checkbox = $(this).val();  
    
  })
 
  $(".fa-trash-alt").click(function () {
  
    $.ajax({
      url: INCLUDE_PATH + '/dashboard/composeblog/delete',
      dataType: 'json',
      type: 'POST',
      data: JSON.stringify(checkbox),
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
      
  })
  })


  $(".alterar-post").click(function (e) {
    e.preventDefault();
    if (!checkbox){
      console.log("click na seleção de algum email")
      return;
    }

    window.location.href = INCLUDE_PATH + "/dashboard/composeblog/alterarpost/" + checkbox;
    
    
    
  })
  


});