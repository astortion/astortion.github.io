<?php get_header(); ?>

		<section>

			<h1><?php _e( 'Archives' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>

<?php get_footer(); ?>
