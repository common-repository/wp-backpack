<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# IP-Adresse der zukünftigen Kommentatoren anonymisieren
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function replace_comment_ip() {
   return "127.0.0.1";
}
add_filter( 'pre_comment_user_ip', 'replace_comment_ip', 50 );

?>
