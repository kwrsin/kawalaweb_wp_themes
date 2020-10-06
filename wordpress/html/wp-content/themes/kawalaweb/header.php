<!DOCTYPE html>
<html <?php language_attributes(); ?> manifest="web.appcache">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="freelance,software,engineer,programming,creator,kwrsin,kawala,kawara,shintarou,job,fukuoka,瓦,慎太郎">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/iKawala.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/iKawala.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(is_front_page()) { ; ?>
    <header data-scroll-header>
        <figure>
            <div id="avatar">
            </div>
            <figcaption>shintarou kawara</figcaption>
        </figure>
        <input type="checkbox" id="drawer">
        <label for="drawer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/humberger.svg" alt="" width='48px' height="48px" class="burger">
        </label>
        <nav>
            <ul>
                <li>
                    <a href="#home">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iHome.svg" alt="home" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tHome.svg" alt="home" height="40px" width="168px" class="shake">
                    </a>
                </li>
                <li>
                    <a href="#aboutme">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iAboutMe.svg" alt="aboutme" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tAboutMe.svg" alt="aboutme" height="40px" width="168px" class="shake">
                    </a>
                </li>
                <li>
                    <a href="#artworks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iArtworks.svg" alt="artworks" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tArtworks.svg" alt="artworks" height="40px" width="168px" class="shake">
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iContact.svg" alt="contact" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tContact.svg" alt="contact" height="40px" width="168px" class="shake">
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/loggers/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iAxe.svg" alt="loggers" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tLogger.svg" alt="loggers" height="40px" width="168px" class="shake">
                    </a>
                </li>
            </ul>
        </nav>
    </header>
<?php } elseif(is_404()) { ;?>
    <main class="notfound">
        <header>
            <figure>
                <div id="avatar">
                </div>
            </figure>
        </header>
<?php } else { ;?>
    <section id="home">
        <figure>
            <div>
                <a href="/loggers" class="mainlogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iAxe.svg" alt="Loggers Icon" class="iloggers">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tLogger.svg" alt="Loggers" class="tloggers">
            </a>
            </div>
            <div>
                <figcaption>shintarou<br>kawara</figcaption>
                <div id="avatar">
                </div>
            </div>
        </figure>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="#home">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iHome2.svg" alt="home" height="32px" width="32px" class="vibe">
                        </a>
                    </li>
                    <li>
                        <a href="#categories">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iCategories.svg" alt="categories" height="32px" width="32px" class="vibe">
                        </a>
                    </li>
                    <li>
                        <a href="#tags">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iTags.svg" alt="tags" height="32px" width="32px" class="vibe">
                        </a>
                    </li>
                    <li>
                        <a href="#search">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iEye.svg" alt="search" height="32px" width="32px" class="vibe">
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iContact2.svg" alt="contact" height="32px" width="32px" class="vibe">
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iEnter.svg" alt="KawaraWeb" height="32px" width="32px" class="vibe">
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
    </section>
<?php } ; ?>