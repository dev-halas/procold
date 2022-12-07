<?php  

    /* Template Name: Career posts */

    get_header();
?>


    <main class="career">
        <div class="archiveHeader">
            <div class="colorsLine topLineCenter"></div>
            <div class="shiftedTitle">
                <span>PROCOLD</span>
                <h2>Kariera</h2>
            </div>
        </div>
    
        <div class="container careerLoop">
            <?php 
            
            $jobOffers = array(  
                'post_type' => 'career',
            );

            ?>

            <?php $post_query = new WP_Query( $jobOffers ); ?>
                <?php if ( $post_query -> have_posts() ) : ?>
                    <div class="blog--articles">
                    <?php while ( $post_query->have_posts() ) : $post_query->the_post(); 
                        $title = get_the_title();
                        $image = get_the_post_thumbnail_url();
                        $post_excerpt = get_the_excerpt();
                        $postLink = get_the_permalink();
                        $date = get_the_date('d/m/Y');
                    ?>
                        <article class="article">
                            <div class="careerIcon">
                                <img src="<?php echo THEME_URL; ?>_dev/img/career/technician.png" alt="icon">
                            </div>
                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo $title; ?>">
                            <div class="article--content">
                                <h2><?php echo $title; ?></h2>
                                <div>
                                    <?php echo $post_excerpt; ?>
                                </div>
                                <div class="article--more">
                                    <a href="<?php echo esc_url($postLink);?>" class="buttonWhite">więcej</a>
                                    <span class="article--date"><?php echo $date; ?></span>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                </div>       
            <?php else : ?>
                <h1 class="newsEmpty"><?php __('Brak artykułów do wyświetlenia'); ?></h1>
            <?php endif; ?>
        </div>

    </main>

<?php get_footer(); ?>