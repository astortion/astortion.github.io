<?php get_header(); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <section class="pageHeader">
                        <div class="row contain center">
                            <h1><?php the_field('title'); ?></h1>
                        </div>
                    </section>

                    <section class="pageContent" style="background-color:<?php the_field('intro_content_background_colour');?>">
                        <div class="row contain center">
                            <?php the_content(); ?>
                        </div>
                    </section>
                
                <?php comments_template( '', true ); // Remove if you don't want comments ?>

                <br class="clear">

                <?php edit_post_link(); ?>
                
			</div>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.' ); ?></h2>

			</article>
			<!--  /article -->

		<?php endif; ?>

<?php get_footer(); ?>
