;
(function($) {

  $(document).ready(function() {

    console.log('ready');


  });


  $(window).load(function() {

    console.log('loaded');
  });


  $(window).resize(function() {
    console.log('resized');

  });

  $(window).scroll(function(event) {
    console.log('scrollin');
  });

})(jQuery);
