<?php 
    $partners_subtitle = get_field('partners_subtitle');
    $partners_title = get_field('partners_title');
    $partners_logos = get_field('partners_logos');
?>


<div class="carousel animate fadeIn">
    <div class="shiftedTitle">
        <span><?php echo $partners_subtitle ;?></span>
        <h2><?php echo $partners_title ;?></h2>
    </div>
    <div class="swiper logoCarousel">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper logoCarousel--wrapper">
        <!-- Slides loop -->
        <?php foreach( $partners_logos as $partners_logo ): ?>
            <div class="swiper-slide carousel--item">
                <img src="<?php echo $partners_logo['url']; ?>" alt="partner_logo-<?php echo $partners_logo['alt']; ?>">
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>



