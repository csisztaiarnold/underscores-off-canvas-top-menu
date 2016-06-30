<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.idevele.com
 * @since      1.0.0
 *
 * @package    Underscores_Off_Canvas_Top_Menu
 * @subpackage Underscores_Off_Canvas_Top_Menu/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Underscores_Off_Canvas_Top_Menu
 * @subpackage Underscores_Off_Canvas_Top_Menu/includes
 * @author     Arnold Csisztai <csisztai.arnold@gmail.com>
 */
class Underscores_Off_Canvas_Top_Menu_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'underscores-off-canvas-top-menu',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
