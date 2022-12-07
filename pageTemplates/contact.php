<?php
/* 
    TEMPLATE NAME: Contact Page
*/
    
    get_header(); ?>


<main class="contact">

    <div class="contactMap">
        <div id="map">test</div>
    </div>
    <div class="contactInner">
        <div class="contactInner--bg"></div>
        <div class="contactInner--pattern" style="background: url(<?php echo THEME_URL; ?>_dev/img/pattern-small.png);"></div>
        <div class="container">
            <div class="contactContent pt50">
                <div class="colorsLine bottomLineLeft"></div>
                <div class="contactContent--col">
                    <div class="shiftedTitle">
                        <span>KONTAKT</span>
                        <h2>napisz do nas</h2>
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
                <div class="contactContent--col">
                    <?php echo do_shortcode('[contact-form-7 id="43" title="Contact form PL"]'); ?>
                </div>
                <div class="contactContent--col">
                    <div class="contactContent--mauser">
                        <img src="<?php echo THEME_URL; ?>_dev/img/contact/kontakt-mauzer.png" alt="liquid mauser">
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="contactIcons container">
                <div class="contactIcon">
                    <img src="<?php echo THEME_URL; ?>_dev/img/contact/sekretariat.svg" alt="sekretiariat">
                    <div class="contactIcon--text">
                        <strong>SEKRETARIAT:</strong><br/>
                        tel: +48 531 215 216<br/>
                        mail: sekretariat@procold.pl
                    </div>
                    <div class="contactIcon--cta">
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/contact/phone.svg" alt="phone">
                        </a>
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/contact/send-mail.svg" alt="mail">
                        </a>
                    </div>
                </div>
                <div class="contactIcon">
                    <img src="<?php echo THEME_URL; ?>_dev/img/contact/export.svg" alt="sekretiariat">
                    <div class="contactIcon--text">
                        <strong>SEKRETARIAT:</strong><br/>
                        tel: +48 531 215 216<br/>
                        mail: sekretariat@procold.pl
                    </div>
                    <div class="contactIcon--cta">
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/contact/phone.svg" alt="phone">
                        </a>
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/contact/send-mail.svg" alt="mail">
                        </a>
                    </div>
                </div>
                <div class="contactIcon">
                    <img src="<?php echo THEME_URL; ?>_dev/img/contact/inwestycje.svg" alt="sekretiariat">
                    <div class="contactIcon--text">
                        <strong>SEKRETARIAT:</strong><br/>
                        tel: +48 531 215 216<br/>
                        mail: sekretariat@procold.pl
                    </div>
                    <div class="contactIcon--cta">
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/contact/phone.svg" alt="phone">
                        </a>
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/contact/send-mail.svg" alt="mail">
                        </a>
                    </div>
                </div>
                <div class="contactIcon">
                    <img src="<?php echo THEME_URL; ?>_dev/img/contact/dystrybucja.svg" alt="sekretiariat">
                    <div class="contactIcon--text">
                        <strong>SEKRETARIAT:</strong><br/>
                        tel: +48 531 215 216<br/>
                        mail: sekretariat@procold.pl
                    </div>
                    <div class="contactIcon--cta">
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/contact/phone.svg" alt="phone">
                        </a>
                        <a href="#">
                            <img src="<?php echo THEME_URL; ?>_dev/img/contact/send-mail.svg" alt="mail">
                        </a>
                    </div>
                </div>
        </div>
    
    
</main>

<?php get_footer(); ?>
