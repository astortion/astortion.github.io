 <section class="pageContent">
            <div class="row contain">
   <?php 
    while ( have_rows('content') ) : the_row();
        if (get_row_layout('two_column')) : ?>
            <?php if (get_sub_field('text_left_or_right') == 'left') : ?>
                <div class="col col_50 padding">
                    <h3><?php the_sub_field('text_heading')?></h3>
                    <?php the_sub_field('body_copy'); ?>
                </div>
                <?php if(get_sub_field('visual_element')=='image') : ?>
                    <?php if(get_sub_field('background_image')!='') :
                       $bgImage = wp_get_attachment_image_src( get_sub_field('background_image'), 'large' );
                    endif;?>
                    <div class="col col_50 <?php the_sub_field('entrance_animation');?>" <?php if(get_sub_field('background_image')!='') : ?> style="background-image:url(' <?php echo $bgImage[0]; ?>')" <?php endif; ?>>
                        <?php 
                            $attachment_id = get_sub_field('image');
                            $size = 'featured_2_col';
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php echo $image[0]; ?>" alt="">
                    </div>
                <?php else : ?>
                    <div class="col col_50">
                        <div class="col counter counterTrigger animate" style="background-color: <?php the_sub_field('background_colour'); ?>">
                            <div id="counter">
                                <div class="counter-value" data-count="<?php the_sub_field('count_to_number')?>" style="color:<?php the_sub_field('counter_colour')?>;">0</div>
                            </div>
                            <p style="color:<?php the_sub_field('text_colour'); ?>"><?php the_sub_field('text_line_1'); ?><br><?php the_sub_field('text_line_2'); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            <?php else : ?>
               dssd
                <?php if(get_sub_field('visual_element')=='image') : ?>
                    <div class="col col_50 <?php the_sub_field('entrance_animation');?>" <?php if(get_sub_field('background_image')!='') : ?> style="background-image:url('<?php the_sub_field('background_image'); ?>')" <?php endif; ?>>
                        <?php 
                            $attachment_id = get_sub_field('image');
                            $size = 'featured_2_col';
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php echo $image[0]; ?>" alt="">
                    </div>
                <?php else : ?>
                    <div class="col col_50">
                        <div class="col counter counterTrigger animate" style="background-color: <?php the_sub_field('background_colour'); ?>">
                            <div id="counter">
                                <div class="counter-value" data-count="<?php the_sub_field('count_to_number')?>" style="color:<?php the_sub_field('counter_colour')?>;">0</div>
                            </div>
                            <p style="color:<?php the_sub_field('text_colour'); ?>"><?php the_sub_field('text_line_1'); ?><br><?php the_sub_field('text_line_2'); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col col_50 padding">
                    <h3><?php the_sub_field('text_heading')?></h3>
                    <?php the_sub_field('body_copy'); ?>
                </div>
            <?php endif; ?>
    <?php elseif (get_row_layout('one_column')) : ?>
        <?php if(get_sub_field('background_image')!='') :
            $bgImage = wp_get_attachment_image_src( get_sub_field('background_image'), 'large' ); 
        endif;?>
        <div class="col" <?php if(get_sub_field('background_image')!='') : ?> style="background-image:url(' <?php echo $bgImage[0]; ?>')" <?php endif; ?>>
            <?php if(get_sub_field('heading')!='') : ?>
                <h2><?php the_sub_field('heading'); ?></h2>
            <?php endif; ?>
            <?php if(get_sub_field('text')!='') : ?>
                <p><?php the_sub_field('text'); ?></p>
            <?php endif; ?>

            <img src="http://www.armadillocrm.com/test/steve/armadillocrm/case-study-hero.jpg" alt="" >
        </div>      
    <?php endif; ?> 
<?php endwhile; ?>
 </div>
        </section>
