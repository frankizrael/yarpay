// Import styles
import './scss/app.scss';

// Import scripts
import 'bootstrap/js/src/dropdown';
import TweenMax from "gsap/TweenMax";
import CSSPlugin from "gsap/CSSPlugin";
import TweenLite from "gsap/TweenLite";

$(window).scroll(function(){
	let hei = $(window).scrollTop();
	if (hei > 20) {
		$('header').addClass('header-active');
	} else {
		$('header').removeClass('header-active');
	}
});

$('.open_menu').on('click',function(){
	$('.menu-lad').addClass('open');
	$('.reset_close').addClass('open');
	$('.reset_imagen_background').addClass('open');
});

$('.reset_close').on('click',function(){
	$('.menu-lad').removeClass('open');
	$('.reset_close').removeClass('open');
	$('.reset_imagen_background').removeClass('open');
});

$('.menu-flex .menu-item-has-children').on('mouseenter',function(){
	let $this = $(this);
	let img = $this.find('.menu-image').attr('src');
	$('.menu-lad').addClass('active');
	$('.menu-flex .menu-item-has-children').removeClass('active');
	$('.reset_imagen_background').addClass('moved');
	$('.reset_imagen_background').attr('style','background-image:url('+img+');');
	setTimeout(function(){
		$('.reset_imagen_background').removeClass('moved');
	},500);
	$this.addClass('active');

});

$('.menu-flex .menu-item-has-children').on('mouseleave',function(){
	let img = $('.reset_imagen_background').attr('data');
	$('.menu-lad').removeClass('active');
	$('.menu-flex .menu-item-has-children').removeClass('active');
	$('.reset_imagen_background').addClass('moved');
	$('.reset_imagen_background').attr('style','background-image:url('+img+');');
	setTimeout(function(){
		$('.reset_imagen_background').removeClass('moved');
	},500);
});
$('.ModalLeft__tab_content__item').hide();
$('.ModalLeft__tab li').on('click',function(){
	let $this = $(this);
	let data = '#'+$this.attr('data');
	let redct = $this.attr('redirect');
	if (redct.length > 0) {
		window.location.href = redct;
	} else {
		$('.ModalLeft__tab_content__item').hide();
		$(data).show();
		$('.ModalLeft__tab li').removeClass('active');
		$this.addClass('active');
	}	
});
$('.openModalLeft').on('click',function(){
	let $this = $(this);
	let data = '#'+$this.attr('data');
	let datac = '.tab_'+$this.attr('data');
	$('.ModalLeft').addClass('active');
	$('.open_and_close').addClass('active');
	$('.ModalLeft__tab_content__item').hide();
	$(data).show();
	$('.ModalLeft__tab li').removeClass('active');
	$(datac).addClass('active');
});

$('.open_and_close').on('click',function(){
	$('.ModalLeft').removeClass('active');	
	$('.open_and_close').removeClass('active');
});

$('.ModalLeft__close').on('click',function(){
	$('.ModalLeft').removeClass('active');	
	$('.open_and_close').removeClass('active');
});