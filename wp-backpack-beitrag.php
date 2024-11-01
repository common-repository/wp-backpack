<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Tab 4 Ähnliche Beiträge
Author: Christoph Kleinschmidt
Author URI: https://www.christophkleinschmidt.de

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- Plugin Install Link -->
<?php
$plugin_name_1 = 'jetpack';
$install_link_1 = '<a href="' . esc_url( network_admin_url( 'plugin-install.php?tab=plugin-information&plugin=' . $plugin_name_1 . '&TB_iframe=true&width=772&height=772' ) ) . '" class="button thickbox" title="WordPress Plugin Jetpack">Jetpack installieren</a>';
?>

<div class="wrap">
	<div id="icon-options-general" class="icon32">
	<br>
</div>
<h2><?php echo '<img src="' . plugins_url( '/wp-backpack/pictures/menu_icon.png' ) . '"> ';?>WP Backpack</h2>
<div style="display:block; text-align:left; float:left;">von Christoph Kleinschmidt, Tel: 017623330719, Mail: <a href='mailto:mail@christophkleinschmidt.de' target='_blank'>mail@christophkleinschmidt.de</a>, Web: <a href='http://www.christophkleinschmidt.de' target='_blank'>www.christophkleinschmidt.de</a></div>
<div style="display:block; text-align:right;">WP Backpack Version <?php echo WP_Backpack_Version; ?></div>
<hr>
<h2 class="nav-tab-wrapper">
	<a href="/wp-admin/admin.php?page=informationen" class="nav-tab">Informationen</a>
    <a href="/wp-admin/admin.php?page=optik" class="nav-tab">Optik</a>
	<a href="/wp-admin/admin.php?page=technik" class="nav-tab">Technik</a>
	<a href="/wp-admin/admin.php?page=beitrag" class="nav-tab nav-tab-active">Ähnliche Beiträge</a>
	<a href="/wp-admin/admin.php?page=tipps" class="nav-tab">WP Plugin Tipps</a>
</h2>	
<h3 style="font-style:italic;">
	Bitte aktivieren oder deaktivieren Sie Ihre Einstellungen und speichern Sie diese anschließend.
	Hilfe finden Sie in dieser <a href='https://christophkleinschmidt.de/wordpress-plugin-wp-backpack/' target='_blank'>Dokumentation</a>.<br>
	Für die Nutzung dieser Funktionen wird das kostenfreie WordPress-Plugin <a href='https://wordpress.org/plugins/jetpack/' target='_blank'>Jetpack</a> mit der aktivierten Funktion <a href='http://jetpack.me/support/related-posts/' target='_blank'>Related Posts</a> benötigt.<br>
	<br>
	<?php echo $install_link_1; ?>
	</h3>
<form method="post" action="options.php">
<?php settings_fields( 'wp_backpack_group3' ); ?>
	<table class="form-table">
		<tr valign="top">
			<th scope="row">
				Anzahl der ähnlichen Beiträge unter einem Artikel
			</th>
			<td>
				<input type="checkbox" name="wp_backpack_related_posts_anzahl" value="1" <?php  if(get_option( 'wp_backpack_related_posts_anzahl' ) == 1) echo 'checked="checked"'; ?>"/>
				<span class="description"><?php _e("die Anzahl der ähnlichen Beiträge unter einem Artikel bestimmen (benötigt Jetpack Modul 'Ähnliche Beiträge')"); ?>
				<br>
				<br>
				Bitte geben Sie hier die gewünschte Anzahl der ähnlichen Beiträge unter einem Artikel an: <input size="1" type="text" name="wp_backpack_related_posts_anzahl_number"	value="<?php echo get_option( 'wp_backpack_related_posts_anzahl_number' ); ?>" /> z. Bsp. 9<br>	   
				</span>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Ähnliche Beiträge auf bestimmten Seiten ausblenden 
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_related_posts_seiten" value="1" <?php  if(get_option( 'wp_backpack_related_posts_seiten' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Ähnliche Beiträge auf bestimmten Seiten nicht anzeigen (benötigt Jetpack Modul 'Ähnliche Beiträge')"); ?>
					<br>
					<br>
					Bitte geben Sie hier die ID´s der gewünschten Seiten kommagetrennt an, unter denen keine ähnlichen Beiträge angezeigt werden sollen: 
					<br>
					<br>
					<textarea rows="10" cols="61" name="wp_backpack_related_posts_seiten_number" id="wp_backpack_related_posts_seiten_number" placeholder="Bitte geben Sie hier Ihre gewünschten ID´s ein"><?php echo get_option( 'wp_backpack_related_posts_seiten_number' ); ?></textarea> z. Bsp. 7931, 6889, 6714, etc.
					</span>
				</td>
		</tr>
		</table>
	<p class="submit">
		<input type="submit" class="button-primary" value="Einstellungen speichern" />
	</p>
</form>
</div>