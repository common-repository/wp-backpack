<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# eigenes Favicon im Frontend anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function frontend_favicon_own() {
    echo '<link href="' . esc_url( get_option( "wp_backpack_input_favicon_frontend_own" ) ) . '" rel="icon" type="image/x-icon">';
}
add_action( 'wp_head', 'frontend_favicon_own' );

?>