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
  },
  finalize() {
    jQuery('.gallery__element a').simpleLightbox();
    // JavaScript to be fired on the home page, after the init JS
  },
};
