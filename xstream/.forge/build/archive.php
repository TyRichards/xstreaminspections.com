<?php get_header(); ?>
<div id="content" class="clear">
	<?php if ( have_posts() ) : ?>
		<h1 class="small-header"><?php _e( 'Blog Archives', 'xstream' ); ?></h1>
		<?php get_template_part( 'loop' ); ?>
	<?php else : ?>
		<p><?php _e( 'No posts found.', 'xstream' ); ?></p>
	<?php endif; ?>
</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>