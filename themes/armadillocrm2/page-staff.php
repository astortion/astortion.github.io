<?php get_header(); 
/*
 * Template Name: Staff Template
*/
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
    
    <section class="pageHeader">
        <div class="row contain center">
            <h1><?php the_field('title'); ?></h1>
        </div>
    </section>
    
    <section class="pageContent">
        <div class="row contain center">
            <?php the_content(); ?>
        </div>
    </section>   
    
    <?php if( have_rows('staff') ) : ?>
    <section class="staffPosts posts container">
        <div class="row contain">
            <h2><?php the_field('sub-title'); ?></h2>
            <?php while ( have_rows('staff') ) : the_row(); 
                $post_object = get_sub_field('name');  
                $post = $post_object;
                setup_postdata( $post ); 
            ?>
                <div class="col col_33 staffInfo">
                    <?php 
                        the_post_thumbnail('staff', array(
                            'alt'	=> trim(strip_tags( $post->post_title )),
                            'title'	=> trim(strip_tags( $post->post_title )),
                        ));
                    ?>
                    <div class="details">
                        <div>
                            <h3><?php the_title(); ?></h3>
                            <h4><?php the_field('job_title'); ?></h4>
                        </div>
                        <?php if(get_field('linkedin_url')!=''): ?>
                        <a href="<?php the_field('linkedin_url'); ?>"><span class="fa fa-linkedin"></span></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
        </div>
    </section>
    <?php endif; ?>
</div>


<?php endwhile; endif; ?>
<?php get_footer(); ?>