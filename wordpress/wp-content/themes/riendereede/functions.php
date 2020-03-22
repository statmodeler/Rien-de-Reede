<?php
	add_theme_support( 'title-tag' );

	add_action( 'wp_enqueue_scripts', 'custom_load_contact_form_resources', 1 );
	function custom_load_contact_form_resources() {
		global $post;

		if ( isset( $post ) && is_singular() && has_shortcode( $post->post_content, 'contact-form-7' ) ) {
			return;
		}

		remove_action( 'wp_enqueue_scripts', 'wpcf7_do_enqueue_scripts' );
		remove_action( 'wp_enqueue_scripts', 'wpcf7_recaptcha_enqueue_scripts' );
	}
?>
