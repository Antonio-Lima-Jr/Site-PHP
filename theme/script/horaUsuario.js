$(() => {
  const INCLUDE_PATH = $('base').attr('base')
  const data = {
    "hora" : new Date().getHours()
  }

  if (data.hora >= 5 && data.hora < 12){
    const imageUrl = (INCLUDE_PATH + '/theme/img/bannerBlog/bannerManha.jpg')
    $('.bannerBlog').css('background-image', 'url(' + imageUrl + ')')
    $('.bannerBlog h1').text('Bom Dia')
    

  } else if (data.hora >= 12 && data.hora < 18){
    const imageUrl = (INCLUDE_PATH + '/theme/img/bannerBlog/bannerTarde.jpg')
    $('.bannerBlog').css('background-image', 'url(' + imageUrl + ')')
    $('.bannerBlog h1').text('Boa Tarde')

  } else if (data.hora >= 18 && data.hora < 24){
    const imageUrl = (INCLUDE_PATH + '/theme/img/bannerBlog/bannerNoite.jpg')
    $('.bannerBlog').css('background-image', 'url(' + imageUrl + ')')
    $('.bannerBlog h1').text('Boa Noite')


  } else if (data.hora >= 0 && data.hora < 5){
    const imageUrl = (INCLUDE_PATH + '/theme/img/bannerBlog/bannerNoite.jpg')
    $('.bannerBlog').css('background-image', 'url(' + imageUrl + ')')
    $('.bannerBlog h1').text('Boa Noite')

  }
})