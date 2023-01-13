<?php
/* 
    TEMPLATE NAME: Contact Page
*/
    
    get_header(); 
    
    $contact_subtitle = get_field('contact_subtitle');
    $contact_title = get_field('contact_title');
    $contact_form = get_field('contact_form');
    
?>


<main class="contact">

    <div class="contactMap">
        <div id="map" class="animate fadeIn d-1200">test</div>
    </div>
    <div class="contactInner">
        <div class="contactInner--bg"></div>
        <div class="contactInner--pattern" style="background: url(<?php echo THEME_URL; ?>_dev/img/pattern-small.png);"></div>
        <div class="container">
            <div class="contactContent pt50">
                <div class="colorsLine bottomLineLeft"></div>
                <div class="contactContent--col">
                    <div class="shiftedTitle">
                        <span><?php echo $contact_subtitle; ?></span>
                        <h2><?php echo $contact_title; ?></h2>
                    </div>
                </div>
                <div class="contactContent--col">
                    <div class="contactContent--adress">
                        <img src="<?php echo THEME_URL; ?>_dev/img/contact/adressPin.svg" alt="adressPin">
                        <span>ul. Leszczyce 10,63-200 Jarocin, Polska</span>
                    </div>
                </div>
            </div>
            <div class="contactContent pt30">
                <div class="colorsLine bottomLineLeft"></div>
                <div class="contactContent--col animate fadeInLeft d-200">
                    <?php echo do_shortcode($contact_form); ?>
                </div>
                <div class="contactContent--col animate fadeInRight d-200">
                    <div class="contactContent--mauser">
                        <img src="<?php echo THEME_URL; ?>_dev/img/contact/kontakt-mauzer.png" alt="liquid mauser">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(have_rows('contact_details')): ?>
        <div class="contactIcons container">
            <?php while (have_rows('contact_details')): the_row(); 
                $contact_icon = get_sub_field('contact_icon'); 
                $contact_text = get_sub_field('contact_text'); 
                $contact_phone = get_sub_field('contact_phone'); 
                $contact_mail = get_sub_field('contact_mail'); 

            ?>
                <div class="contactIcon animate fadeIn d-200">
                    <img src="<?php echo esc_url($contact_icon['url']); ?>" alt="sekretiariat">
                    <div class="contactIcon--text">
                        <?php echo $contact_text; ?>
                    </div>
                    <div class="contactIcon--cta">
                        <a href="tel: <?php echo $contact_phone; ?>">
                            <img src="<?php echo THEME_URL; ?>_dev/img/contact/phone.svg" alt="phone">
                        </a>
                        <a href="mailto: <?php echo $contact_mail; ?>">
                            <img src="<?php echo THEME_URL; ?>_dev/img/contact/send-mail.svg" alt="mail">
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
                
</main>

<script src="<?php echo THEME_URL ?>public/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaPiQlYXG53c8H0c9UxK_zT2WZxyPghe0&callback=initMap"></script>

<?php get_footer(); ?>
