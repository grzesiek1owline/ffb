function stickyMenuSingle(scroll){
  let sliderH = jQuery('.section--single-header').height();
  if (scroll > sliderH){
    jQuery('header.header').addClass('sticky');
  }
  else {
    jQuery('header.header').removeClass('sticky');
  }
}

export default {
  init() {
    // JavaScript to be fired on all pages
      jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();
        stickyMenuSingle(scroll);
      });

      jQuery('.hamburger').click(function(){
        let menuContainer = jQuery('.menu__container');
        let menuList = jQuery('.menu__list').height();
        let windowH = jQuery(window).height();
    
        if(jQuery(this).hasClass('is-active')){
          jQuery(this).removeClass('is-active');
          menuContainer.css('left','-1000px');
        }
        else{
          jQuery(this).addClass('is-active');
          menuContainer.css('left','0');
          if (menuList > windowH){
            menuContainer.css('overflow-y','scroll');
          }
        }
      });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    if(jQuery('ul.flags').length){
      jQuery('button.lang').click(function(){
        jQuery('button.lang').removeClass('active');
        jQuery(this).addClass('active');
        let id = jQuery(this).data('target');
        jQuery('.lang__wrapper').hide(300);
        jQuery('#' + id).show(300);
      });
    }
  },
};
