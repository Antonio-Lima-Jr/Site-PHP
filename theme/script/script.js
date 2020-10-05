(() => { const INCLUDE_PATH = $('base').attr('base')
	// ---------------------------Header

var toogleCount = false
$('.iconMenu').click(() => {
	toogleCount = !toogleCount
	toogle()
});
function toogle() {
	if (window.innerWidth < 850) {
		if (toogleCount) {
			$('.toogleMenu').css('display', 'block')
			$('.toogleMenu').css('animation-name', 'toogleIn')
		}
		if (!toogleCount) {
			$('.toogleMenu').css('animation-name', 'toogleOut')
		}
	}
	if (window.innerWidth > 850) {
		$('.toogleMenu').css('display', 'none')
	}
}

$(document).ready(function () {
	function detectarScroll() {
		setTimeout(() => {
			const cont = $(window).scrollTop();
			if (cont > 50) {
				$('header').css("position", "fixed").css("top", "0px")
				$('header .layout').css("height", "60px");
				$('header .logo img').css("height", "40px");
				$('header .logo').css("height", "40px");
				$('.toogleMenu').css('top', '60px');
				detectarScroll();
			} else {
				$('header').css("position", "relative");
				$('header .layout').css("height", "80px");
				$('header .logo img').css("height", "60px");
				$('header .logo').css("height", "60px");
				$('.toogleMenu').css('top', 'initial')
				detectarScroll();
			};
		}, 100)
	};
	detectarScroll();

});

})();

