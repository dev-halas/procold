<?php 
    $products_liquids_title = get_field('products_liquids_title');
?>
<section id="liquids">
    <div class="productsSection animate fadeInTopLow">
        <h2><?php echo $products_liquids_title; ?></h2>
    </div>
    <?php if(have_rows('products_liquids')): ?>
        <div class="productsWrapper">
            <?php while (have_rows('products_liquids')): the_row();
                $products_liquid_image = get_sub_field('products_liquid_image');
                $products_liquid_title = get_sub_field('products_liquid_title');
                $products_liquid_cat = get_sub_field('products_liquid_cat');
                $products_liquid_usage = get_sub_field('products_liquid_usage');
                $products_liquid_supp = get_sub_field('products_liquid_supp');
                $products_liquid_link = get_sub_field('products_liquid_link');
                $products_liquid_eco = get_sub_field('products_liquid_eco');
            ?>
                <div class="products--item animate fadeIn d-200">
                    <?php if($products_liquid_eco): ?>
                        <img src="<?php echo THEME_URL; ?>_dev/img/products/eco.png" alt="" class="products--eco">
                    <?php endif; ?>
                    <a href="<?php echo esc_url($products_liquid_link['url']); ?>" class="products--img">
                        <img src="<?php echo $products_liquid_image['url']; ?>" alt="<?php echo $products_liquid_title; ?>"/>
                    </a>
                    <div class="products--content">
                        <h3><?php echo $products_liquid_title; ?></h3>
                        <small><?php echo $products_liquid_cat; ?></small>
                        <div class="products--text">
                            <?php echo $products_liquid_usage; ?>
                            <span><?php echo $products_liquid_supp; ?></span>
                        </div>
                    </div>
                    <a href="<?php echo esc_url($products_liquid_link['url']); ?>" class="buttonOutline">
                        <?php echo $products_liquid_link['title']; ?>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>