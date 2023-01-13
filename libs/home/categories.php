<?php if(have_rows('home_cat')): ?>
<div class="categories animate fadeInBottomLow">
    <?php while(have_rows('home_cat')): the_row();

        $home_cat_img = get_sub_field('home_cat_img');
        $home_cat_text = get_sub_field('home_cat_text');
        $home_cat_link = get_sub_field('home_cat_link');
    
    ?>
    <a href="<?php echo esc_url(home_url($home_cat_link['url'])); ?>" class="category--item">
        <img src="<?php echo esc_url($home_cat_img['url']); ?>" alt="<?php echo esc_attr($home_cat_img['alt']); ?>">
        <div class="categoryItem--inner">
            <h3><?php echo $home_cat_text; ?></h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="28.398" height="14.269" viewBox="0 0 28.398 14.269">
                <g id="right-arrow" transform="translate(0 -127.369)">
                    <g id="Group_1" data-name="Group 1" transform="translate(0 127.369)">
                    <path id="Path_1" data-name="Path 1" d="M28.21,134.049h0l-6.454-6.454a.645.645,0,1,0-.91.91l5.35,5.357H.645a.645.645,0,0,0,0,1.291H26.2l-5.35,5.35a.645.645,0,1,0,.91.91l6.454-6.454A.645.645,0,0,0,28.21,134.049Z" transform="translate(0 -127.369)" fill="#fff"/>
                    </g>
                </g>
            </svg>
        </div>
    </a>
    <?php endwhile; ?>

</div>
<?php endif; ?>