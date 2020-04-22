;(function ($) {

  $(document).ready(function(){



  });


  $(window).load(function(){


  });


  $(window).resize(function(){


  });

   var prev = 0;
   var $window = $(window);
   var nav = $('.scrollhide-nav');

  $(window).scroll(function (event) {
    var scrollTop = $window.scrollTop();
    nav.toggleClass('hidden', scrollTop > prev);
    prev = scrollTop;
  });

})(jQuery);
