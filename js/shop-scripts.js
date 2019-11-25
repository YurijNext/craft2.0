$(document).ready(function() {

	function toggleMenu() {
		$('.js-menu-open').toggleClass('hide');
		$('.js-address').toggleClass('hide');
		$('.js-menu-close').toggleClass('hide');
		$('.js-full-menu').toggleClass('header-menu-active');
	}

	$(window).scroll(function() {
		let scrolled = $(this).scrollTop();

		if(scrolled >= 70) {
			$('.main-header').addClass('header-narrow');
		} else {
			$('.main-header').removeClass('header-narrow');
		}
	})

	$('.js-menu-open').on('click', function(e) {
		e.preventDefault();
		toggleMenu();	
	});

	$('.js-menu-close').on('click', function(e) {
		e.preventDefault();
		toggleMenu();	
	});


	/** Slick sliders **/

	/** 1-st slider **/

	$('.shop-slider').slick({
		draggable: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		swipe: true,
		arrows: false,
		fade: true,
		asNavFor: '.logo-slider',
		focusOnSelect: true,
		cssEase: 'ease-in-out',
		infinite: false,
		swipeToSlide: true,
	});

	$('.logo-slider').slick({
		draggable: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		swipe: true,
		arrows: false,
		focusOnSelect: true,
		asNavFor: '.shop-slider',
		cssEase: 'ease-in-out',
		speed: 100,
		swipeToSlide: true,

	});

	function activeSlideAnimation() {
		$('.shop-slider-slide > :nth-child(1) , .shop-slider-slide > :nth-child(2)').removeClass('animated fadeInLeft fadeInRight');
		$('.shop-slider .slick-active').children('.shop-slider-text').addClass('animated fadeInLeft');
		$('.shop-slider .slick-active').children('.shop-slider-image').addClass('animated fadeInRight');
	}

	activeSlideAnimation();

	$('.shop-slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
		activeSlideAnimation();
	});


	/** Teach slider **/
	$('.teach-photo-slider').slick({
		draggable: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		swipe: true,
		focusOnSelect: true,
		infinite: false,
		dots: true,
		arrows: false,
		dotsClass: "rect-dots",
		swipeToSlide: true,
	});




  $('[data-fancybox="gallery"]').fancybox({
  	buttons: [
    //"share",
    //"fullScreen",
    //"download",
    "thumbs",
    "close"
  ],
	thumbs : {
		autoStart : true
	}
});


	/** Printers slider **/


	function resize() {
		if($(window).width() >= 900) {
			$('.shop-printers-slider').slick('unslick');
		} else {
			$('.shop-printers-slider').slick({
				draggable: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				swipe: true,
				arrows: false,
				focusOnSelect: true,
				cssEase: 'ease-in-out',
				infinite: false,
				arrows: true,
			});
		}
	}

	$(window).on('load', function() {
		resize();
	});
	$(window).on('resize', function() {
		resize();
	});


	/** Shop map init **/

	ymaps.ready(initMap);

	function initMap(){
  

	    if(window.innerWidth > 960){
                myMap = new ymaps.Map("js-map", {
                    center: [55.781772, 37.652445],
                    zoom: 13,
                    behaviors: ['scrollZoom', 'drag'],
                    controls: []
                });
            }else{
                myMap = new ymaps.Map("js-map", {
                    center: [55.781772, 37.652445],
                    zoom: 13,
                    behaviors: ['multiTouch'],
                    controls: []
                });
            }

        myMap.behaviors.disable('scrollZoom');    


	    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
	        '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
	    ),
	    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
	          hintContent: 'Mark',
	          balloonContent: 'Mark'
	        }, {
	          // Опции.
	          // Необходимо указать данный тип макета.
	          iconLayout: 'default#image',
	          // Своё изображение иконки метки.
	          iconImageHref: 'images/shop/png/cap.png',
	          // Размеры метки.
	          iconImageSize: [48, 64],

	        });

	      myMap.geoObjects.add(myPlacemark);
  	}

});
