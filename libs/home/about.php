<?php 
    $about_img = get_field('about_img');
    $about_text = get_field('about_text');
    $about_logos = get_field('about_logos');
?>
<div class="about animate" id="about">
    <img class="about--bg" src="<?php echo THEME_URL; ?>_dev/img/about-bg.jpeg" alt="">
    <div class="container">
        <div class="aboutInner">
            <div class="aboutLeft fadeIn d-400">
                <img src="<?php echo $about_img['url']; ?>" alt="liquids">
                <?php if( $about_logos ): ?>
                    <div class="aboutLogos">
                        <?php foreach( $about_logos as $about_logo ): ?>
                            <img src="<?php echo esc_url($about_logo['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="aboutRight fadeInRight d-400">
                <?php echo $about_text; ?>
            </div>
        </div>  
    </div>
    <div class="colorsLine bottomLineLeft"></div>
</div>