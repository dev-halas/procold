<?php 
    get_header();
    the_post();

?>

    
    <main class="post">
        <section class="postHeader">
            <div class="container">
                <div class="postHeader--img">
                    <div class="colorsLine bottomLineCenter"></div>
                    <img src="<?php echo THEME_URL; ?>_dev/img/blog/post-header.jpg" alt="<?php the_title();?>">
                </div>
            </div>
        </section>
        <section class="container postInner">
            <div class="postContent">
                <div class="postContent--top">
                    <p class="postContent--author">
                        <?php echo get_the_author_meta('display_name', $author_id); ?>
                    </p>
                    <div class="postContent--cta">
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/blog/facebook.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/blog/instagram.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/blog/youtube.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/blog/copy.svg" alt="">
                        </a>
                    </div>
                </div>

                <h2 class="postContent--title"><?php the_title();?></h2>
                <?php
                    // Check value exists.
                    if( have_rows('pc') ):

                        // Loop through rows.
                        while ( have_rows('pc') ) : the_row(); ?>

                        <?php 
                            if( get_row_layout() == 'pc_full_text' ):
                                $full_text = get_sub_field('pc_full_text_content');
                        ?>

                            <div class="postContent--text">
                                <?php echo $full_text; ?>
                            </div> 

                        <?php 
                            elseif( get_row_layout() == 'pc_text_img_left' ):
                                $left_img = get_sub_field('pc_text_img_left_img');
                                $left_text = get_sub_field('pc_text_img_left_text');
                        ?>

                            <div class="postContent--2cols">
                                <div class="postContent--col">
                                    <img src="<?php echo esc_url($left_img['url']); ?>" alt="<?php echo $left_img['alt']; ?>">
                                </div>
                                <div class="postContent--col">
                                    <?php echo $left_text; ?>
                                </div>
                            </div>
                        
                        <?php 
                            elseif( get_row_layout() == 'pc_text_img_right' ):
                                $right_img = get_sub_field('pc_text_img_right_img');
                                $right_text = get_sub_field('pc_text_img_right_text');
                        ?>

                            <div class="postContent--2cols">
                                <div class="postContent--col">
                                    <?php echo $right_text; ?>
                                </div>
                                <div class="postContent--col">
                                    <img src="<?php echo esc_url($right_img['url']); ?>" alt="<?php echo $right_img['alt']; ?>">
                                </div>
                            </div>

                        <?php 
                            elseif( get_row_layout() == 'pc_image_full' ):
                                $full_img = get_sub_field('pc_image_full_img');
                        ?>

                            <div class="postContent--imageFull">
                                <img src="<?php echo esc_url($full_img['url']); ?>" alt="<?php echo $full_img['alt']; ?>">
                            </div>

                        <?php 
                            elseif( get_row_layout() == 'pc_text_2column' ):
                                $text_left = get_sub_field('pc_text_2column_left');
                                $text_right = get_sub_field('pc_text_2column_right');
                        ?>

                            <div class="postContent--2cols">
                                <div class="postContent--col">
                                    <?php echo $text_left; ?>
                                </div>
                                <div class="postContent--col">
                                    <?php echo $text_right; ?>
                                </div>
                            </div>

                        <?php 
                            elseif( get_row_layout() == 'pc_image_2column' ):
                                $image_left = get_sub_field('pc_image_left');
                                $image_right = get_sub_field('pc_image_rght');
                        ?>

                            <div class="postContent--2images">
                                <div class="postContent--image">
                                    <img src="<?php echo esc_url($image_left['url']); ?>" alt="<?php echo $image_left['alt']; ?>">
                                </div>
                                <div class="postContent--image">
                                    <img src="<?php echo esc_url($image_right['url']); ?>" alt="<?php echo $image_right['alt']; ?>">
                                </div>
                            </div>

                        <?php endif; //end content template if ?>

                    <?php endwhile; //end conent loop ?>


                <?php endif; //end flexible content if ?>

                
                <div class="postContent--bottom">
                    <a href="<?php echo esc_url(home_url('/')) ?>" class="postBackHomepage">Wróć</a>
                    <span><?php echo the_date(); ?></span>
                </div>

            </div>
            <div class="postSidebar">
                <?php dynamic_sidebar( 'recent_post_sidebar' ); ?>
            </div>
            <div class="colorsLine bottomLineLeft"></div>
        </section>

        <?php get_template_part('/libs/home/homeBlog'); ?>
        
    </main>

<?php get_footer(); ?>
