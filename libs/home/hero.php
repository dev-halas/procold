<?php if(have_rows('sliders')): ?>
    <div class="hero">
        <?php while (have_rows('sliders')): the_row();
            $sliderImg = get_sub_field('slider_image');
            $sliderSubtitle = get_sub_field('slider_subtitle');
            $sliderTitle = get_sub_field('slider_title');
            $sliderText = get_sub_field('slider_text');
            $sliderLink = get_sub_field('slider_link');
            $sliderColor = get_sub_field('slider_color');
        ?>

            <div class="heroSlide">
                <div class="heroImage">
                    <img src="<?php echo $sliderImg['url']; ?>" alt="<?php echo $sliderTitle; ?>">
                </div>
                <div class="heroContent">
                    <span class="heroSmall--text" style="color: <?php echo $sliderColor; ?>"><?php echo $sliderSubtitle; ?></span>
                    <div class="heroContent--wrapper">
                        <h1 class="heroTitle" style="color: <?php echo $sliderColor; ?>"><?php echo $sliderTitle; ?></h1>
                        <h3 class="heroSubtitle"><?php echo $sliderText; ?></h3>
                        <a href="<?php echo $sliderLink['url']; ?>" class="buttonWhite"><?php echo $sliderLink['title']; ?></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>


        <div class="heroSlide--nav">
            <?php while (have_rows('sliders')): the_row();
                $sliderImg = get_sub_field('slider_image');
                $sliderTitle = get_sub_field('slider_title');
                $sliderColor = get_sub_field('slider_color');
            ?>
                <div class="heroSlide--navItem" style="border-color: <?php echo $sliderColor; ?>">
                    <img src="<?php echo $sliderImg['url']; ?>" alt="<?php echo $sliderTitle; ?>">
                    <span><?php echo $sliderTitle; ?></span>
                </div>
            <?php endwhile; ?>
        </div>



        <svg class="heroShield" xmlns="http://www.w3.org/2000/svg" width="743.875" height="920.315" viewBox="0 0 743.875 920.315">
            <path id="Path_2" data-name="Path 2" d="M325.155,235.18,698.575,30,1067.891,235.18s4.231,268.663-132.955,491.308c-54.112,87.821-129.9,168.315-236.36,222.7C312.845,768.636,325.155,235.18,325.155,235.18Z" transform="translate(-324.551 -29.433)" fill="none" stroke="#a9dff3" stroke-width="1"/>
        </svg>



        <?php
            get_template_part('/libs/home/rightBar'); 
        ?>

        <a href="#about" class="hero--scrollDown">
            <span>zobacz więcej</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="43.007" height="43.007" viewBox="0 0 43.007 43.007">
                <g id="arrow-right" transform="translate(43.007) rotate(90)">
                    <path id="Path_472" data-name="Path 472" d="M21.5,0a21.5,21.5,0,1,0,21.5,21.5A21.5,21.5,0,0,0,21.5,0Zm0,40.856A19.353,19.353,0,1,1,40.856,21.5,19.353,19.353,0,0,1,21.5,40.856Zm0,0" fill="#203e4d"/>
                    <path id="Path_473" data-name="Path 473" d="M172.445,128.266a1.075,1.075,0,1,0-1.415,1.619l7.676,6.716-7.677,6.717a1.075,1.075,0,1,0,1.415,1.619l8.6-7.526a1.076,1.076,0,0,0,0-1.619Zm0,0" transform="translate(-153.459 -115.098)" fill="#203e4d"/>
                </g>
            </svg>
        </a>

    </div>

<?php endif; ?>