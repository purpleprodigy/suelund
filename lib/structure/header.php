<?php
/**
 * Header HTML markup structure.
 *
 * @package     SueLund
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace SueLund;

/**
 * Customize header.
 *
 * @since 1.0.0
 *
 * @return void
 */
function customize_header() {
	unregister_sidebar( 'header-right' );
}

//	//* Add social widget to primary navigation
	add_filter( 'genesis_nav_items', __NAMESPACE__ . '\add_social_icons_menu', 10, 2 );
	add_filter( 'wp_nav_menu_items', __NAMESPACE__ . '\add_social_icons_menu', 10, 2 );

	function add_social_icons_menu($menu, $args) {
		$args = (array)$args;
		if ( 'primary' !== $args['theme_location'] )
			return $menu;
		ob_start();
		genesis_widget_area('social-menu');
		$social = ob_get_clean();
		return $menu . $social;
}