<?php 
    $product_photo = get_field('product_photo');
    $product_cat = get_field('product_cat');
    $product_title = get_field('product_title');
    $product_text = get_field('product_text');
?>

<div class="productMain">
    <div class="topLineCenter colorsLine"></div>
    <div class="productMain--whiteBG"></div>
    <div class="productMain--darkBG"></div>

        
        <div class="productMain--inner">
            <div class="productMain--img animate fadeIn d-1200">
                <img src="<?php echo $product_photo['url']; ?>" alt="<?php echo $product_title; ?>">
            </div>
            <div class="productMain--text animate fadeIn d-500">
                <div class="productMain--top">
                    <span class="productMain--subtitle"><?php echo $product_cat; ?></span>
                    <h2 class="productMain--title"><?php echo $product_title; ?></h2>
                </div>
                <div class="productMain--bottom">
                    <div class="productMain--description">
                        <?php echo $product_text; ?>
                    </div>
                </div>
            </div>
        </div>
          
 </div>