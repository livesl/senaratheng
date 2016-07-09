
/*global $:false */
/*global window: false */

(function(){
  "use strict";


$(function ($) {


    $(window).load(function(){
    

        
        var $container = $('.grid-gallery');


        $container.isotope({
          // options
            itemSelector: '.project-item',
          layoutMode: 'masonry',
          transitionDuration:'0.8s'
        });


        $('.works-filter li a').click(function(){
        $('.works-filter li a').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.grid-gallery').isotope({ filter: selector });
              return false;
        });

        // window resize and layout regenerate
        $(window).resize(function() {
             $container.isotope({
              // options
                 itemSelector: '.project-item',
              layoutMode: 'masonry',
              transitionDuration:'0.8s'
            });

        });

    });

      
        
   
});
// $(function ($)  : ends

})();
//  JSHint wrapper $(function ($)  : ends







  

