<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Tab 2 Optik
Author: Christoph Kleinschmidt
Author URI: https://www.christophkleinschmidt.de

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<div class="wrap">
	<div id="icon-options-general" class="icon32">
	<br>
</div>
<h2><?php echo '<img src="' . plugins_url( '/wp-backpack/pictures/menu_icon.png' ) . '"> ';?>WP Backpack</h2>
<div style="display:block; text-align:left; float:left;">von Christoph Kleinschmidt, Tel: 017623330719, Mail: <a href='mailto:mail@christophkleinschmidt.de' target='_blank'>mail@christophkleinschmidt.de</a>, Web: <a href='https://www.christophkleinschmidt.de' target='_blank'>www.christophkleinschmidt.de</a></div>
<div style="display:block; text-align:right;">WP Backpack Version <?php echo WP_Backpack_Version; ?></div>
<hr>
<h2 class="nav-tab-wrapper">
	<a href="/wp-admin/admin.php?page=informationen" class="nav-tab">Informationen</a>
    <a href="/wp-admin/admin.php?page=optik" class="nav-tab nav-tab-active">Optik</a>
	<a href="/wp-admin/admin.php?page=technik" class="nav-tab">Technik</a>
	<a href="/wp-admin/admin.php?page=beitrag" class="nav-tab">Ähnliche Beiträge</a>
	<a href="/wp-admin/admin.php?page=tipps" class="nav-tab">WP Plugin Tipps</a>
</h2>	
<h3 style="font-style:italic;">
	Bitte aktivieren oder deaktivieren Sie Ihre Einstellungen und speichern Sie diese anschließend.
	Hilfe finden Sie in dieser <a href='https://christophkleinschmidt.de/wordpress-plugin-wp-backpack/' target='_blank'>Dokumentation</a>.
