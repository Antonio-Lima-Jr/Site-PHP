(() => {
// -------------------------------HOME
const home = document.getElementById('perspectiva')

home.onmousemove = function (e) {
  x = e.clientX, y = e.pageY;
  limite = 10;

  var ww = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var wh = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

  rotx = y * 100 / wh;
  rotx = 180 * rotx / 100;
  rotx = rotx - 90;
  rotx *= -1;

  roty = x * 100 / ww;
  roty = 180 * roty / 100;
  roty = roty - 90;

  document.getElementById("distorcao").style.transform = `rotateX(${rotx * limite / 100}deg) rotateY(${roty * limite / 100}deg) translateZ(0)`;
};

})();
