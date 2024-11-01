<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# eigene Kontaktdaten im Footer einbinden
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function ck_backend_footer_own () {
    echo esc_html( get_option( 'wp_backpack_kontaktdaten_footer_input_own' ) );
} 
add_filter( 'admin_footer_text', 'ck_backend_footer_own' );

?>