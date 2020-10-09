$(() => {
  const INCLUDE_PATH = $('base').attr('base')
  const transfData = {
    1:"Janeiro" ,
    2:"Feveiro" ,
    3:"Março" ,
    4:"Abril" ,
    5:"Maio" ,
    6:"Junho" ,
    7:"Julho" ,
    8:"Agosto" ,
    9:"Setembro" ,
    10:"Outubro" ,
    11:"Novembro" ,
    12:"Dezembro" ,

  }
  function getComents() {
    const titulo = {
      titulo : $('div.body h1.tituloArticle').text()
    }

    $.ajax({
      url: INCLUDE_PATH + '/blog/getcoments',
      dataType: 'json',
      type: 'POST',
      data: titulo,
      beforeSend: function() {
        // $('.load').css('display', 'block');
      },
      complete: function() {
        // $('.load').css('display', 'none');
      },
      success: function(data) {
        if (data) {
          console.log(data)
          const contComent = data.length;
          if (contComent){
            $(".contComentarios").text(contComent + " Comentarios")
          }
          data.forEach(e => {
            const mes = e.created_at.substr(5,2)
            const dia = e.created_at.substr(8,2)
            const ano = e.created_at.substr(0,4)
            
            const item = `<div class="coments"><h1>${e.name}</h1><small>${dia+ ' de ' + transfData[mes]+ " de " + ano}</small><p>${e.comentario}</p></div>`;
            $(".listComents").append(item);
           
          });
        } else {
          console.log("erro")
        }
      },
      
  });     

  }
  getComents();


  $(".inputComentarios").submit(( e ) => {
    e.preventDefault();

    const serialize = $("form.inputComentarios").serializeArray();
    const serializeObj = {}
    $.map(serialize, function(n, i){
      serializeObj[n['name']] = n['value'];
    });
    const item = `<div class="coments"><h1>${serializeObj.name}</h1><p>${serializeObj.comentario}</p></div>`;
    $.ajax({
      url: INCLUDE_PATH + '/blog/coments',
      dataType: 'json',
      type: 'POST',
      data: serializeObj,
      beforeSend: function() {
        // $('.load').css('display', 'block');
      },
      complete: function() {
        $('.load').css('display', 'none');
      },
      success: function(data) {
        if (data) {
          $(".listComents").append(item)
        } else {
          // alert("Não foi possivel enviar a mensagem!")
        }
      },
      error: function(xhr,er) {
        // alert("Não foi possivel ")
      }
  });     
  })
})