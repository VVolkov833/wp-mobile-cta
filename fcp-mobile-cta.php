<?php

/*
Plugin Name: FCP Mobile CTA
Description: Add a CTA button or sliding-out contacts to mobile screens
Version: 1.0.2
Requires at least: 4.7
Requires PHP: 5.2.4
Author: Firmcatalyst, Vadim Volkov
Author URI: https://firmcatalyst.com
License: Copyright (c) 2020 VVolkov833
License URI: LICENSE
Text Domain: fcp-mobile-cta
Domain Path: languages
*/

add_action( 'wp_footer', function() {
?>
    <script>
        (function() {
            var a = setInterval( function() {
                if ( document.readyState !== "complete" && document.readyState !== "interactive" ) {
                    return;
                }
                if ( typeof window.jQuery === 'undefined' ) {
                    return;
                }
                clearInterval( a );

                jQuery.ajax({
                    url: '<?php echo plugin_dir_url(__FILE__) ?>result.html',
                    cache: false,
                    success: function( data ) {
                        jQuery( 'body' ).append( data );
                    }
                });

            }, 500 );
        })();
        
    </script>
<?php
});

