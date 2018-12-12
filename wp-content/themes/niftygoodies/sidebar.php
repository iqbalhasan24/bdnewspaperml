<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package niftygoodies
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="sidebar" class="col-md-4 col-sm-4">
  <article>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </article>
</aside>
