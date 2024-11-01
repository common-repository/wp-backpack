<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Related Posts auf bestimmten Seiten entfernen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function jetpackme_no_related_posts( $options ) {
    $ids = esc_html( get_option( 'wp_backpack_related_posts_seiten_number' ) );
    if ( ! is_array( $ids ) )
      $ids = explode( ',', $ids );
    if ( is_single( $ids ) ) {
      $options['enabled'] = false;
    }
    return $options;
}
add_filter( 'jetpack_relatedposts_filter_options', 'jetpackme_no_related_posts' );

?>