<?php
/**
 * Navigation Menu structure.
 *
 * @package     SueLund
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace SueLund;

/**
 * Reposition the main navigation menu above the header.
 *
 * @since 1.0.0
 *
 * @return void
 */
function reposition_navigation_menu() {
	remove_action( 'genesis_after_header', 'genesis_do_nav' );
	add_action( 'genesis_before_header', 'genesis_do_nav', 5 );
}