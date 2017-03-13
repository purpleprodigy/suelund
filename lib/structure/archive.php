<?php
/**
 * Archive HTML markup structure
 *
 * @package     SueLund
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace SueLund;

add_filter( 'genesis_sitemap_output', __NAMESPACE__ . '\replace_default_sitemap' );
/**
 * Replace the default site map with Genesis
 *
 * @param string
 *
 * @return string
 */

function replace_default_sitemap() {
	$sitemap = '<h2>Pages</h2>';
	$sitemap .= sprintf( '<ul>%s</ul>', wp_list_pages( 'title_li=&depth=1&echo=0' ) );
	$sitemap .= '<h2>Recent Posts</h2>';
	$sitemap .= sprintf( '<ul>%s</ul>', wp_get_archives( 'type=postbypost&limit=100&echo=0' ) );
	$sitemap .= '<h2>Monthly</h2>';
	$sitemap .= sprintf( '<ul>%s</ul>', wp_get_archives( 'type=monthly&echo=0' ) );
	return $sitemap;
}