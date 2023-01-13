<?php 
    $reviews_subtitle = get_field('reviews_subtitle');
    $reviews_title = get_field('reviews_title');
    $reviews_name = get_field('reviews_name');
    $reviews = get_field('reviews');
    $reviews_next = get_field('reviews_next');
    $reviews_prev = get_field('reviews_prev');
?>

<?php if(isset($reviews)): ?>
<div class="reviews animate">
    <div class="shiftedTitle fadeInBottomLow d-400">
        <span><?php echo $reviews_subtitle; ?></span>
        <h2><?php echo $reviews_title; ?></h2>
    </div>
    <div class="reviewCarousel swiper fadeIn d-200">
        <div class="swiper-wrapper">
            <?php while (have_rows('reviews')): the_row(); 
                $review_name = get_sub_field('review_name');
                $review_text = get_sub_field('review_text');
                $review_img = get_sub_field('review_img');
                $review_count = get_sub_field('review_count');
            ?>
            <div class="review swiper-slide">
                <div class="reviewImg">
                    <img src="<?php echo esc_url($review_img['url']); ?>" alt="<?php echo $review_name; ?>">
                    <span><?php echo $reviews_name; ?></span>
                    <strong><?php echo $review_count; ?>/5</strong>
                </div>
                <div class="reviewText">
                    <strong><?php echo $review_name; ?></strong>
                    <?php echo $review_text; ?>
                </div>
            </div>
            <?php endwhile; ?>
            
        </div><!-- end swiper wrapper-->
        
    <!-- If we need navigation buttons -->
    <div class="reviewArrows">
        <div class="prevReview">
            <svg xmlns="http://www.w3.org/2000/svg" width="28.398" height="14.269" viewBox="0 0 28.398 14.269">
                <g id="right-arrow" transform="translate(0 -127.369)">
                    <g id="Group_1" data-name="Group 1" transform="translate(0 127.369)">
                    <path id="Path_1" data-name="Path 1" d="M28.21,134.049h0l-6.454-6.454a.645.645,0,1,0-.91.91l5.35,5.357H.645a.645.645,0,0,0,0,1.291H26.2l-5.35,5.35a.645.645,0,1,0,.91.91l6.454-6.454A.645.645,0,0,0,28.21,134.049Z" transform="translate(0 -127.369)" fill="#193441"/>
                    </g>
                </g>
            </svg>    
            <span><?php echo $reviews_prev; ?></span>
        </div>
        <div class="nextReview">
            <span><?php echo $reviews_next; ?></span> 
            <svg xmlns="http://www.w3.org/2000/svg" width="28.398" height="14.269" viewBox="0 0 28.398 14.269">
                <g id="right-arrow" transform="translate(0 -127.369)">
                    <g id="Group_1" data-name="Group 1" transform="translate(0 127.369)">
                    <path id="Path_1" data-name="Path 1" d="M28.21,134.049h0l-6.454-6.454a.645.645,0,1,0-.91.91l5.35,5.357H.645a.645.645,0,0,0,0,1.291H26.2l-5.35,5.35a.645.645,0,1,0,.91.91l6.454-6.454A.645.645,0,0,0,28.21,134.049Z" transform="translate(0 -127.369)" fill="#193441"/>
                    </g>
                </g>
            </svg>   
        </div>
    </div>
    
    </div><!-- end swiper -->
    
</div>

<?php endif; ?>

<script>

</script>