    <footer>
    	<div class="container">
    		<div class="footer-top">
    			<div class="row">
    				<div class="col-md-6">
    					<div class="footer-contact-area">
    						<div class="footer-logo">
    							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
    						</div>
    						<div class="footer-contact-para">
    							<p>
    								We would love to hear about any project you have coming up. Shoot us a line and we will get back to you as soon as we can. Recycle and reuse. Upwards and onwards. Love, Dark Horse
    							</p>
    						</div>
    						<ul>
    							<?php if(get_field('telNumber', 'option')) { ?>
    								<li>
    									<span>
    										<i class="fa fa-phone"></i>
    									</span>
    									<a href="tel:<?php the_field('telNumber', 'option'); ?>"><?php the_field('telNumber', 'option'); ?></a>
    								</li>
    							<?php } ?>
    							<?php if(get_field('emailMain', 'option')) { ?>
    								<li>
    									<span>
    										<i class="fa fa-envelope"></i>
    									</span>
    									<a href="mailto:<?php the_field('emailMain', 'option'); ?>"><?php the_field('emailMain', 'option'); ?></a>
    								</li>
    							<?php } ?>
    						</ul>
    					</div>
    				</div>
    				<div class="col-md-6">
    					<div class="get-in-touch">
    						<div class="get-touch-heading">
    							<h4>Get In Touch</h4>
    						</div>
    						<form action="">
    							<div class="form-group">
    								<input type="text" placeholder="Full Name" class="form-control">
    							</div>
    							<div class="form-group">
    								<input type="email" placeholder="Email Address" class="form-control">
    							</div>
    							<div class="form-group">
    								<input type="text" placeholder="Subject" class="form-control">
    							</div>
    							<div class="form-group">
    								<textarea class="form-control" placeholder="Message *"></textarea>
    							</div>
    							<div class="footer-submit-btn">
    								<button type="submit">Submit <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-btn.png"></button>
    							</div>
    						</form>
    					</div>
    				</div>
    			</div>
    			<div class="footer-social">
    				<ul>
    					<li>
    						<a href="#.">
    							<i class="fa fa-facebook-f"></i>
    						</a>
    					</li>
    					<li>
    						<a href="#.">
    							<i class="fa fa-twitter"></i>
    						</a>
    					</li>
    					<li>
    						<a href="#.">
    							<i class="fa fa-linkedin"></i>
    						</a>
    					</li>
    					<li>
    						<a href="#.">
    							<i class="fa fa-instagram"></i>
    						</a>
    					</li>
    				</ul>
    			</div>
    		</div>
    		<div class="footer-bottom">
    			<p>©COPYRIGHT 2021. All Rights Reserved.</p>
    			<ul>
    				<li>
    					<a href="#.">Privacy Policy</a>
    				</li>
    				<li>
    					<a href="#.">Terms & Conditions</a>
    				</li>
    			</ul>
    		</div>
    	</div>
    </footer>
    <!-- jQuery Version 3.2.1 -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.js"></script>
    <!-- fancybox -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/fancybox.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!-- owl slider -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- swiper-slider -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- custom js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    <?php wp_footer(); ?>
</body>

</html>