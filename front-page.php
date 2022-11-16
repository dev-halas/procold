<?php get_header(); ?>

    <main>
        <?php
            get_template_part('/libs/home/hero'); 
            get_template_part('/libs/home/about'); 
            get_template_part('/libs/home/homeBlog'); 
            get_template_part('/libs/home/categories'); 
            get_template_part('/libs/home/logoCarousel'); 
            get_template_part('/libs/home/ourProducts'); 
            get_template_part('/libs/home/reviews'); 
            get_template_part('/libs/home/services'); 
        ?>

    </main>

<?php get_footer(); ?>