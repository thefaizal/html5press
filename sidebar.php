<div id="sidebar" class="grid_4 omega">
<?php
if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
<?php
	dynamic_sidebar( 'right-sidebar' ); ?>
<?php
else:
?>
<aside class="widget">
<?php get_search_form(); ?>
</aside>

<aside class="widget">
	<h3><?php _e( 'Archives','html5press' ); ?></h3>
	<ul>
		<?php wp_get_archives( array('type' => 'monthly') ); ?>
	</ul>
</aside>

<aside class="widget">
	<h3><?php _e( 'Categories','html5press' ); ?></h3>
	<ul>
		<?php wp_list_categories( array('title_li' => false,'depth' => '-1') ); ?>
	</ul>
</aside>

<aside class="widget">
	<h3><?php _e( 'Meta','html5press' ); ?></h3>
	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<?php wp_meta(); ?>
	</ul>
</aside>
<?php endif; ?>
</div> <!-- end sidebar -->
 </div> <!-- end content -->
