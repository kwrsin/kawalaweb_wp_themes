<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kawala-Web</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <?php wp_head(); ?>
</head>
<body>
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
                    <a href="../#home">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iHome.svg" alt="home" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tHome.svg" alt="home" height="40px" width="168px" class="shake">
                    </a>
                </li>
                <li>
                    <a href="../#aboutme">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iAboutMe.svg" alt="aboutme" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tAboutMe.svg" alt="aboutme" height="40px" width="168px" class="shake">
                    </a>
                </li>
                <li>
                    <a href="../#artworks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iArtworks.svg" alt="artworks" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tArtworks.svg" alt="artworks" height="40px" width="168px" class="shake">
                    </a>
                </li>
                <li>
                    <a href="../#contact">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iContact.svg" alt="contact" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tContact.svg" alt="contact" height="40px" width="168px" class="shake">
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <section>
        Hello! This is a page for POST.
    </section>
    <?php get_footer(); ?>