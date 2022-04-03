<?php
/**
 * Theme Functions.
 *
 * @package Virilis
 */

if (!defined('VIRILIS_DIR_PATH')) {
  define('VIRILIS_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('VIRILIS_DIR_URI')) {
  define('VIRILIS_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once VIRILIS_DIR_PATH . '/inc/helpers/autoloader.php';

function virilis_get_theme_instance()
{
  \VIRILIS_THEME\Inc\VIRILIS_THEME::get_instance();
}

virilis_get_theme_instance();

/* //REMOVE?
 function virilis_enqueue_scripts()
{
}
add_action('wp_enqueue_scripts', 'virilis_enqueue_scripts'); */

?>
