window.onload = function () {

  const carregarElementos = {};

  var cont = 0;

  $(window).scroll(function () {
    carregarElementos["scroll"] = $(window).scrollTop();
    carregarElementos["heigthView"] = $(window).height();
    carregarElementos["positionVideos"] = $("#video01").offset();
    var distanciaDoElemento = carregarElementos["scroll"] - carregarElementos.positionVideos.top;

    if (distanciaDoElemento < carregarElementos["scroll"] && cont === 0) {
      cont = 1
      if ($("#video01").html() !== "") {
        $("#video01").html("<iframe class='lozad' src='https://www.youtube.com/embed/qVUfDkb9_7E'></iframe>")
        $("#video02").html("<iframe class='lozad'  src='https://www.youtube.com/embed/NR5WlmPUFiA'></iframe>")
      }
    }
  });
}