<!-- JavaScripts
    ============================================= -->
<script src="js/jquery.js"></script>
<script src="js/plugins.min.js"></script>

<!-- Footer Scripts
    ============================================= -->
<script src="js/functions.js"></script>
<script>
    $(document).ready(changeHeaderColor);
    $(window).on('resize',changeHeaderColor);

    function changeHeaderColor(){
        if (jQuery(window).width() > 991.98) {
            jQuery( "#header" ).hover(
                function() {
                    if (!$(this).hasClass("sticky-header")) {
                        $( this ).addClass( "hover-light" ).removeClass( "dark" );
                        SEMICOLON.header.logo();
                    }
                    $( "#wrapper" ).addClass( "header-overlay" );
                }, function() {
                    if (!$(this).hasClass("sticky-header")) {
                        $( this ).removeClass( "hover-light" ).addClass( "dark" );
                        SEMICOLON.header.logo();
                    }
                    $( "#wrapper" ).removeClass( "header-overlay" );
                }
            );
        }
    };

    $(window).scroll(function() {
        if ($(document).scrollTop() > 2000 && $("#modal-subscribe").attr("displayed") === "false") {
            $('#modal-subscribe').modal('show');
            $("#modal-subscribe").attr("displayed", "true");
        }
    });

    jQuery('#modal-subscribe-form').on( 'formSubmitSuccess', function(){
        $("#modal-subscribe").addClass("fadeOutDown");
        setTimeout(function() { $('#modal-subscribe').modal('hide'); }, 400);
        $("#modal-subscribe").attr("displayed", "false");
    });
</script>
