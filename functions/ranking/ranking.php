<?php

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Anzeige der wichtigsten Website Rankings im Dashboard
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# Website Rankings im Dashboard
add_action( 'wp_dashboard_setup', 'ck_dashboard_ranking' );
function ck_dashboard_ranking() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget( 'custom_ranking_widget', 'Wichtige Website Rankings', 'custom_dashboard_ranking' );
}

function custom_dashboard_ranking() {
	$website_url = str_replace( array( "http://www.", "https://www.", "http://", "https://" ), "", get_site_url() );
	$plugins_url = plugins_url();

	echo "<table style='width:100%'>";
	# Alexa Ranking
	echo "<tr>";
	echo "<td>Alexa Ranking</td>";
    echo "<td style='text-align:center'><a href='http://www.alexa.com/siteinfo/" . $website_url . "' target='_blank'><img src='" . $plugins_url . "/wp-backpack/pictures/businessman277.png' alt='website grader' width='32px'/></a></td>";
    echo "</tr>";
	# versch. Rankings
	echo "<tr>";
	echo "<td>Website Rankings für " . $website_url . "</td>";
	echo "<td style='text-align:center'><a href='https://www.urltrends.com/rank/" . $website_url . "' target='_blank'><img src='" . $plugins_url . "/wp-backpack/pictures/businessman277.png' alt='website grader' width='32px'/></a></td>";
	echo "</tr>";
	# Semrush Ranking
	echo "<tr>";
	echo "<td>Semrush Rankings</td>";
	echo "<td style='text-align:center'><a href='https://de.semrush.com/de/info/" . $website_url . "' target='_blank'><img src='" . $plugins_url . "/wp-backpack/pictures/businessman277.png' alt='website grader' width='32px'/></a></td>";
	echo "</tr>";
	# Website Grader
	echo "<tr>";
	echo "<td>Google Pagespeed</td>";
	echo "<td style='text-align:center'><a href='https://developers.google.com/speed/pagespeed/insights/?url=" . $website_url . "' target='_blank'><img src='" . $plugins_url . "/wp-backpack/pictures/businessman277.png' alt='website grader' width='32px'/></a></td>";
	echo "</tr>";
	# Website Grader
	echo "<tr>";
	echo "<td>Website Grader</td>";
	echo "<td style='text-align:center'><a href='https://website.grader.com/results/" . $website_url . "' target='_blank'><img src='" . $plugins_url . "/wp-backpack/pictures/businessman277.png' alt='website grader' width='32px'/></a></td>";
	echo "</tr>";
	echo "</table>";
}
?>