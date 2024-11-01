<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# eigene Kontaktdaten im Dashboard einbinden
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

add_action( 'wp_dashboard_setup', 'ck_dashboard_kontakt_own' );

function ck_dashboard_kontakt_own() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget( 'custom_kontakt_widget_own', 'Support Kontaktdaten', 'custom_dashboard_kontakt_own' );
}

function custom_dashboard_kontakt_own() {
	$input = ecs_html( get_option( 'wp_backpack_kontaktdaten_dashboard_input_own' ) );
	echo wpautop( $input );
}

?>