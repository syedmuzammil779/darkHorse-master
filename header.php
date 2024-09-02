<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dark Horse</title>
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.6/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fancybox.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
    <header class="home">
        <nav class="navbar-nav">
            <div class="navbar-container">
                <div class="main-menu">
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                    <button class="hamburger" type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="navbar-area" id="navbarNav">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="navbar-nav">
                                <?php  
                                wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'my_extra_menu_class' ) );
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="navbar-social">
                                <ul>
                                    <?php if (get_field('faecbook_url','option')): ?>
                                        <li>
                                            <a href="<?php the_field('faecbook_url','option'); ?>">
                                                <i class="fa fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (get_field('twitter_url','option')): ?>
                                        <li>
                                            <a href="<?php the_field('twitter_url','option'); ?>">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (get_field('linkedin_url','option')): ?>
                                        <li>
                                            <a href="<?php the_field('linkedin_url','option'); ?>">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (get_field('instagram_url','option')): ?>
                                        <li>
                                            <a href="<?php the_field('instagram_url','option'); ?>">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                                <?php if (get_field('social_media_menu_content','option')) { ?>
                                    <p><?php the_field('social_media_menu_content', 'option'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>