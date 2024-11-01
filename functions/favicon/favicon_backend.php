<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Standard Favicon im Backend anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function backend_favicon() {
    echo '<link href="' . plugins_url( '/wp-backpack/pictures/favicon.ico' ) . '" rel="icon" type="image/x-icon">';
}
add_action( 'admin_head', 'backend_favicon' );

?>