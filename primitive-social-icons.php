<?php
/**
 * Plugin Name: Primitive Social Icons
 * Plugin URI: https://github.com/manuel90
 * Description: Plugin for social icons
 * Version: 1.0
 * Author: Manuel
 * Author URI: https://github.com/manuel90/primitive-social-icons/
 */
if(!class_exists('PrimitiveSocialIcons')) {
    class PrimitiveSocialIcons {
        function __construct() {
            add_shortcode('primitive-social-icons', array($this,'renderShortCode'));
        }
        function renderShortCode($attrs) {
            
        }
        
        function renderIcons($id_icons) {
            
        }
    }
    $GLOBALS['pSocialIcons'] = new PrimitiveSocialIcons();
}
?>
