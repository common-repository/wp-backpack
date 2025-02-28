<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# eigener Login Screen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# Logo und Hintergrund
function ck_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo esc_url( get_option( 'wp_backpack_login_own_logo' ) ); ?>);
            padding-bottom: 30px;
					  background-color: #ffffff;
					}
				.login {
	  				background-color: #ffffff;
        	}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'ck_login_logo' );

# Link des Logos
function ck_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'ck_login_logo_url' );

# Titel des Logos
function ck_login_logo_url_title() {
    return 'Logo';
}
add_filter( 'login_headertext', 'ck_login_logo_url_title' );

# Login Header
function ck_login_header() {
    echo '<div style="text-align:center; margin:-50px 0px 15px 0px; padding:0px 0px 0px 0px; line-height:25px; font-size:20px;">';
    echo 'Willkommen bei'.'<br>';
    echo get_bloginfo('name');
    echo '</div>';
}
add_action( 'login_message', 'ck_login_header' );

# Login Footer
function ck_login_footer() {
    echo '<div style="text-align:center; margin:15px 0px 0px 0px;padding: 50px 0px 10px 0px; line-height:20px;">';
    $input = esc_html( get_option( 'wp_backpack_login_own_input' ) );
    echo wpautop( $input );
}
add_action( 'login_footer', 'ck_login_footer' );

?>