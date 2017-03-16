<?php
/**
 * Footer HTML markup structure.
 *
 * @package     SueLund
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        https://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace SueLund;
add_filter( 'genesis_footer_creds_text', __NAMESPACE__ . '\pp_footer_creds_filter' );
/**
 * Customise  footer credits
 *
 * @since 1.0.0
 *
 * @param $creds
 *
 * @return string
 */
function pp_footer_creds_filter( $creds ) {
	$creds = '<p>Copyright [footer_copyright] <a href="https://suelund.com">Sue Lund - Paint!</a> &middot; <a href="/privacy/" rel="nofollow">Sitemap</a> &middot; <a href="/privacy/" rel="nofollow">Privacy</a> &middot; Website by <a href="http://www.purpleprodigy.com">Purple Prodigy</a></p>
			<div class="social-icons">
				<ul>
				<li><a href="https://www.facebook.com/sue.lund.16"><i class="fa fa-facebook"><span class="screen-reader-text">Like us on Facebook</span></i></a></li>
		</ul>
			</div>';
	return $creds;
}