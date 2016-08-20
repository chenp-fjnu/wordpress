<?php
/**
 * Gallery Sidebar
 *
 * Displays on the image page after clicking on a gallery image
 *
 * @package      responsive_mobile
 * @license      license.txt
 * @copyright    2014 CyberChimps Inc
 * @since        0.0.1
 *
 * Please do not edit this file. This file is part of the responsive_mobile Framework and all modifications
 * should be made in a child theme.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*
 * If the sidebar is empty, exit
 */
if ( ! is_active_sidebar( 'top-widget' ) ) {
	return;
}
?>

<?php responsive_mobile_widgets_before(); // above widgets container hook ?>
	<div id="top-widget" class="top-widget" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
		<?php responsive_mobile_widgets(); // above widgets hook ?>

			<?php dynamic_sidebar( 'top-widget' ); ?>

		<?php responsive_mobile_widgets_end(); // after widgets hook ?>
	</div><!-- end of #top-widget -->
<?php responsive_mobile_widgets_after(); // after widgets container hook ?>
