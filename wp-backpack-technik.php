<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Tab 3 Technik
Author: Christoph Kleinschmidt
Author URI: https://www.christophkleinschmidt.de

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

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
	<a href="/wp-admin/admin.php?page=technik" class="nav-tab nav-tab-active">Technik</a>
	<a href="/wp-admin/admin.php?page=beitrag" class="nav-tab">Ähnliche Beiträge</a>
	<a href="/wp-admin/admin.php?page=tipps" class="nav-tab">WP Plugin Tipps</a>
</h2>	
<h3 style="font-style:italic;">
	Bitte aktivieren oder deaktivieren Sie Ihre Einstellungen und speichern Sie diese anschließend.
	Hilfe finden Sie in dieser <a href='https://christophkleinschmidt.de/wordpress-plugin-wp-backpack/' target='_blank'>Dokumentation</a>.
</h3>	
<form method="post" action="options.php">
<?php settings_fields( 'wp_backpack_group2' ); ?>
	<table class="form-table">
		<tr valign="top">
			<th scope="row">
				Bestätigungsmeldung Beitrag
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_confirm" value="1" <?php  if( get_option( 'wp_backpack_confirm' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("zeigt eine Bestätigungsabfrage vor der Veröffentlichung eines Beitrages"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				RSS Feed
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_rss" value="1" <?php  if( get_option( 'wp_backpack_rss' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("RSS Feed mit Thumbnail für RSS-Plattformen (feedly, etc.) verteilen"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				WordPress-Shortlink
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_shortlink"	value="1" <?php  if( get_option( 'wp_backpack_shortlink' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("alle WordPress-Shortlink-Anfragen werden voll aufgelöst - kein Umwandlung in Shortlink wp.link"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Update-Nachricht
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_update_nachricht" value="1" <?php  if( get_option( 'wp_backpack_update_nachricht' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Update-Nachricht bei allen Benutzern außer dem Administrator ausblenden"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Automatische WordPress-Updates abschalten
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_automatic_update" value="1" <?php  if( get_option( 'wp_backpack_automatic_update' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Die automatischen WordPress-Suberversion-Updates werden mit dieser Option abgeschaltet."); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Speichernutzung
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_speichernutzung" value="1" <?php  if( get_option( 'wp_backpack_speichernutzung' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Speichernutzung des Blogs im Dashboard und im Backend Footer anzeigen"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Blog-Beiträge Shortcode
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_letzte_beitraege" value="1" <?php  if( get_option( 'wp_backpack_letzte_beitraege' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("letzte Blog-Beiträge mit Shortcode an gewünschter Stelle anzeigen"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Installation ohne Passwort
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_password" value="1" <?php  if( get_option( 'wp_backpack_password' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Plugins, Themes, etc. ohne Passwort installieren"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Website Rankings
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_ranking" value="1" <?php  if( get_option( 'wp_backpack_ranking' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Anzeige der wichtigsten Website Rankings im Dashboard"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				IP-Adresse anonymisieren
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_ip" value="1" <?php  if( get_option( 'wp_backpack_ip' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("IP-Adresse der zukünftigen Kommentatoren anonymisieren"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Eigene Shortcodes
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_shortcodes" value="1" <?php  if( get_option( 'wp_backpack_shortcodes' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Mit dieser Funktion können eigene Shortcodes festegelegt und verwendet werden."); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie in diesen Feldern den jeweiligen gewünschten Shortcode-Inhalt ein:"); ?>
					<br>
					[shortcode1]: <input type="text" name="wp_backpack_input_shortcode_own1"	value="<?php echo get_option( 'wp_backpack_input_shortcode_own1' ); ?>" /> z. Bsp. Dies ist ein Beispiel.
					<br>
					[shortcode2]: <input type="text" name="wp_backpack_input_shortcode_own2"	value="<?php echo get_option( 'wp_backpack_input_shortcode_own2' ); ?>" /> z. Bsp. Dies ist ein Beispiel.
					<br>
					[shortcode3]: <input type="text" name="wp_backpack_input_shortcode_own3"	value="<?php echo get_option( 'wp_backpack_input_shortcode_own3' ); ?>" /> z. Bsp. Dies ist ein Beispiel.
					<br>
					[shortcode4]: <input type="text" name="wp_backpack_input_shortcode_own4"	value="<?php echo get_option( 'wp_backpack_input_shortcode_own4' ); ?>" /> z. Bsp. Dies ist ein Beispiel.
					<br>
					[shortcode5]: <input type="text" name="wp_backpack_input_shortcode_own5"	value="<?php echo get_option( 'wp_backpack_input_shortcode_own5' ); ?>" /> z. Bsp. Dies ist ein Beispiel.
				    </span>
				</td>
		</tr>
		</table>
	<p class="submit">
		<input type="submit" class="button-primary" value="Einstellungen speichern" />
	</p>
</form>
</div>