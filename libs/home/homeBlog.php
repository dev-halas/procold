<div class="homeBlog animate fadeIn">
    <div class="homeBlog--inner">
        <div class="homeBlog--nav">
            <div class="shiftedTitle">
                <span>blog</span>
                <h2>Artykuły</h2>
            </div>
            <div>
                <div class="articleArrows">
                    <div class="prevArticle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                            <g id="Ellipse_2" data-name="Ellipse 2" fill="none" stroke="#193441" stroke-width="1">
                                <circle cx="30" cy="30" r="30" stroke="none"/>
                                <circle cx="30" cy="30" r="29.5" fill="none"/>
                            </g>
                            <path id="Polygon_1" data-name="Polygon 1" d="M10.244,3.219a2,2,0,0,1,3.512,0l8.631,15.823A2,2,0,0,1,20.631,22H3.369a2,2,0,0,1-1.756-2.958Z" transform="translate(44 18) rotate(90)" fill="#193441"/>
                        </svg>
                    </div>
                    <div class="nextArticle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                            <g id="Ellipse_2" data-name="Ellipse 2" fill="none" stroke="#193441" stroke-width="1">
                                <circle cx="30" cy="30" r="30" stroke="none"/>
                                <circle cx="30" cy="30" r="29.5" fill="none"/>
                            </g>
                            <path id="Polygon_1" data-name="Polygon 1" d="M10.244,3.219a2,2,0,0,1,3.512,0l8.631,15.823A2,2,0,0,1,20.631,22H3.369a2,2,0,0,1-1.756-2.958Z" transform="translate(44 18) rotate(90)" fill="#193441"/>
                        </svg>  
                    </div>
                </div>
                <a href="#" class="article--all">zobacz wszystkie</a>
            </div>
        </div>
        <?php $post_query = new WP_Query( array( 'posts_per_page' => 8, )); ?>
            <div class="swiper homeBlog--articles">
            <?php if ( $post_query -> have_posts() ) : ?>
                <div class="swiper-wrapper">
                    <?php while ( $post_query->have_posts() ) : 
                        $post_query->the_post(); 
                        $title = get_the_title();
                        $image = get_the_post_thumbnail_url();
                        $post_excerpt = get_the_excerpt();
                        $postLink = get_the_permalink();
                        $date = get_the_date('d/m/Y');
                    ?>
                        <a href="<?php echo esc_url($postLink);?>" class="homeArticle swiper-slide">
                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo $title; ?>" class="homeArticle--img">
                            <div class="homeArticle--content">
                                <h2 class="homeBlog--title"><?php echo $title; ?></h2>
                                <p>
                                    <?php echo $post_excerpt; ?>
                                </p>
                                <span><?php echo $date; ?></span>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <h1 class="newsEmpty"><?php __('Brak artykułów do wyświetlenia'); ?></h1>
            <?php endif; ?>
            </div>
        </div>

    </div>
</div>