<?php get_header(); ?>
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
<?php get_footer(); ?>