<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Standard Favicon im Frontend anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function frontend_favicon() {
    echo '<link href="' . plugins_url( '/wp-backpack/pictures/favicon.ico') . '" rel="icon" type="image/x-icon">';
}
add_action( 'wp_head', 'frontend_favicon' );

?>