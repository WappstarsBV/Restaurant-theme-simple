// jQuery stuff below

(function($) {
    
    
    $( '.gallery-image' ).swipebox();

   $('#load-more a').on('click', (e) => {
       e.preventDefault();
       $(e.target).toggleClass('loading');
       console.log('works');
   });


})(jQuery);