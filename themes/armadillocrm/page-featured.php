<?php get_header(); 
/*
 * Template Name: Featured Content
*/
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
    
    <section class="pageHeader">
        <div class="row contain center">
            <h1><?php the_field('title'); ?></h1>
        </div>
    </section>
    
    <?php include 'inc/featured-options.php'; ?>
    
</div>


<?php endwhile; endif; ?>
<?php get_footer(); ?>