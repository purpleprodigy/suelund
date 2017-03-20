<?php
/**
 * Configure widget functionality
 *
 * @package     SueLund\Widgets
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace SueLund\Widgets;

add_action( 'genesis_setup', __NAMESPACE__ . '\setup', 15 );
/**
 * Setup the sidebars/widget areas.
 *
 * @since 1.0.0
 *
 * @return void
 */
function setup() {
	unregister_sidebar( 'sidebar' );
	unregister_sidebar( 'sidebar-alt' );
	add_filter( 'widget_text', 'do_shortcode' );

	register_widget_areas();
}

/**
 * Register the widget areas enabled by default in Utility.
 *
 * @since  1.0.0
 *
 * @return void
 */
function register_widget_areas() {

	$widget_areas = array(
		array(
			'id'          => 'social-menu',
			'name'        => __( 'Social Menu', CHILD_TEXT_DOMAIN ),
			'description' => __( 'This is the social navigation section.', CHILD_TEXT_DOMAIN ),
		),
		array(
			'id'          => 'front-page-1',
			'name'        => __( 'Front Page Hero', CHILD_TEXT_DOMAIN ),
			'description' => __( 'This is the top widget area on the front page.', CHILD_TEXT_DOMAIN ),
		),
		array(
			'id'          => 'front-page-2',
			'name'        => __( 'Front Page Gallery', CHILD_TEXT_DOMAIN ),
			'description' => __( 'This is the gallery widget area on the front page.', CHILD_TEXT_DOMAIN ),
		),
	);

	foreach ( $widget_areas as $widget_area ) {
		genesis_register_sidebar( $widget_area );
	}
}


