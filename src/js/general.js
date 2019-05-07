// jQuery stuff below

(function($) {
    
    
    $( '.gallery-image' ).swipebox();

   // Ajax load more news ///////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////////////////
	$(document).on('click', '#load-more-link', (event) => {
        event.preventDefault();
        
        //console.log('It works!');

		// variables
		const link = $('#load-more-link');
		const ajax_url = link.data('url');
		let page = link.data('page');
		let new_page = page+1;
        const posts = link.parent().parent().find('div.response-container');
        
        //console.log(page);

		link.addClass('loading');

		$.ajax({
			url: ajax_url,
			type: 'POST',
			data: {
				page: page,
				action: 'load_more_news'
			},
			error: ( response ) => {
				console.log('ERROR: ' + response);
			},
			success: ( response ) => {
                console.log(response);
                if( response == '' ) {
                    link.html('Alles geladen').addClass('no-more');
                } else {
                    link.data('page', new_page);
                    setTimeout(() => {
                        posts.append( response );
                        link.removeClass('loading');
                    }, 2000);
                }
			}
		});
	});
	/////////////////////////////////////////////////////////////////////////////
	// Ajax load more shop news //////////////////////////////////////////////////


	// Social networks share /////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////
    $("#sharing-is-caring").jsSocials({
        showCount: "inside",
        showLabel: false,
        shareIn: "popup",
        shares: [
        "email", 
        { share: "facebook", logo: "fa fa-facebook" }, 
        { share: "twitter", logo: "fa fa-twitter" }, 
        //{ share: "googleplus", logo: "fab fa-google" }, 
        // { share: "linkedin", logo: "fa fa-linkedin" },
        { share: "whatsapp", logo: "fa fa-whatsapp" },
        ]
    });
    // Social networks share end /////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////


})(jQuery);