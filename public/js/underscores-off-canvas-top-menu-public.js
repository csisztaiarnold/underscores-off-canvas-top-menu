(function($) {
    
    $(document).ready(function() {
        
        function isMobileWidth() {
            return $('#mobile-indicator').is(':visible');
        }

		// Wrap the header with the .container.masthead-container classes
		$('#masthead').wrap('<div class="container masthead-container"></div>');
		$('.masthead-container').prepend('<div id="mobile-indicator"></div>');
        
        // Remove text from the menu toggle button and replace it with a glyphicon
        $('.menu-toggle').empty();
        $('.menu-toggle').html('<span class="glyphicon glyphicon-menu-hamburger"></span>');

        // Whatever needs to be triggered both when the document is ready as well as on resize
        function initAndResize(){
            
            $('#primary-menu').css('top',$('.masthead-container').outerHeight());
            $('#content').css('margin-top',$('.masthead-container').outerHeight());
            $('#site-navigation ul').css('max-height',$(window).height());
           
        }
        
        initAndResize();
        
        $(window).resize(function() {

            if(isMobileWidth())
            {
                initAndResize();
            }
            else
            {
                $('#primary-menu').show();
            }
            
        });
        
        
        // Toggle the menu-toggle button's active state and append a smooth animation on the primary menu's display
        $('.menu-toggle').on('click',function(){
            
            $('#primary-menu').slideToggle({ direction: "down" }, "fast");
            
            if($(this).hasClass('active'))
            {
                $(this).removeClass('active');
            }
            else
            {
                $(this).addClass('active');    
            }
            
        });

    });
    
})( jQuery );