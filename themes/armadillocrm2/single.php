<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="blog page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <section class="pageHeader">
        <div class="row contain center">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>
    
    <div class="container blogPageIntro">
        <section class="row contain">
            <div class="col">
                <h3><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?> <span>Head of Data &amp; Digital Operations</span></h3>
                <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <div>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </div>
			     <?php endif; ?>
                <time datetime="2018-07-11" class="post__pubdate"><?php the_time('F j, Y'); ?></time>
            </div>
        </section>
    </div>
    
    <div class="container blogPageDetails">
        <section class="row contain">
            
            <div class="col col_75 marg">
                <?php the_content(); ?>
            </div>
            
            <div class="col">
                <div class="panel">
                    <h4 class="sidebar_heading">Recent posts</h4>
                    
                    <ul class="u-nav side-menu">

                    <?php $the_query = new WP_Query( 'posts_per_page=10' ); ?>


                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>


                    <li class="side-menu__item">
                        <h5 class="heading-5"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                        <div class="post__meta">
                            <span class="post__author"><?php _e( '', 'html5blank' ); ?> <?php the_author_posts_link(); ?> </span>
                            <time datetime="2018-09-05" class="post__date"><?php the_time('F j, Y'); ?></time>
                        </div>
                    </li>

                    <?php 
                    endwhile;
                    wp_reset_postdata();
                    ?>
                    </ul>

                </div>
            </div>
            
        </section>
    </div>
    
    <?php edit_post_link(); // Always handy to have Edit Post Links available ?>


	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

</div>

<?php get_footer(); ?>
