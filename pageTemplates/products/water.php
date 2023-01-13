<?php 
    $products_water_title = get_field('products_water_title');
?>
<section id="water">
    <div class="productsSection animate fadeInTopLow">
        <h2><?php echo $products_water_title; ?></h2>
    </div>
    <?php if(have_rows('products_waters')): ?>
        <div class="productsWrapper">
            <?php while (have_rows('products_waters')): the_row();
                $products_water_image = get_sub_field('products_water_image');
                $products_water_title = get_sub_field('products_water_title');
                $products_water_usage = get_sub_field('products_water_usage');
                $products_water_link = get_sub_field('products_water_link');
            ?>
                <div class="products--item animate fadeIn d-200">
                    <a href="<?php echo esc_url($products_water_link['url']); ?>" class="products--img">
                        <img src="<?php echo $products_water_image; ?>" alt="<?php echo $products_water_title; ?>"/>
                    </a>
                    <div class="products--content">
                        <div class="products--text">
                            <h3><?php echo $products_water_title; ?></h3>
                            <?php echo $products_water_usage; ?>
                        </div>
                    </div>
                    <a href="<?php echo esc_url($products_water_link['url']); ?>" class="buttonOutline">
                        <?php echo $products_water_link['title']; ?>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>