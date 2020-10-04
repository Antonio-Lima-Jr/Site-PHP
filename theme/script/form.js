const INCLUDE_PATH = $('base').attr('base')

$('#enviar').click((e) => {
  e.preventDefault();
  // Validar Nome
  const nome = validarNome()
  const email = validarEmail()
  const fone = validarTel()
  const assunto = validarAssunto()
  const msg = validarMensagem()
  const identificador = $('#identificador').attr('value')
  const data = {
    'name': nome,
    'email': email,
    'telefone': fone,
    'assunto': assunto,
    'mensagem': msg,
    'identificador': identificador
  }
  function validarNome() {
    const nomeVal = $('#nome')
    var name = ''
    if (nomeVal[0].value != "" && nomeVal[0].value.length >= 3 && nomeVal[0].value.length < 40) {
      $('#nome').css("border" , "none")
      name = nomeVal[0].value
      return name
    } else {
      $('#nome').css("border" , "1px solid #F00")
      alert('O campo nome deve ter pelo menos 3 caracteres e no máximo 40')
      return null
    }
  }
  function validarEmail() {
    const email = $('#email')
    var mail = '' 
    if (email[0].value.indexOf("@") != -1) {
      mail = email[0].value
      return mail
    } else {
      alert('E-mail invalido')
      $('#email').css("border" , "1px solid #F00")
      return null
    }
  }
  function validarTel() {
    const tel = $('#telefone')
    var telefone = tel[0].value.match(/\d/g)
    if (telefone.length === 11){
      telefone = telefone.toString()
      telefone = telefone.replace(/,/g, '');
      return telefone
    }else {
      alert("O numero de telefone deve conter 11 numeros ex: 61 99564 0058")
      $('#telefone').css("border" , "1px solid #F00")
      return null
    }
  }
  function validarAssunto() {
    var ass = $('#assunto')
    if (ass[0].value != "valor1"){
      return ass[0].value
    }else{
      alert('Por favor selecione um assunto')
      $('#assunto').css("border" , "1px solid #F00")
      return null
    }    
  }
  function validarMensagem() {
    let msg = $('#msg')
    if(msg[0].value.length < 1000 && msg[0].value.length > 0 ){
      return msg[0].value
    }
    else {
      if (msg[0].value.length > 1000){
        alert("Precisamos apenas de um mensagem sucita neste primeiro contato. Até 1000 caracteres")
        $('#msg').css("border" , "1px solid #F00")
      }
      if (msg[0].value.length === 0 ){
        alert("Deixe uma mensagem sobre o seu projeto!")
        $('#msg').css("border" , "1px solid #F00")
      }
    }
  }

  return $.ajax({
    type: "post",
    url: INCLUDE_PATH+'/contato/client',
    data: data,
    datatype: 'json',
    beforeSend: function(){
      $('.load').css('display', 'block');
   },
    success: function (data) {
      if (data) {
        alert('Mensagem enviada com sucesso!')
      } else {
        alert("Não foi possivel enviar a mensagem!")
      }
    },
    complete: function() {
      $('.load').css('display', 'none');
    }

  });
})


