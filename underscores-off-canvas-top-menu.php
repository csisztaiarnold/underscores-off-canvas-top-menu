<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.idevele.com
 * @since             1.0.0
 * @package           Underscores_Off_Canvas_Top_Menu
 *
 * @wordpress-plugin
 * Plugin Name:       Underscores Off-Canvas Top Menu
 * Plugin URI:        http://www.idevele.com/underscores-off-canvas-top-menu
 * Description:       Wraps Underscores WordPress starter theme's header and injects an off-canvas top menu for mobile view.
 * Version:           1.0.0
 * Author:            Arnold Csisztai
 * Author URI:        http://www.idevele.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       underscores-off-canvas-top-menu
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-underscores-off-canvas-top-menu-activator.php
 */
function activate_underscores_off_canvas_top_menu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-underscores-off-canvas-top-menu-activator.php';
	Underscores_Off_Canvas_Top_Menu_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-underscores-off-canvas-top-menu-deactivator.php
 */
function deactivate_underscores_off_canvas_top_menu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-underscores-off-canvas-top-menu-deactivator.php';
	Underscores_Off_Canvas_Top_Menu_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_underscores_off_canvas_top_menu' );
register_deactivation_hook( __FILE__, 'deactivate_underscores_off_canvas_top_menu' );

function enqueue_bootstrap() {
    // Enqueue Bootstrap
    wp_enqueue_style( 'underscores-off-canvas-top-menu-bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
    wp_enqueue_script( 'underscores-off-canvas-top-menu-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array(), '3.3.4', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );

// Hide admin bar
add_filter('show_admin_bar', '__return_false');

function add_additional_styles_to_view() {
    
    $options = get_option('underscores-off-canvas-top-menu');
    echo '<style>
    @media screen and (max-width: 599px) {';
    
    if(!empty($options['background_color'])) echo ' .container.masthead-container #masthead, .container.masthead-container #masthead #site-navigation ul { background-color: '.$options['background_color'].' } ';
    
    if(!empty($options['fullscreen'])) echo '.container.masthead-container #masthead #site-navigation ul { bottom:0; } ';
    
    if(!empty($options['font_color'])) echo '.container.masthead-container #masthead .site-branding h1 a, .container.masthead-container #masthead .site-branding p a, .glyphicon, .container.masthead-container #masthead #site-navigation ul li a { color: '.$options['font_color'].' } ';
    
    if(!empty($options['font_size'])) echo '.container.masthead-container #masthead #site-navigation ul li a { font-size: '.$options['font_size'].' } ';
    
    if(!empty($options['menu_item_padding'])) echo '.container.masthead-container #masthead #site-navigation ul li a { padding: '.$options['menu_item_padding'].' } ';

    if(!empty($options['title_font_size'])) echo 'h1.site-title, span.glyphicon { font-size: '.$options['title_font_size'].' !important; line-height: '.$options['title_font_size'].' !important;  } ';
    
    if(!empty($options['title_font_color'])) echo 'h1.site-title a, span.glyphicon { color: '.$options['title_font_color'].' !important; } ';
    
    if(!empty($options['title_padding'])) echo 'h1.site-title, .glyphicon { padding: '.$options['title_padding'].' !important;}';
    
    if(!empty($options['container_padding'])) echo '.container.masthead-container #masthead #site-navigation ul  { padding: '.$options['container_padding'].' !important;}';
    
    echo '}
    </style>';
    
    echo 
'<script>
(function($) {
    
    $(document).ready(function() {
    ';
    
    if(!empty($options['click_on_html_close'])) echo ' $(\'html\').on(\'touchstart click scroll\', function(e){ $(\'#primary-menu\').slideUp();  }); $(\'.masthead-container\').click(function(event){ event.stopPropagation(); });';

    echo '
    });
    
})( jQuery );

</script>';
}


add_action('wp_head', 'add_additional_styles_to_view');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-underscores-off-canvas-top-menu.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_underscores_off_canvas_top_menu() {

	$plugin = new Underscores_Off_Canvas_Top_Menu();
	$plugin->run();

}
run_underscores_off_canvas_top_menu();