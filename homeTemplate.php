<?php  /* Template Name: Home Page Template */ get_header();  ?>
<section class="main-home-banner">
        <!-- <div class="banner-heading">
            <h1>
                video
            </h1>
        </div> -->
        <div class="banner-img-slider">
        	<div class="main-img-slider owl-carousel owl-theme">
        		<div class="slider-flex">
        			<div class="slide-name">
        				<h1> Video</h1>
        			</div>
        			<div class="slider-img-box">
        				<div class="slider-img imgone" >

        					<img src="<?php echo get_template_directory_uri(); ?>/images/vid1.JPG" alt="">
        				</div>
        				<div class="slider-img imgtwo" >

        					<img src="<?php echo get_template_directory_uri(); ?>/images/vid2.JPG" alt="">
        				</div>
        			</div>
        			<div class="see-more-btn-banner">
        				<a href="#.">
        					See Our Work <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-btn.png">
        				</a>
        			</div>
        		</div>
        		<div class="slider-flex">
        			<div class="slide-name">
        				<h1> Photography</h1>
        			</div>
        			<div class="slider-img-box">
        				<div class="slider-img imgone" >

        					<img src="<?php echo get_template_directory_uri(); ?>/images/photo1.jpg" alt="">
        				</div>
        				<div class="slider-img imgtwo" >

        					<img src="<?php echo get_template_directory_uri(); ?>/images/photo2.jpg" alt="">
        				</div>
        			</div>
        			<div class="see-more-btn-banner">
        				<a href="#.">
        					See Our Work <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-btn.png">
        				</a>
        			</div>
        		</div>
        		<div class="slider-flex">
        			<div class="slide-name">
        				<h1>  Design</h1>
        			</div>
        			<div class="slider-img-box">
        				<div class="slider-img imgone" >

        					<img src="<?php echo get_template_directory_uri(); ?>/images/design1.jpg" alt="">
        				</div>
        				<div class="slider-img imgtwo" >

        					<img src="<?php echo get_template_directory_uri(); ?>/images/design2.jpg" alt="">
        				</div>
        			</div>
        			<div class="see-more-btn-banner">
        				<a href="#.">
        					Visit Case Studies <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-btn.png">
        				</a>
        			</div>
        		</div>
        		<div class="slider-flex">
        			<div class="slide-name">
        				<h1> Brands</h1>
        			</div>
        			<div class="slider-img-box">
        				<div class="slider-img imgone" >

        					<img src="<?php echo get_template_directory_uri(); ?>/images/brand1.jpg" alt="">
        				</div>
        				<div class="slider-img imgtwo" >
        					<img src="<?php echo get_template_directory_uri(); ?>/images/brand2.png" alt="">
        				</div>
        			</div>
        			<div class="see-more-btn-banner">
        				<a href="#.">
        					Visit Case Studies <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-btn.png">
        				</a>
        			</div>
        		</div>
        	</div>
        	<div id="counter"></div>
        </div>

        <div class="video-banner-slider">
        	<div class="swiper-container video-swiper ">
        		<div class="swiper-wrapper">
        			<div class="swiper-slide">
        				<div class="video-area">
        					<video playsinline autoplay muted loop>
        						<source src="video/Nexen.mp4">
        						</video>
        					</div>
        				</div>
        				<div class="swiper-slide">
        					<div class="video-area">
        						<video playsinline autoplay muted loop>
        							<source src="video/Nexen.mp4">
        							</video>
        						</div>
        					</div>
        					<div class="swiper-slide">
        						<div class="video-area">
        							<video playsinline autoplay muted loop>
        								<source src="video/Nexen.mp4">
        								</video>
        							</div>
        						</div>
        					</div>
        					<!-- Add Pagination -->

        					<div class="vid-banner-pagination">
        						<h6>Video</h6>
        					</div>
        					<div class="swiper-pagination"></div>
        					<!-- Add Arrows -->
        					<div class="swiper-button-next"></div>
        					<div class="swiper-button-prev"></div>
        				</div>
        			</div>
        		</section>
        		<section class="home-client">
        			<div class="home-client-heading">
        				<h6><?php the_field('our_clients_heading', 'option'); ?></h6>
        			</div>
        			<div class="client-list">
        				<div class="client-slider owl-carousel owl-theme">
        					<?php if( have_rows('cleints', 'option') ): while( have_rows('cleints', 'option') ) : the_row(); ?>
        						<div class="client-img">
	        						<img src="<?php the_sub_field('client_image'); ?>" alt="<?php the_sub_field('clients_name'); ?>">
	        					</div>
						    <?php endwhile; else : endif; ?>
        				</div>
        			</div>
        		</section>

        		<section class="home-creator">
        			<div class="home-creator-marque">
        				<marquee behavior="smooth" direction="left">
        					<h3>Dark Horse is Content Agency Focused on Vision, Product and People.</h3>
        				</marquee>
        			</div>
        			<div class="container">
        				<div class="home-creator-heading ">
        					<h5>
        						Dark Horse
        					</h5>
        					<h2><strong>“</strong> We are <span class="txt-rotate pink" data-period="700" data-rotate='[ "creators.", "artists.", "producers.", "directors.", "photographers.", "filmmakers.", "animators.", "designers.", "marketers.", "storytellers.", "videographers.", "editors.", "casting directors.", "stylists." ]'></span><strong>”</strong></h2>
        				</div>
        				<div class="home-creator-para">
        					<div class="row">
        						<div class="col-md-6">
        							<p>
        								Our goal is to elevate any project we touch. Whether we’re injecting artistic shots, motion graphics, point of view, or a new design, we do the research and create a product that exceeds expectations. We are obsessed with design, technology, technique, and beauty. In a crowded industry, we aspire to make relevant work that helps formulate a conversation with the broader world.
        							</p>
        						</div>
        						<div class="col-md-6">
        							<p>
        								DarkHorse is the culmination of over a dozen years in the media space. Our team has worked with innovative start-ups, media companies, Fortune 500 companies, and advertising agencies. Our headquarters is in Los Angeles but we work all over the world.
        							</p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</section>
        		<section class="home-about">
        			<div class="home-partners">

        				<div class="container">
        					<div class="partners-heading">
        						<h1>Partners</h1>
        					</div>
        					<div class="partners-info">
        						<div class="row">
        							<div class="col-md-6 partners-top-space">
        								<div class="partners-data">
        									<div class="partners-img">
        										<img src="<?php echo get_template_directory_uri(); ?>/images/part1.png" alt="">
        									</div>
        									<div class="partners-text">
        										<h4><span>Joshua</span> Winkler</h4>
        										<p>
        											Joshua has been creating content since college. He started out studying
        											photography and writing at UC Berkeley. After cutting his teeth at SMUGGLER NY
        											he was a founding partner at the online content magazine InTheMO. There he
        											travelled the world producing
        											over 3500 short videos on various cultural icons and tastemakers. Since founding
        											DarkHorse Josh has directed video campaigns for brands such as HP, Lenovo, Ford,
        											Kia, Starbucks, Guess, Macys, and Hyatt.
        										</p>
        									</div>
        								</div>
        							</div>
        							<div class="col-md-6 partners-top-space">
        								<div class="partners-data">
        									<div class="partners-img">
        										<img src="<?php echo get_template_directory_uri(); ?>/images/part2.png" alt="">
        									</div>
        									<div class="partners-text">
        										<h4><span>Lizzie</span> Shook</h4>
        										<p>
        											Lizzie brings a plethora of production experience spanning JWT, BBH, and Anomaly
        											creative agencies, Arcade Edit and Facebook. She has produced just about every
        											piece of content from TV spots to interactive experiences to social media
        											commercials. When
        											things get bumpy her cool demeanor kicks in and she helps guide any production
        											to a successful conclusion. She is a true veteran of the field.
        										</p>
        									</div>
        								</div>
        							</div>


        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="home-services">
        				<div class="container">
        					<div class="services-heading">
        						<h1>services</h1>
        					</div>
        				</div>

        				<div class="services-info">
        					<div class="container">
        						<div class="services-info-heading">
        							<h3>What We Do</h3>
        							<p>
        								We are equipped to handle all phases of production including Creative Development, Location Scouting and Booking, Casting, Story Boards, Sound Engineering, Cinematography, Styling, Hair and Make-Up, Wardrobe, Color Grading, Mixing, Motion Graphics, Delivery and most other aspects of your project.
        							</p>
        						</div>
        						<div class="row">
        							<div class="col-md-6 do-top-space">
        								<a href="#." class="what-we background-position"
        								style="background-image: url(images/do1.png);">
        								<div class="service-tag">
        									<h4><span>Motion</span></h4>
        								</div>
        							</a>
        							<a href="#." class="what-we background-position"
        							style="background-image: url(images/do3.png);">
        							<div class="service-tag">
        								<h4><span>Design</span></h4>
        							</div>
        						</a>
        					</div>
        					<div class="col-md-6 do-top-space">
        						<a href="#." class="what-we background-position"
        						style="background-image: url(images/do2.png);">
        						<div class="service-tag">
        							<h4><span>Photography</span></h4>
        						</div>
        					</a>
        					<a href="#." class="what-we background-position"
        					style="background-image: url(images/do4.png);">
        					<div class="service-tag">
        						<h4><span>Branding</span></h4>
        					</div>
        				</a>
        			</div>


        		</div>

        	</div>
        </div>
    </div>
