jQuery(document).ready(function ($) {
	MachoThemes.init($);
});

jQuery(document).ready(function ($) {
	jQuery('.slick-responsive').slick({
		infinite: false,
		speed: 500,
		adaptiveHeight:true,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: 1000,
		arrows: true,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
});