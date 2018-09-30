<?php get_header(); ?>


		<!-- section -->
		<section class="blog">
            <div class="container" style="flex-direction: column;">
                <div class="pageHeader"><h1>Our thoughts</h1></div>
                <div class="latestBlogs">
                    <?php get_template_part('loop'); ?>

                    <?php get_template_part('pagination'); ?>
                </div>
            </div>
		</section>
		<!-- /section -->


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