</section>
<section class="home-process">

	<div class="container">
		<div class="home-process-heading">
			<h1>Process</h1>
		</div>
		<div class="home-process-info">
			<div class="process-info-heading">
				<h3>Our Process</h3>
			</div>
			<div class="home-process-para">
				<div class="row">
					<div class="col-md-6">
						<p>
							We work with a variety of clients on a variety of projects. Advertising Agencies,
							Marketing Departments, Content Sites, PR Firms, and Start Ups … We create social media
							content, shoot behind the scenes videos, product videos, travel videos, photography,
							design packaging and websites …. none of them are exactly the same. But they all start
							the same way, with a conversation. From there we get a sense of the scope, budget and
							schedule.
						</p>
					</div>
					<div class="col-md-6">
						<p>
							We outline expectations, creative direction, and estimate in the form of a pitch deck. With some projects we work in tandem with creative teams while with other projects we develop the creative approach internally. Regardless of the creative development, each project is segmented into a pre-production, production and post-production phases. Our producers guide our clients through each phase of the job. After each client sign-off, we move to the next step, and the next, towards the ultimate goal: a reel worthy project that make bosses gleam with pride.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="work-area">
	<div class="home-work">
		<div class="home-work-heading">
			<h2>
				Our Work
			</h2>
			<marquee behavior="smooth" direction="left">
				We believe our work speaks for itself
			</marquee>
		</div>
		<div class="side-container">
			<div class="work-slider owl-carousel owl-theme">
				<div class="work-slide-img">
					<img class="onhover-none" src="<?php echo get_template_directory_uri(); ?>/images/w1.png" alt="">
					<img class="onhover-block" src="<?php echo get_template_directory_uri(); ?>/images/video-to-gif-sample.gif" alt="">
				</div>
				<div class="work-slide-img">
					<img class="onhover-none" src="<?php echo get_template_directory_uri(); ?>/images/w2.png" alt="">
					<img class="onhover-block" src="<?php echo get_template_directory_uri(); ?>/images/video-to-gif-sample.gif" alt="">
				</div>
				<div class="work-slide-img">
					<img class="onhover-none" src="<?php echo get_template_directory_uri(); ?>/images/w3.png" alt="">
					<img class="onhover-block" src="<?php echo get_template_directory_uri(); ?>/images/video-to-gif-sample.gif" alt="">
				</div>
				<div class="work-slide-img">
					<img class="onhover-none" src="<?php echo get_template_directory_uri(); ?>/images/w1.png" alt="">
					<img class="onhover-block" src="<?php echo get_template_directory_uri(); ?>/images/video-to-gif-sample.gif" alt="">
				</div>
				<div class="work-slide-img">
					<img class="onhover-none" src="<?php echo get_template_directory_uri(); ?>/images/w2.png" alt="">
					<img class="onhover-block" src="<?php echo get_template_directory_uri(); ?>/images/video-to-gif-sample.gif" alt="">
				</div>
				<div class="work-slide-img">
					<img class="onhover-none" src="<?php echo get_template_directory_uri(); ?>/images/w3.png" alt="">
					<img class="onhover-block" src="<?php echo get_template_directory_uri(); ?>/images/video-to-gif-sample.gif" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="home-case-study">
		<div class="case-study-heading">
			<h1>Case Study</h1>

			<marquee behavior="smooth" direction="left">Our quality standards apply also in terms of service,
			technical expertise and advice.</marquee>
		</div>
		<div class="case-study-info">
			<div class="container">
				<div class="row">
					<div class="col-md-6 case-top-space">
						<div class="case-study-box">
							<div class="case-study-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/ca1.png" alt="">
							</div>
							<div class="case-study-btn">
								<a href="#.">
									<h5>Brothers Desserts</h5>
									<p>Read Now <img src="<?php echo get_template_directory_uri(); ?>/images/black-arrow.png" alt=""></p>
								</a>
							</div>
						</div>
						<div class="case-study-box">
							<div class="case-study-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/ca2.png" alt="">
							</div>
							<div class="case-study-btn">
								<a href="#.">
									<h5>Macys</h5>
									<p>Read Now <img src="<?php echo get_template_directory_uri(); ?>/images/black-arrow.png" alt=""></p>
								</a>
							</div>
						</div>
						<div class="case-study-box">
							<div class="case-study-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/ca3.png" alt="">
							</div>
							<div class="case-study-btn">
								<a href="#.">
									<h5>Hyatt Centric</h5>
									<p>Read Now <img src="<?php echo get_template_directory_uri(); ?>/images/black-arrow.png" alt=""></p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 case-top-space">
						<div class="case-study-box">
							<div class="case-study-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/ca4.png" alt="">
							</div>
							<div class="case-study-btn">
								<a href="#.">
									<h5>Schoep’s Ice Cream</h5>
									<p>Read Now <img src="<?php echo get_template_directory_uri(); ?>/images/black-arrow.png" alt=""></p>
								</a>
							</div>
						</div>
						<div class="case-study-box">
							<div class="case-study-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/ca5.png" alt="">
							</div>
							<div class="case-study-btn">
								<a href="#.">
									<h5>Starbucks</h5>
									<p>Read Now <img src="<?php echo get_template_directory_uri(); ?>/images/black-arrow.png" alt=""></p>
								</a>
							</div>
						</div>
						<div class="case-study-box">
							<div class="case-study-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/ca6.png" alt="">
							</div>
							<div class="case-study-btn">
								<a href="#.">
									<h5>Grand Hyatt</h5>
									<p>Read Now <img src="<?php echo get_template_directory_uri(); ?>/images/black-arrow.png" alt=""></p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<marquee class="case-bottom-marquee" behavior="smooth" direction="left">Creative Content and Results That
		Grow Brands</marquee>
	</div>
</section>
<section class="together">
	<div class="container">
		<div class="together-box">
			<h4>Let’s Work Together!</h4>
			<p>
				Tell us about your project and let’s chat! <br> We’re in sunny Los Angeles and open to all travel
				jobs
			</p>
			<a href="mailto:magic@darkhorsesite.com "><img src="<?php echo get_template_directory_uri(); ?>/images/Icon awesome-envelope-open.png" alt="">
			magic@darkhorsesite.com</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>