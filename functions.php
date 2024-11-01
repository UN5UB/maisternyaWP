<?php

add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );

function add_scripts_and_styles() {

    wp_enqueue_style( 'fonts-google', 'https://fonts.googleapis.com' );
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&display=swa' );
		wp_enqueue_style( 'icon', get_template_directory_uri(). '/img/Icon.svg' );
    wp_enqueue_style( 'style-gallery', 'https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri(). '/css/style.min.css' );



    wp_enqueue_script( 'lightgalerry', 'https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js', array(), null, true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), null, true );
};
    

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );


add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Fixing the MIME type for SVG files.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// the mime type was reset, let's fix it
	// and also check user rights
	if( $dosvg ){

		// allow
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// forbid
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}



use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', 'Налаштування сайта' )
        ->add_tab( 'Галерея воріт', [
            Field::make( 'media_gallery', 'crb_media_gallery', 'Галерея воріт' )
				->set_type( array( 'image', 'video' ) )
        ] );
}

?>