</h3>	
<form method="post" action="options.php">
<?php settings_fields( 'wp_backpack_group1' ); ?>
	<table class="form-table">
		<tr valign="top">
			<th scope="row">
				Anzeige eines Favicons im Backend
			</th>
				<td scope="row">
					<input type="radio" name="wp_backpack_favicon_backend" value="0" <?php  if( get_option( 'wp_backpack_favicon_backend' ) == 0) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("mitgeliefertes Standard Favicon im Backend anzeigen lassen:"); ?></span>
					<?php echo '<img src="' . plugins_url( '/wp-backpack/pictures/favicon.ico' ) . '" > ';?>
					<br>
					<br>
					<input type="radio" name="wp_backpack_favicon_backend" value="1" <?php  if( get_option( 'wp_backpack_favicon_backend' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("eigenes Favicon im Backend anzeigen lassen"); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie in diesem Feld den Pfad zum gewünschten Favicon ein:"); ?>
					<input type="text" size="25" name="wp_backpack_input_favicon_backend_own"	value="<?php echo get_option( 'wp_backpack_input_favicon_backend_own' ); ?>" /> z. Bsp. http://www.example.com/favicon.ico
					<br>
					gespeichertes Favicon: <?php echo '<img src="' . get_option("wp_backpack_input_favicon_backend_own") . '" > ';?>
			    </span>
				</td>
		</tr>
        <tr valign="top">
			<th scope="row">
				Anzeige eines Favicons im Frontend
			</th>
				<td scope="row">
					<input type="radio" name="wp_backpack_favicon_frontend" value="0" <?php  if( get_option( 'wp_backpack_favicon_frontend' ) == 0) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("kein Favicon im Frontend anzeigen lassen:"); ?></span>
					<br>
					<br>
					<input type="radio" name="wp_backpack_favicon_frontend" value="1" <?php  if( get_option( 'wp_backpack_favicon_frontend' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("mitgeliefertes Standard Favicon im Frontend anzeigen lassen:"); ?></span>
                    <?php echo '<img src="' . plugins_url( '/wp-backpack/pictures/favicon.ico' ) . '" > ';?>
					<br>
					<br>
                    <input type="radio" name="wp_backpack_favicon_frontend" value="2" <?php  if( get_option( 'wp_backpack_favicon_frontend' ) == 2) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("eigenes Favicon im Frontend anzeigen lassen"); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie in diesem Feld den Pfad zum gewünschten Favicon ein:"); ?>
					<input type="text" size="25" name="wp_backpack_input_favicon_frontend_own"	value="<?php echo get_option( 'wp_backpack_input_favicon_frontend_own' ); ?>" /> z. Bsp. http://www.example.com/favicon.ico
					<br>
					gespeichertes Favicon: <?php echo '<img src="' . get_option("wp_backpack_input_favicon_frontend_own") . '" > ';?>
			    </span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				IDs
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_id" value="1" <?php  if( get_option( 'wp_backpack_id' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("IDs von Beiträgen und Seiten werden im Backend angezeigt"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Eigene Support Kontaktdaten im Dashboard
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_kontaktdaten_dashboard" value="1" <?php  if( get_option( 'wp_backpack_kontaktdaten_dashboard' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("eigene Support Kontaktdaten im Dashboard einbinden"); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie im folgenden Feld den gewünschten Text für das <strong>Dashboard</strong> ein:"); ?>
					<br>
					<br>
					<textarea rows="6" cols="100" wrap="hard" name="wp_backpack_kontaktdaten_dashboard_input_own" id="wp_backpack_kontaktdaten_dashboard_input_own" placeholder="Bitte geben Sie hier Ihren gewünschten Text ein"><?php echo get_option( 'wp_backpack_kontaktdaten_dashboard_input_own' ); ?></textarea>
					</span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Eigene Support Kontaktdaten im Footer
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_kontaktdaten_footer" value="1" <?php  if( get_option( 'wp_backpack_kontaktdaten_footer' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("eigene Support Kontaktdaten im Footer einbinden"); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie im folgenden Feld den gewünschten Text für den Backend <strong>Footer</strong> ein:"); ?>
					<br>
					<br>
					<textarea rows="1" cols="200" wrap="hard" name="wp_backpack_kontaktdaten_footer_input_own" id="wp_backpack_kontaktdaten_footer_input_own" placeholder="Bitte geben Sie hier Ihren gewünschten Text ein"><?php echo get_option( 'wp_backpack_kontaktdaten_footer_input_own' ); ?></textarea>
					<br>
					gespeicherte Kontaktdaten für den Backend Footer: <?php echo get_option( 'wp_backpack_kontaktdaten_footer_input_own' ); ?>
					</span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Eigenen Login Screen verwenden
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_login" value="1" <?php  if( get_option( 'wp_backpack_login' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("eigenen Login Screen verwenden"); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie in diesem Feld den Pfad zum gewünschten Logo im Kopfbereich ein:"); ?>
					<input type="text" name="wp_backpack_login_own_logo"	value="<?php echo get_option( 'wp_backpack_login_own_logo' ); ?>" /> z. Bsp. http://www.example.com/logo.jpg
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie im folgenden Feld den gewünschten Text für den Footerbereich des Login Screens ein:"); ?>
					<br>
					<br>
					<textarea rows="6" cols="100" wrap="hard" name="wp_backpack_login_own_input" id="wp_backpack_login_own_input" placeholder="Bitte geben Sie hier Ihren gewünschten Text ein"><?php echo get_option( 'wp_backpack_login_own_input' ); ?></textarea>
					</span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Menüpunkte ausblenden
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_menuepunkte" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("gewünschte Menüpunkte für bestimmte Benutzer ausblenden"); ?></span>
					<br>
					<br>
					<span class="description"><?php _e("Bitte geben Sie in den folgenden Feldern die E-Mail-Adressen der Benutzer ein:<br>"); ?>
					Email 1: <input type="text" name="wp_backpack_menuepunkte_input_email1"	value="<?php echo get_option( 'wp_backpack_menuepunkte_input_email1' ); ?>" /> z. Bsp. test@test.de<br>
					Email 2: <input type="text" name="wp_backpack_menuepunkte_input_email2"	value="<?php echo get_option( 'wp_backpack_menuepunkte_input_email2' ); ?>" /> z. Bsp. test@test.de<br>
					Email 3: <input type="text" name="wp_backpack_menuepunkte_input_email3"	value="<?php echo get_option( 'wp_backpack_menuepunkte_input_email3' ); ?>" /> z. Bsp. test@test.de<br>
					</span>
					<br>
					<span class="description"><?php _e("Bitte geben Sie die zu ausblendenden Menüpunkte hier an:<br>"); ?>
					<br>
					<input type="checkbox" name="wp_backpack_menuepunkte_check_dashboard" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_dashboard' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Dashboard"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_jetpack"	value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_jetpack' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Jetpack"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_tools" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_tools' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Werkzeuge"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_themes" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_themes' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Design"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_options_general"	value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_options_general' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Einstellungen"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_plugins"	value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_plugins' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Plugins"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_users" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_users' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Benutzer"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_edit_comments" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_edit_comments' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Kommentare"); ?></span><br>
					<input type="checkbox" name="wp_backpack_menuepunkte_check_upload" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_upload' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Medien"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_edit_page" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_edit_page' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Seiten"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_qa_link"	value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_qa_link' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("QLinks"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_us_portfolio" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_us_portfolio' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Portfolio"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_us_client" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_us_client' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Clients Logos"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_wpcf7" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_wpcf7' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Formulare"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_wpseo_dashboard"	value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_wpseo_dashboard' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("SEO"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_TweetOldPost" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_TweetOldPost' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Revive Old Post"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_itsec" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_itsec' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Security"); ?></span><br>
					<input type="checkbox" name="wp_backpack_menuepunkte_check_purechat_menu" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_purechat_menu' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Pure Chat"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_revslider" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_revslider' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Revolution Slider"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_einstellungen" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_einstellungen' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("WP Backpack"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_quick_admin_links" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_quick_admin_links' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Quick Admin Links"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_gadash_settings"	value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_gadash_settings' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Google Analytics"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_edit" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_edit' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("Beiträge"); ?></span>&nbsp;
					<input type="checkbox" name="wp_backpack_menuepunkte_check_wysija_campaigns" value="1" <?php  if( get_option( 'wp_backpack_menuepunkte_check_wysija_campaigns' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("MailPoet"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				WordPress Logo
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_wp_logo" value="1" <?php  if( get_option( 'wp_backpack_wp_logo' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("kleines WordPress Logo in Admin Bar im Backend entfernen"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				JPG-Komprimierung beim Bilder-Upload
			</th>
				<td>
					<input type="radio" name="wp_backpack_jpg_komprimierung" value="0" <?php  if( get_option( 'wp_backpack_jpg_komprimierung' ) == 0) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("WordPress-Standardeinstellung - JPG-Komprimierung beim Bilder-Upload auf 90% des Originals."); ?></span>
					<
					<br>
					<input type="radio" name="wp_backpack_jpg_komprimierung" value="1" <?php  if( get_option( 'wp_backpack_jpg_komprimierung' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("JPG-Komprimierung beim Bilder-Upload ausschalten. Bild im Original hochladen."); ?></span>
					<br>
					<br>
					<input type="radio" name="wp_backpack_jpg_komprimierung" value="2" <?php  if( get_option( 'wp_backpack_jpg_komprimierung' ) == 2) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("JPG-Komprimierung beim Bilder-Upload auf 75% des Originals."); ?></span>
					<br>
					<br>
					<input type="radio" name="wp_backpack_jpg_komprimierung" value="3" <?php  if( get_option( 'wp_backpack_jpg_komprimierung' ) == 3) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("JPG-Komprimierung beim Bilder-Upload auf 50% des Originals."); ?></span>
					<br>
					<br>
					<input type="radio" name="wp_backpack_jpg_komprimierung" value="4" <?php  if( get_option( 'wp_backpack_jpg_komprimierung' ) == 4) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("JPG-Komprimierung beim Bilder-Upload auf 25% des Originals."); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Begriffe umbenennen
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_umbenennen" value="1" <?php  if( get_option( 'wp_backpack_umbenennen' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("WordPress Menüpunkte und Begriffe seitenweit umbenennen"); ?></span>
				</td>
		</tr>
		<tr valign="top">
			<th scope="row">
				Werkzeugleiste für alle Nutzer ausblenden
			</th>
				<td>
					<input type="checkbox" name="wp_backpack_werkzeugleiste" value="1" <?php  if( get_option( 'wp_backpack_werkzeugleiste' ) == 1) echo 'checked="checked"'; ?>"/>
					<span class="description"><?php _e("WordPress Werkzeugleiste für alle Nutzer ausblenden"); ?></span>
				</td>
		</tr>
		</table>
	<p class="submit">
		<input type="submit" class="button-primary" value="Einstellungen speichern" />
	</p>
</form>
</div>