<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/loggers.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <section id="home">
        <figure>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iAxe.svg" alt="Loggers Icon" class="iloggers">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tLogger.svg" alt="Loggers" class="tloggers">
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
