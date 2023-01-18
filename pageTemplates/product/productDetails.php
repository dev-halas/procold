<?php 
    // product details
    $product_adv = get_field('product_adv');
    $product_from = get_field('product_from');
    $product_designation_title = get_field('product_designation_title');
    $product_designation = get_field('product_designation');
    $product_capacity_title = get_field('product_capacity_title');
    $product_capacity = get_field('product_capacity');

    // more info (global section on admin panel)
    $moreinfo_title = get_field('moreinfo_title', 'option');
    $moreinfo_text = get_field('moreinfo_text', 'option');
    $moreinfo_link = get_field('moreinfo_link', 'option');

    // complementary product
    $complementary_img = get_field('complementary_img');
    $complementary_title = get_field('complementary_title');
    $complementary_text = get_field('complementary_text');
    $complementary_link = get_field('complementary_link');
?>



<div class="productDetails">
    <div class="productDetails--wrapper">
        <div class="productDetails--content">
            <div class="productDetails--columns">
                <div class="productAdvantages animate fadeInLeft d-200">
                    <?php echo $product_adv; ?>
                </div>
                <div class="productForm animate fadeInRight d-200">
                    <?php echo $product_from; ?>
                </div>
            </div>
            <div class="productDesignation animate fadeIn d-200">
                <?php if($product_designation): ?>
                    <p><strong><?php echo $product_designation_title; ?></strong></p>
                    <div class="productDesignation--inner">
                        <?php foreach( $product_designation as $designation ): ?>
                            <div class="productDesignation--item">
                                <img src="<?php echo THEME_URL; ?>_dev/img/svg/<?php echo $designation['value']; ?>.svg" alt="">
                                <span><?php echo $designation['label']; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="avaliableCapacity animate fadeIn d-200">
                <?php if($product_capacity): ?>
                    <p><strong><?php echo $product_capacity_title; ?></strong></p>
                    <div class="avaliableCapacity--inner">
                        <?php foreach( $product_capacity as $capacity ): ?>
                            <div class="avaliableCapacity--item">
                                <img src="<?php echo THEME_URL; ?>_dev/img/products/<?php echo $capacity['value']; ?>.svg" alt="1l">
                                <span><?php echo $capacity['label']; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="productMore">
                <h2><?php echo $moreinfo_title; ?></h2>
                <p><?php echo $moreinfo_text; ?></p>
                <a href="<?php echo esc_url($moreinfo_link['url']); ?>" class="buttonAzure"><?php echo $moreinfo_link['title']; ?></a>
            </div>
        </div>
        <?php if($complementary_title): ?></h3>
            <div class="productComplementary animate fadeIn d-200">
                <div class="shiftedTitle">
                    <span>produkt</span>
                    <h2>uzupełniający</h2>
                </div>
                <div class="productComplementary--item">
                    <img src="<?php echo esc_url($complementary_img['url']); ?>" alt="<?php echo $complementary_title; ?>">
                    <h3><?php echo $complementary_title; ?></h3>
                    <span><?php echo $complementary_text; ?></span>
                    <a href="<?php echo esc_url($complementary_link['url']); ?>" class="buttonOutline"><?php echo $complementary_link['title']; ?></a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>