( () => {
// ----------------------Carrosel

$(function () {
  var curSlide = 0;
  var maxSlide = $('.banner-single').length -1;
  var delay = 5000


  initSlider()
  changeSlide()
  function initSlider () {
    $('.banner-single').hide();
    $('.banner-single').eq(0).show();
    for (let i = 0 ; i < maxSlide + 1; i++ ){
      var content = $('.bullets').html();
      if(i == 0){
        content += '<span class="active-slider"></span>';
      } else {
        content += '<span></span>';
      }

      $('.bullets').html(content)
    }

  }


  function changeSlide () {
    setTimeout(() => {
      $('.banner-single').eq(curSlide).stop().fadeOut(2000);
      curSlide += 1;
      if (curSlide > maxSlide) {
        curSlide = 0;
      }
      $('.banner-single').eq(curSlide).stop().fadeIn(2000);
      // trocar bullets da navegação do slider
      $('.bullets span').removeClass('active-slider');
      $('.bullets span').eq(curSlide).addClass('active-slider')
      changeSlide()
    }, delay);
  }

  $('body').on('click','.bullets span',function () {
    var currentBullet = $(this);
    $('.banner-single').eq(curSlide).stop().fadeOut(2000);
    curSlide = currentBullet.index();
    $('.banner-single').eq(curSlide).stop().fadeIn(2000);
    $('.bullets span').removeClass('active-slider');
    currentBullet.addClass('active-slider');
  })
}) 
})();