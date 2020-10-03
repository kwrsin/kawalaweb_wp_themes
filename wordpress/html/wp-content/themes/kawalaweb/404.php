<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/iKawala.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body>
    <main class="notfound">
        <header>
            <figure>
                <div id="avatar">
                </div>
            </figure>
        </header>
        <div class="notfound_content">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iSearch.svg" alt="Search" id="search">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404notfound.svg" alt="NOT FOUND" id="notfound">
                <div>
                    The Requested URL was not found on this server.
                </div>
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iEnter.svg" alt="Back" id="back">
                </a>
            </div>
        </div>
        <footer>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/KawalaWebL.svg" alt="KawalaWeb">
        </footer>
    </main>
    <?php wp_footer(); ?>
</body>
</html>