<?php
/*
Template Name: Inner Pages
*/
?>

<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<div id="sidebar_reg">
    <?php if ( is_active_sidebar('inner_pages') ) { ?>
        <?php dynamic_sidebar('inner_pages'); ?>
    <?php } ?>
</div>

<?php get_footer(); ?>