<?php
/*
Plugin Name: All in One SEO Pack Importer
Plugin URI: http://semperfiwebdesign.com/aioseopi
Description: Imports SEO data into All in One SEO Pack
Version: .1.5.2
Author: Michael Torbert
Author URI: http://michaeltorbert.com/
*/


add_action( 'admin_menu', 'aioseop_mrt_i' );

function aioseop_mrt_i() {

	add_options_page( 'All in One SEO Pack Importer', 'AIOSEOP Importer',
		'manage_options', 'aioseopi', 'aioseopi_mrt_options' );

}

function aioseopi_mrt_options() {

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	?>

    <div class="wrap">
        <h2>All in One SEO Pack Importer</h2>
        <div>
			<?php
			if ( ! empty( $_POST ) && $_POST['action'] === 'import_thesis'
			     && $nonce = $_POST['nonce-aioseopi-migrate']
			) {
				if ( ! wp_verify_nonce( $nonce, 'aioseopi-migrate-nonce' ) ) {
					die ( 'Security Check - If you receive this in error, log out and back in to WordPress' );
				} else {
					aioseopi_mrt_thesis_import();
				}
			}

			?>

        </div>

        <div style="float:left;background-color:white;padding: 10px 10px 10px 10px;margin-right:15px;border: 1px solid #ddd;">
            <h3>All in One SEO Pack Data</h3>
			<?php

			global $wpdb;
			$aioseoptitlecount
				= $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->postmeta WHERE meta_key='_aioseop_title';" );
			$aioseopdesccount
				= $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->postmeta WHERE meta_key='_aioseop_description';" );
			$aioseopkeywordscount
				= $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->postmeta WHERE meta_key='_aioseop_keywords';" );

			echo "<br />Posts with Titles: " . $aioseoptitlecount;
			echo "<br />Posts with Descriptions: " . $aioseopdesccount;
			echo "<br />Posts with Keywords: " . $aioseopkeywordscount;
			?>
        </div>

        <div style="float:left;background-color:white;padding: 10px 10px 10px 10px;margin-right:15px;border: 1px solid #ddd;">
            <h3>Thesis Data</h3>
			<?php
			global $wpdb;

			$thesistitlecount
				= $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->postmeta WHERE meta_key='thesis_title';" );
			$thesisdesccount
				= $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->postmeta WHERE meta_key='thesis_description';" );
			$thesiskeywordscount
				= $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->postmeta WHERE meta_key='thesis_keywords';" );

			echo "<br />Posts with Titles: " . $thesistitlecount;
			echo "<br />Posts with Descriptions: " . $thesisdesccount;
			echo "<br />Posts with Keywords: " . $thesiskeywordscount;
			?>
        </div>
        <div style="clear:both;"></div>
        <form method="post" action="" name="migrate-aioseopi">

            <input type='hidden' name='nonce-aioseopi-migrate'
                   value="<?php echo wp_create_nonce( 'aioseopi-migrate-nonce' ); ?>"/>
            <input type="hidden" name="action" value="import_thesis"/>

            <p class="submit">
                <input type="submit" class="button-primary"
                       value="<?php _e( 'Import Thesis SEO Data' ) ?>"/>
            </p>

        </form>
    </div>


	<?php

}


function aioseopi_mrt_thesis_import() {
	global $wpdb;
	$wpdb->query( "UPDATE $wpdb->postmeta SET meta_key='_aioseop_title' WHERE meta_key='thesis_title'" );
	$wpdb->query( "UPDATE $wpdb->postmeta SET meta_key='_aioseop_description' WHERE meta_key='thesis_description'" );
	$wpdb->query( "UPDATE $wpdb->postmeta SET meta_key='_aioseop_keywords' WHERE meta_key='thesis_keywords'" );
	echo "<br />SEO DATA UPDATED<br />";
}


?>
