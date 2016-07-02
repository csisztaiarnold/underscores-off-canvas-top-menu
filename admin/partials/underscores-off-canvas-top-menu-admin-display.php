<?php

/**http://offcanvas.local/
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.idevele.com
 * @since      1.0.0
 *
 * @package    Underscores_Off_Canvas_Top_Menu
 * @subpackage Underscores_Off_Canvas_Top_Menu/admin/partials
 */
?>
<div class="wrap">

    <h2><?php esc_attr_e( 'Overwrite the default styles of Underscores Off Canvas Menu', $this->plugin_name ); ?></h2>

    <p><?php esc_attr_e( 'Leave the field empty if you would like the default style to be unchanged.', $this->plugin_name ); ?></p>

    <form method="post" name="offcanvas_menu_options" action="options.php">
    
        <?php
            //Grab all options
            $options = get_option($this->plugin_name);

            // Cleanup
            $background_color = $options['background_color'];
            $font_size = $options['font_size'];
            $title_font_size = $options['title_font_size'];
            $title_font_color = $options['title_font_color'];
            $title_padding = $options['title_padding'];
            $font_color = $options['font_color'];
            $fullscreen = $options['fullscreen'];
            $menu_item_padding = $options['menu_item_padding'];
            $container_padding = $options['container_padding'];
            $click_on_html_close = $options['click_on_html_close'];
        ?>

        <?php
            settings_fields($this->plugin_name);
            do_settings_sections($this->plugin_name);
        ?>
    
        <h3>Global</h3>
        <hr />
        
        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-background-color"><strong><?php esc_attr_e( 'Menu background color', 'wp_admin_style' ); ?>:</strong></label><br />
            <input type="text" name="<?php echo $this->plugin_name; ?>[background_color]" id="<?php echo $this->plugin_name; ?>-background-color" value="<?php if(!empty($background_color)) echo $background_color; ?>" class="regular-text" /><br />
            <span class="description"><?php esc_attr_e( 'Examples: yellow, #123, #123456, rgb(255,0,255)...', $this->plugin_name ); ?></span><br />
        </fieldset>
        <br />
        
        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-container-padding"><strong><?php esc_attr_e( 'Menu container padding', 'wp_admin_style' ); ?>:</strong></label><br />
            <input type="text" name="<?php echo $this->plugin_name; ?>[container_padding]" id="<?php echo $this->plugin_name; ?>-background-color" value="<?php if(!empty($container_padding)) echo $container_padding; ?>" class="regular-text" /><br />
            <span class="description"><?php esc_attr_e( 'Examples: 12px, 12px 0, 12px 0 5px 0...', $this->plugin_name ); ?></span><br />
        </fieldset>
        <br />
        
        <fieldset>
            <input type="checkbox" value="1" name="<?php echo $this->plugin_name; ?>[fullscreen]" id="<?php echo $this->plugin_name; ?>-fullscreen" <?php checked( $fullscreen, '1', TRUE ); ?> /> <label for="<?php echo $this->plugin_name; ?>-fullscreen"><strong><?php esc_attr_e( 'Fill the whole screen with the menu if the screen is bigger vertically', $this->plugin_name ); ?></strong></label><br />
        </fieldset>
        <br />
        
        <fieldset>
            <input type="checkbox" value="1" name="<?php echo $this->plugin_name; ?>[click_on_html_close]" id="<?php echo $this->plugin_name; ?>-click-on-html-close" <?php checked( $click_on_html_close, '1', TRUE ); ?> /> <label for="<?php echo $this->plugin_name; ?>-click-on-html-close"><strong><?php esc_attr_e( 'Outside click/touchstart or scroll closes the menu', $this->plugin_name ); ?></strong> (<?php esc_attr_e( 'If you chose to fill the whole screen with the menu, then this option is pretty much useless', $this->plugin_name ); ?>)</label><br />
        </fieldset>
        

        
        <br />
        <br />
        <h3>Site branding</h3>
        <hr />

        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-title-font-size"><strong><?php esc_attr_e( 'Font size', 'wp_admin_style' ); ?>:</strong></label><br />
            <input type="text" name="<?php echo $this->plugin_name; ?>[title_font_size]" id="<?php echo $this->plugin_name; ?>-title-font-size" value="<?php if(!empty($title_font_size)) echo $title_font_size; ?>" class="regular-text" /><br />
            <span class="description"><?php esc_attr_e( 'Examples: 12px, 12em, medium, 50%...', $this->plugin_name ); ?></span><br />
        </fieldset>
        <br />
        
        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-title-font-color"><strong><?php esc_attr_e( 'Font color', 'wp_admin_style' ); ?>:</strong></label><br />
            <input type="text" name="<?php echo $this->plugin_name; ?>[title_font_color]" id="<?php echo $this->plugin_name; ?>-title-font-color" value="<?php if(!empty($title_font_color)) echo $title_font_color; ?>" class="regular-text" /><br />
            <span class="description"><?php esc_attr_e( 'Examples: yellow, #123, #123456, rgb(255,0,255)...', $this->plugin_name ); ?></span><br />
        </fieldset>
        <br />
        
        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-title-padding"><strong><?php esc_attr_e( 'Padding', 'wp_admin_style' ); ?>:</strong></label><br />
            <input type="text" name="<?php echo $this->plugin_name; ?>[title_padding]" id="<?php echo $this->plugin_name; ?>-title-padding" value="<?php if(!empty($title_padding)) echo $title_padding; ?>" class="regular-text" /><br />
            <span class="description"><?php esc_attr_e( 'Examples: 12px, 12px 0, 12px 0 5px 0...', $this->plugin_name ); ?></span><br />
        </fieldset>
        
        <br />
        <br />
        <h3>Dropdown</h3>
        <hr />
        
        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-font-size"><strong><?php esc_attr_e( 'Menu item font size', 'wp_admin_style' ); ?>:</strong></label><br />
            <input type="text" name="<?php echo $this->plugin_name; ?>[font_size]" id="<?php echo $this->plugin_name; ?>-font-size" value="<?php if(!empty($font_size)) echo $font_size; ?>" class="regular-text" /><br />
            <span class="description"><?php esc_attr_e( 'Examples: 12px, 12em, medium, 50%...', $this->plugin_name ); ?></span><br />
        </fieldset>
        <br />

        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-font-color"><strong><?php esc_attr_e( 'Menu item font color', $this->plugin_name ); ?>:</strong></label><br />
            <input type="text" name="<?php echo $this->plugin_name; ?>[font_color]" id="<?php echo $this->plugin_name; ?>-font-color" value="<?php if(!empty($font_color)) echo $font_color; ?>" class="regular-text" /><br />
            <span class="description"><?php esc_attr_e( 'Examples: yellow, #123, #123456, rgb(255,0,255)...', $this->plugin_name ); ?></span><br />
        </fieldset>
        <br />

        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-menu-item-padding"><strong><?php esc_attr_e( 'Menu item padding', $this->plugin_name ); ?>:</strong></label><br />
            <input type="text" name="<?php echo $this->plugin_name; ?>[menu_item_padding]" id="<?php echo $this->plugin_name; ?>-menu-item-padding" value="<?php if(!empty($menu_item_padding)) echo $menu_item_padding; ?>" class="regular-text" /><br />
            <span class="description"><?php esc_attr_e( 'Examples: 12px, 12px 0, 12px 0 5px 0...', $this->plugin_name ); ?></span><br />
        </fieldset>
        <br />


        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>
        
    </form>

</div>