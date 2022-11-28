<?php  

    /* Template Name: Archive Page Custom */

    get_header();
?>


    <main class="container blog">
        
    <?php $post_query = new WP_Query( array( 'posts_per_page' => 8, )); ?>
        <?php if ( $post_query -> have_posts() ) : ?>
            <?php while ( $post_query->have_posts() ) : $post_query->the_post(); 
                $title = get_the_title();
                $image = get_the_post_thumbnail_url();
                $post_excerpt = get_the_excerpt();
                $postLink = get_the_permalink();
                $date = get_the_date('d/m/Y');
            ?>

            <div class="blog--articles">
                <article class="article">
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
            </div>
                    

    
                        
                
            <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
                
        <?php else : ?>
            <h1 class="newsEmpty"><?php __('Brak artykułów do wyświetlenia'); ?></h1>
        <?php endif; ?>

    </main>

<?php get_footer(); ?>