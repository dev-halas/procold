<?php 
    get_header();
    the_post();

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

                <div class="postContent--text">
                    W instalacji chłodniczej znajduje się ciecz stanowiąca nośnik energii. Jest ona cały czas sprężana i rozprężana. W przypadku powstania nawet najmniejszej nieszczelności ciecz pod ciśnieniem będzie wydostawać się na zewnątrz. Wpłynie to na znaczące zmniejszenie wydajności całej instalacji, jednak jest to tylko jeden z wielu negatywnych skutków jakie mogą powstać. Dlatego też należy wykonywać cykliczne badania potwierdzające szczelność całej instalacji. Z tego artykułu dowiesz, co czeka Twoją instalację, gdy nie zareagujesz odpowiednio wcześnie.
                </div>
                

            </div>
            <div class="postSidebar">
                <?php dynamic_sidebar( 'recent_post_sidebar' ); ?>
            </div>
            <div class="colorsLine bottomLineLeft"></div>
        </section>


        
    </main>

<?php get_footer(); ?>
