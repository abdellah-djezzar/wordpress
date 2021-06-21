jQuery(document).ready(function($) {
  
  // Lets add some classes to theme elements
  $('article').addClass('clearfix');

  $(".nav-menu .fa-search").click(function(){
      $(".abdum_search_box").toggleClass('show_search');
  });

  (function($) {

   'use strict';
  		var nav = $( '#site-navigation' ), button, menu;
		if ( ! nav ) {
			return;
		}

		button = nav.find( '.menu-toggle' );
		if ( ! button ) {
			return;
		}

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle' ).on( 'click.opportune', function() {
			nav.toggleClass( 'toggled-on' );
		} );	
			
})(jQuery);

});