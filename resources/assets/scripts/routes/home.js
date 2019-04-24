export default {
  init() {
    // JavaScript to be fired on the home page
    jQuery('.slider').slick({
      draggable: true,
      arrows: true,
      dots: false,
      fade: true,
      speed: 900,
      infinite: true,
      prevArrow: jQuery('.slider__arrow--prev'),
      nextArrow: jQuery('.slider__arrow--next'),
    });

    jQuery('.opinion__list').slick({
      arrows: false,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true,
      appendDots: jQuery('.dots'),
      initialSlide: 1,
    });

  },
  finalize() {
    jQuery('.gallery__element a').simpleLightbox();
    // JavaScript to be fired on the home page, after the init JS
  },
};
