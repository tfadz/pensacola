var pensacolaFunctions = (function($) {

  var init = function() {
    sliders();
    mobileMenu();
    tabs();
  },

  sliders = function() {

    var $heroslider = $('.hero-slider');
    
    $heroslider.slick({
      autoplay: true,
      autoplaySpeed: 9600,
      arrows: false,
      dots: true,
      centerMode: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      centerPadding: '0',
      cssEase: 'ease',
      speed: 1800,
      fade: true,
      infinite: true,
      pauseOnFocus: false,
      pauseOnHover: false
      
    });
  },
  
  mobileMenu = function() {
    $('.hamburger-box').click(function (e) {
      e.preventDefault();
      $(this).toggleClass('active');
      $(this).find('.hamburger').toggleClass('active');
      $('.nav-modal').toggleClass('active');
      $('.menu-mobile').toggleClass('show');
    });

    $('li.menu-item-has-children').click(function (e) {
      $(this).find('.sub-menu').toggle();
    });
  },
  
  tabs = function() {
  $('.vertical-tabs__tabs li:first-child a').trigger("click");
  
  if (window.matchMedia('(max-width: 1024px)').matches) {
    $('.vertical-tabs__content .tab-pane h4').click(function(event) {
      $(this).next().toggle();
    });
    $('.timeline-tabs__content .tab-pane h4').click(function(event) {
      $(this).next().toggle();
    });
  }

  }
  
  
  AOS.init({
  	  offset: 300,
  	  once: false,
  	  duration: 600,
  	  easing: 'ease-in-out',
  	  delay: 150,
  	  disable: 'mobile'
  	})

return {
  init:init
};

})(jQuery);

jQuery(document).ready(pensacolaFunctions.init );

