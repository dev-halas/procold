</body>
<footer class="footer">
	<?php 	
		$footer_logo = get_field('footer_logo', 'option');
		$footer_company_header = get_field('footer_company_header', 'option');
		$footer_company_text = get_field('footer_company_text', 'option');
		$footer_contact_header = get_field('footer_contact_header', 'option');
		$footer_contact_left_text = get_field('footer_contact_left_text', 'option');
		$footer_contact_right_text = get_field('footer_contact_right_text', 'option');

		//social links

		$fb = get_field('facebook_link', 'option');
		$insta = get_field('instagram_link', 'option');
		$yt = get_field('youtube_link', 'option');
	?>
	<?php wp_footer(); ?>
	<div class="certs">
		<div class="certs--wrapper">
			<a href="<?php echo esc_url(home_url('/')) ?>certyfikaty/" class="certs--header">
				<svg xmlns="http://www.w3.org/2000/svg" width="79.907" height="96.495" viewBox="0 0 79.907 96.495">
					<g id="certificate" transform="translate(-44.011)">
						<path id="Path_467" data-name="Path 467" d="M110.349,40.15V6.548A6.555,6.555,0,0,0,103.8,0H50.559a6.555,6.555,0,0,0-6.548,6.548V76.374a6.555,6.555,0,0,0,6.548,6.548h40.19V93.476a3.017,3.017,0,0,0,4.511,2.618l9.058-5.176c10,5.717,9.481,5.573,10.554,5.573a3.017,3.017,0,0,0,3.015-3.015V72.929A19.6,19.6,0,0,0,110.349,40.15ZM50.559,76.891a.518.518,0,0,1-.517-.517V6.548a.518.518,0,0,1,.517-.517H103.8a.518.518,0,0,1,.517.517V39.2A19.59,19.59,0,0,0,90.749,72.929v3.963Zm61.3,11.388-6.042-3.453a3.015,3.015,0,0,0-2.992,0L96.779,88.28V76.891a19.581,19.581,0,0,0,15.077,0V88.28Zm-7.538-15.911A13.569,13.569,0,1,1,117.887,58.8,13.584,13.584,0,0,1,104.318,72.368Z" fill="#193441"/>
						<path id="Path_468" data-name="Path 468" d="M323.545,288.076c-1.178,0-1.328-.279-6.193-3.522a3.015,3.015,0,1,1,3.345-5.018l2.014,1.343,4.358-6.537a3.015,3.015,0,0,1,5.018,3.345l-6.031,9.046A3.013,3.013,0,0,1,323.545,288.076Z" transform="translate(-220.737 -221.549)" fill="#193441"/>
						<path id="Path_469" data-name="Path 469" d="M152.657,86.031h-25.63a3.015,3.015,0,0,1,0-6.031h25.63a3.015,3.015,0,0,1,0,6.031Z" transform="translate(-64.923 -64.923)" fill="#193441"/>
						<path id="Path_470" data-name="Path 470" d="M152.657,150.031h-25.63a3.015,3.015,0,0,1,0-6.031h25.63a3.015,3.015,0,1,1,0,6.031Z" transform="translate(-64.923 -116.862)" fill="#193441"/>
						<path id="Path_471" data-name="Path 471" d="M142.1,214.031H127.026a3.015,3.015,0,0,1,0-6.031H142.1a3.015,3.015,0,0,1,0,6.031Z" transform="translate(-64.923 -168.8)" fill="#193441"/>
					</g>
				</svg>
				<span>Certyfikowany dostawca</span>
			</a>
			<div class="certs--items">
				<div class="cert--item">
					<img src="<?php echo THEME_URL; ?>_dev/img/certs/funduszeEU.jpg" alt="procold-cert">
				</div>
					<div class="cert--item">
						<img src="<?php echo THEME_URL; ?>_dev/img/certs/NCR.jpg" alt="procold-cert">
					</div>
					<div class="cert--item">
						<img src="<?php echo THEME_URL; ?>_dev/img/certs/EU.jpg" alt="procold-cert">
					</div>
					<div class="cert--item">
						<img src="<?php echo THEME_URL; ?>_dev/img/certs/PL.jpg" alt="procold-cert">
					</div>
			</div>
		</div>
		<div class="liquidFooter">
			<img src="<?php echo THEME_URL; ?>_dev/img/liquids-footer.jpeg" alt="liquids-procold">
		</div>
	</div>
	<div class="container">
		<div class="footerWrapper animate fadeInBottomLow">
			<div class="footerCompany">
				<div class="footerTitle">
					<?php echo $footer_company_header; ?>
				</div>
				<div class="footerCol--text">
					<?php echo $footer_company_text; ?>
				</div>
			</div>
			<div class="footerContact">
				<div class="footerTitle">
					<?php echo $footer_contact_header; ?>
				</div>
				<div class="footerCol--contact">
					<div class="footerContact--col">
						<?php echo $footer_contact_left_text; ?>
					</div>
					<div class="footerContact--col">
						<?php echo $footer_contact_right_text; ?>
					</div>
				</div>
			</div>
			<div class="footerLogo">
				<img src="<?php echo esc_url($footer_logo['url']);?>" alt="procold_footer_logo">
				<div class="social_icons">
					<a href="<?php echo esc_url($fb); ?>" target="_blank" class="facebook">
						<svg xmlns="http://www.w3.org/2000/svg" width="9.919" height="19.102" viewBox="0 0 9.919 19.102">
							<g id="facebook-app-symbol" transform="translate(-37.29)">
								<path id="f_1_" d="M43.729,19.1V10.39h2.923l.439-3.4H43.729V4.825c0-.983.272-1.653,1.683-1.653h1.8V.133A24.368,24.368,0,0,0,44.59,0C42,0,40.222,1.583,40.222,4.488v2.5H37.29v3.4h2.932V19.1Z"/>
							</g>
						</svg>
					</a>
					<a href="<?php echo esc_url($insta); ?>" taget="_blank" class="instagram">
						<svg xmlns="http://www.w3.org/2000/svg" width="18.444" height="18.447" viewBox="0 0 18.444 18.447">
							<g id="instagram" transform="translate(-0.449 0)">
								<path id="Path_3" data-name="Path 3" d="M18.845,5.424a6.741,6.741,0,0,0-.429-2.238,4.726,4.726,0,0,0-2.7-2.7A6.758,6.758,0,0,0,13.48.058C12.492.011,12.179,0,9.674,0s-2.818.011-3.8.054A6.743,6.743,0,0,0,3.634.483,4.5,4.5,0,0,0,2,1.55,4.542,4.542,0,0,0,.935,3.182,6.759,6.759,0,0,0,.506,5.42c-.047.987-.058,1.3-.058,3.806s.011,2.818.054,3.8a6.74,6.74,0,0,0,.429,2.238,4.725,4.725,0,0,0,2.7,2.7,6.759,6.759,0,0,0,2.238.429c.984.043,1.3.054,3.8.054s2.818-.011,3.8-.054a6.739,6.739,0,0,0,2.238-.429,4.718,4.718,0,0,0,2.7-2.7,6.763,6.763,0,0,0,.429-2.238c.043-.984.054-1.3.054-3.8s0-2.818-.047-3.8Zm-1.661,7.532a5.056,5.056,0,0,1-.317,1.712,3.06,3.06,0,0,1-1.751,1.751,5.074,5.074,0,0,1-1.712.317c-.973.043-1.265.054-3.726.054s-2.757-.011-3.726-.054a5.054,5.054,0,0,1-1.712-.317A2.839,2.839,0,0,1,3.18,15.73a2.868,2.868,0,0,1-.688-1.059,5.075,5.075,0,0,1-.317-1.712c-.043-.973-.054-1.265-.054-3.726s.011-2.757.054-3.726a5.054,5.054,0,0,1,.317-1.712,2.8,2.8,0,0,1,.692-1.06,2.864,2.864,0,0,1,1.059-.688A5.078,5.078,0,0,1,5.955,1.73c.973-.043,1.265-.054,3.726-.054s2.757.011,3.726.054a5.056,5.056,0,0,1,1.712.317,2.837,2.837,0,0,1,1.059.688,2.867,2.867,0,0,1,.688,1.06,5.077,5.077,0,0,1,.317,1.712c.043.973.054,1.265.054,3.726s-.011,2.75-.054,3.723Zm0,0"/>
								<path id="Path_4" data-name="Path 4" d="M129.688,124.5a4.739,4.739,0,1,0,4.739,4.739A4.74,4.74,0,0,0,129.688,124.5Zm0,7.813a3.074,3.074,0,1,1,3.074-3.074A3.074,3.074,0,0,1,129.688,132.313Zm0,0" transform="translate(-120.014 -120.013)" />
								<path id="Path_5" data-name="Path 5" d="M364.662,89.708a1.106,1.106,0,1,1-1.106-1.106A1.106,1.106,0,0,1,364.662,89.708Zm0,0" transform="translate(-348.956 -85.409)"/>
							</g>
						</svg>
					</a>
					<a href="<?php echo esc_url($yt); ?>" taget="_blank" class="youtube">
						<svg id="Group_2" data-name="Group 2" xmlns="http://www.w3.org/2000/svg" width="20.742" height="14.694" viewBox="0 0 20.742 14.694">
							<path id="Path_8" data-name="Path 8" d="M20.453,62.124a2.317,2.317,0,0,0-1.86-1.9,66.659,66.659,0,0,0-16.442,0,2.316,2.316,0,0,0-1.861,1.9,42.379,42.379,0,0,0,0,9.884,2.316,2.316,0,0,0,1.861,1.9,66.66,66.66,0,0,0,16.442,0,2.315,2.315,0,0,0,1.86-1.9A42.373,42.373,0,0,0,20.453,62.124Zm-11.811,8.4V63.61l5.186,3.457Z" transform="translate(0 -59.72)"/>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="footerCopy">
		<div class="container">
			<p>copyright by procold 2022©</p>
		</div>
	</div>
</footer>
    
<!-- Javascript-->
<!--<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>-->
<script src="<?php echo THEME_URL ?>public/swiper.js"></script>
<script src="<?php echo THEME_URL ?>public/bundle.js"></script>

