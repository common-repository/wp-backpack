<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# eigenes Favicon im Backend anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function backend_favicon_own() {
    echo '<link href="' . esc_url( get_option( "wp_backpack_input_favicon_backend_own" ) ) . '" rel="icon" type="image/x-icon">';
}
add_action( 'admin_head', 'backend_favicon_own' );

?>