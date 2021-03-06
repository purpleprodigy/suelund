<?php
/**
 * Add custom favicon.
 *
 * @package     SueLund
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace SueLund;

//* Add Favicon
function pp_favicon() {?>
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/apple-touch-icon.png">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/favicon.ico">
	<?php
}
add_action( 'wp_head', __NAMESPACE__ . '\pp_favicon' );
remove_action( 'wp_head', 'genesis_load_favicon' );