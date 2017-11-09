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


// Text Editor

if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

class Text_Editor_Custom_Control extends WP_Customize_Control
{
    public $type = 'textarea';
    /**
    ** Render the content on the theme customizer page
    */
    public function render_content() { ?>
        <label>
          <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
          <?php
            $settings = array(
              'media_buttons' => false,
              'quicktags' => false
              );
            $this->filter_editor_setting_link();
            wp_editor($this->value(), $this->id, $settings );
          ?>
        </label>
    <?php
        do_action('admin_footer');
        do_action('admin_print_footer_scripts');
    }

    private function filter_editor_setting_link() {
        add_filter( 'the_editor', function( $output ) { return preg_replace( '/<textarea/', '<textarea ' . $this->get_link(), $output, 1 ); } );
    }
}

function editor_customizer_script() {
    wp_enqueue_script( 'wp-editor-customizer', get_template_directory_uri() . '/js/customizer-panel.js', array( 'jquery' ), rand(), true );
}
add_action( 'customize_controls_enqueue_scripts', 'editor_customizer_script' );




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


