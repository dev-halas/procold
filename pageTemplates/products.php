<?php
/* 
    TEMPLATE NAME: Produkty
*/
    
    get_header(); ?>


<main class="products">
    
    <?php get_template_part('/pageTemplates/products/productsHeader'); ?>

    <div class="container">
        <?php 
            get_template_part('/pageTemplates/products/liquids'); 
            get_template_part('/pageTemplates/products/flushes_inhibitors'); 
            get_template_part('/pageTemplates/products/water'); 
        ?>
    </div>

    
</main>

<?php get_footer(); ?>