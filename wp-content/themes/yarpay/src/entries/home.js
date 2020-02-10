import '../scss/home.scss';
import { TweenMax, CSSPlugin, EasePack, TimelineMax , gsap } from 'gsap';
import ScrollMagic from 'scrollmagic';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';
import Swiper from 'swiper';
import 'swiper/css/swiper.min.css';

var mySwiperInit = new Swiper('.swiper-carousel .swiper-container', {
    speed: 400,
    pagination: {
        el: '.swiper-carousel .swiper-pagination',
        clickable: true
    },
    autoplay: 2500,
    slidesPerView: 1
});
