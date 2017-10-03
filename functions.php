<?php 

// Theme support
function wpb_theme_setup(){

    // Thumbnails 'Image à la une'
    add_theme_support( 'post-thumbnails' );

    // Post Formats
    add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action('after_setup_theme', 'wpb_theme_setup');


function set_excerpt_length(){
     return 35; // longueur du tronquage en nombre de mots
}

add_filter ('excerpt_length', 'set_excerpt_length');


// Customizer Front Page
require get_template_directory().'/inc/customizer.php';

// Customizer About Us
require get_template_directory().'/inc/customizer-about.php';

// Customizer Services
require get_template_directory().'/inc/customizer-services.php';

// Customizer Clients
require get_template_directory().'/inc/customizer-clients.php';

// Customizer Contact
require get_template_directory().'/inc/customizer-contact.php';

// Customizer Footer
require get_template_directory().'/inc/customizer-footer.php';


