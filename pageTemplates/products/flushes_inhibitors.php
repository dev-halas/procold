<?php 
    $products_flushes_title = get_field('products_flushes_title');
    $products_inhibitors_title = get_field('products_inhibitors_title');
?>

<div class="productsWrapper--half">
    <section id="flushes">
        <div class="productsSection animate fadeInTopLow">
            <h2><?php echo $products_flushes_title; ?></h2>
        </div>
        <?php if(have_rows('products_flushes')): ?>
            <div class="productsWrapper--half">
                <?php while (have_rows('products_flushes')): the_row();
                    $products_flush_image = get_sub_field('products_flush_image');
                    $products_flush_title = get_sub_field('products_flush_title');
                    $products_flush_usage = get_sub_field('products_flush_usage');
                    $products_flush_link = get_sub_field('products_flush_link');
                ?>
                <div class="products--item animate fadeIn d-200">
                    <a href="<?php echo esc_url($products_flush_link['url']); ?>" class="products--img">
                        <img src="<?php echo $products_flush_image['url']; ?>" alt="<?php echo $products_flush_title; ?>"/>
                    </a>
                    <div class="products--content">
                        <div class="products--text">
                            <h3><?php echo $products_flush_title; ?></h3>
                            <?php echo $products_flush_usage; ?>
                        </div>
                    </div>
                    <a href="<?php echo esc_url($products_flush_link['url']); ?>" class="buttonOutline">
                        <?php echo $products_flush_link['title']; ?>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>
    <section id="inhibitors">
        <div class="productsSection animate fadeInTopLow">
            <h2><?php echo $products_inhibitors_title; ?></h2>
        </div>
        <?php if(have_rows('products_inhibitors')): ?>
            <div class="productsWrapper--half">
                <?php while (have_rows('products_inhibitors')): the_row();
                    $products_inhibitor_image = get_sub_field('products_inhibitor_image');
                    $products_inhibitor_title = get_sub_field('products_inhibitor_title');
                    $products_inhibitor_usage = get_sub_field('products_inhibitor_usage');
                    $products_inhibitor_link = get_sub_field('products_inhibitor_link');
                ?>
                <div class="products--item animate fadeIn d-200">
                    <a href="<?php echo esc_url($products_inhibitor_link['url']); ?>" class="products--img">
                        <img src="<?php echo $products_inhibitor_image['url']; ?>" alt="<?php echo $products_inhibitor_title; ?>"/>
                    </a>
                    <div class="products--content">
                        <div class="products--text">
                            <h3><?php echo $products_inhibitor_title; ?></h3>
                            <?php echo $products_inhibitor_usage; ?>
                            <br>
                        </div>
                    </div>
                    <a href="<?php echo esc_url($products_inhibitor_link['url']); ?>" class="buttonOutline">
                        <?php echo $products_inhibitor_link['title']; ?>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>
</div>

