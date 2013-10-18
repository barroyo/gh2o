<?php
/*
Template Name: Register
*/
?>
<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>
<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<div id="sidebar_reg">
    <?php if ( is_active_sidebar('register') ) { ?>
        <?php dynamic_sidebar('register'); ?>
    <?php } ?>
</div>

<?php get_footer(); ?>