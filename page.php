<?php get_header(); ?>
<?php the_post();?> 
<h1>TEST</h1>
    <main class="container">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </main>
    

<?php get_footer(); ?>