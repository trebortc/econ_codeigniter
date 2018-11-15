$(function(){
    var scroll_anchor = $('#scroll-top');
    $( window ).scroll(function () {
        if ( $( window ).width() > 980 ) {
            if ( $(this).scrollTop() > 250 ) {
                scroll_anchor.fadeIn('fast');
                return;
            }
        }
        scroll_anchor.fadeOut('fast');
    });

    scroll_anchor.on( 'click', function ( event ) {
        event.preventDefault();
        $('html, body').animate( { scrollTop:0 }, 'slow' );
    });
});