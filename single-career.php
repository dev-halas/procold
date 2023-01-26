<?php 
    get_header();
    the_post();

    //social Links
		$fb = get_field('facebook_link', 'option');
		$insta = get_field('instagram_link', 'option');
		$yt = get_field('youtube_link', 'option');
		$linkedin = get_field('linkedin_link', 'option');
		$tiktok = get_field('tiktok_link', 'option');

?>

    
    <main class="post career">
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
                        
                    </p>
                    <div class="postContent--cta">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank">
                            <img src="<?php echo THEME_URL; ?>_dev/img/blog/facebook.svg" alt="procold_facebook">
                        </a>
                        <a href="<?php echo esc_url($insta); ?>" target="_blank">
                            <img src="<?php echo THEME_URL; ?>_dev/img/blog/instagram.svg" alt="procold_instagram">
                        </a>
                        <a href="<?php echo esc_url($yt); ?>" target="_blank">
                            <img src="<?php echo THEME_URL; ?>_dev/img/blog/youtube.svg" alt="procold_youtube">
                        </a>
                        <a href="<?php echo esc_url($linkedin); ?>" target="_blank">
                            <img src="<?php echo THEME_URL; ?>_dev/img/blog/linkedin-2.svg" alt="procold_linkedin">
                        </a>
                        <a href="<?php echo esc_url($tiktok); ?>" target="_blank">
                            <img src="<?php echo THEME_URL; ?>_dev/img/blog/tik-tok.svg" alt="procold_tik-tok">
                        </a>
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/blog/copy.svg" alt="procold_copy">
                        </a>
                        
                    </div>
                </div>

                <h2 class="postContent--title"><?php the_title();?></h2>

                <div class="postContent--text">
                    W instalacji chłodniczej znajduje się ciecz stanowiąca nośnik energii. Jest ona cały czas sprężana i rozprężana. W przypadku powstania nawet najmniejszej nieszczelności ciecz pod ciśnieniem będzie wydostawać się na zewnątrz. Wpłynie to na znaczące zmniejszenie wydajności całej instalacji, jednak jest to tylko jeden z wielu negatywnych skutków jakie mogą powstać. Dlatego też należy wykonywać cykliczne badania potwierdzające szczelność całej instalacji. Z tego artykułu dowiesz, co czeka Twoją instalację, gdy nie zareagujesz odpowiednio wcześnie.
                </div>
                
                <div class="careerForm">
                    <?php echo do_shortcode('[contact-form-7 id="224" title="Career form PL -- mail"]'); ?>
                </div>
            </div>
            <div class="postSidebar">
                <?php dynamic_sidebar( 'recent_post_sidebar' ); ?>
            </div>
            <div class="colorsLine bottomLineLeft"></div>
        </section>


        
    </main>

<?php get_footer(); ?>
