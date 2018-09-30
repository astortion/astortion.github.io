<?php get_header(); ?>
<div class="blog">
<div class="container">
        <div class="row contain">
            <div class="col-1 blogTitle">
                <svg id="Layer_1" viewBox="0 0 300 264" style="opacity: 1;     height: 230px;"><desc>Created with Snap</desc><defs></defs><path d="M267.9 238.64a12.72 12.72 0 1 0 12.68 12.68 12.74 12.74 0 0 0-12.68-12.68m0 20.21a7.52 7.52 0 1 1 7.49-7.54 7.46 7.46 0 0 1-7.49 7.54" fill="#97cb5c" transform="matrix(1,0,0,1,0,0)" style="fill-opacity: 1;"></path><path d="M230.93 219.08a17.55 17.55 0 1 0 17.49 17.49 17.57 17.57 0 0 0-17.49-17.49m0 27.89a10.37 10.37 0 1 1 10.34-10.4A10.29 10.29 0 0 1 230.93 247" fill="#97cb5c" transform="matrix(1,0,0,1,0,0)" style="fill-opacity: 1;"></path><path d="M191.71 169.49a28 28 0 1 0 27.93 27.93 28.06 28.06 0 0 0-27.93-27.93m0 44.54a16.56 16.56 0 1 1 16.51-16.61A16.43 16.43 0 0 1 191.71 214" fill="#97cb5c" transform="matrix(1,0,0,1,0,0)" style="fill-opacity: 1;"></path><path d="M179.15 54.25a8.12 8.12 0 0 1 11.37-9.78 39.15 39.15 0 0 1 17.3 52.59 8.12 8.12 0 0 1-14.49-7.32A22.91 22.91 0 0 0 183.2 59a8.09 8.09 0 0 1-4.05-4.71M21.21 70.91a8.09 8.09 0 0 0 2.34-5.75 22.91 22.91 0 0 1 22.76-23.07 8.12 8.12 0 0 0-.1-16.23 39.15 39.15 0 0 0-38.9 39.4 8.12 8.12 0 0 0 13.89 5.65m43.66-44.5a8.09 8.09 0 0 0 5.62-2.65 22.91 22.91 0 0 1 32.37-1.58 8.12 8.12 0 0 0 10.91-12 39.15 39.15 0 0 0-55.3 2.7 8.12 8.12 0 0 0 6.41 13.56m63.42 2.86a8.09 8.09 0 0 0 6.18-.64 22.91 22.91 0 0 1 31.06 9.24 8.12 8.12 0 0 0 14.27-7.73 39.15 39.15 0 0 0-53.06-15.79 8.12 8.12 0 0 0 1.55 14.92m62.34 81.58a8.09 8.09 0 0 0-1 6.13 22.91 22.91 0 0 1-17.18 27.48 8.12 8.12 0 0 0 3.65 15.82 39.15 39.15 0 0 0 29.35-46.94 8.12 8.12 0 0 0-14.79-2.48m-39.88 45.6a8.09 8.09 0 0 0-5.65 2.57 22.91 22.91 0 0 1-32.39 1.12A8.12 8.12 0 0 0 101.62 172a39.15 39.15 0 0 0 55.38-1.9 8.12 8.12 0 0 0-6.22-13.65m-64.95-3.61a8.09 8.09 0 0 0-6.19.5 22.91 22.91 0 0 1-30.84-9.93 8.12 8.12 0 0 0-14.44 7.4 39.15 39.15 0 0 0 52.69 17 8.12 8.12 0 0 0-1.21-14.95M30.62 129a8.09 8.09 0 0 0-3.62-5 22.91 22.91 0 0 1-7.28-31.58A8.12 8.12 0 0 0 6 83.81a39.15 39.15 0 0 0 12.44 53.95A8.12 8.12 0 0 0 30.62 129" fill="#7838fb" transform="matrix(1,0,0,1,0,0)" style="fill-opacity: 1;"></path></svg>
                <h1><?php the_field('title', get_option('page_for_posts')); ?></h1>
            </div>
        </div>
    </div>
    
    <div class="container featured">
        <section class="row contain">
            <div class="col">
                <article class="row">
                   <?php query_posts('post_type=post&post_status=publish&posts_per_page=1'); ?>
                   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="postImg col col_50">
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('blog'); ?>
                        </a>
                    </div>
                    <div class="postDetails col">
                        <div class="postContent">
                            <h3><a class="postLink" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            <p><?php the_excerpt();?></p>
                            <a class="viewArticle" href="<?php the_permalink();?>">Read more...</a>
                        </div>
                        <div class="postMeta">
                            <?php
                                echo get_avatar( get_the_author_meta(), '70' );
                            ?>
                            <div class="postMetaDetails">
                                <span class="postAuthor"><?php the_author(); ?></span>
                                <time class="postDate"><?php the_date(); ?></time>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                <?php  wp_reset_query(); ?>
                </article>
            </div>
        </section>
    </div>
    
    <div class="container posts">
            <section class="row contain">
                <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&offset=1'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col col_50 marg">
                    <article class="post row">
                        <div class="postImg col col_50">
                            <a href="<?php the_permalink();?>">
                                <?php the_post_thumbnail('blog'); ?>
                            </a>
                        </div>
                        <div class="postDetails col">
                            <div class="post__content">
                                <h3><a class="postLink" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <p><?php 
                                    $excerpt = get_the_excerpt();
                                    $excerpt = substr( $excerpt , 0, 100); 
                                    echo $excerpt;
                                    ?>
                                </p>
                                <a class="viewArticle" href="<?php the_permalink();?>">Read more...</a>
                            </div>
                            <div class="postMeta">
                                <?php
                                echo get_avatar( get_the_author_meta(), '70' );
                            ?>
                                <div class="postMetaDetails">
                                    <span class="postAuthor"><?php the_author(); ?></span>
                                    <time class="postDate"><?php the_date(); ?></time>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endwhile; endif; ?>
                <?php  wp_reset_query(); ?>

            </section>
        </div>
    
</div>
<?php get_footer(); ?>