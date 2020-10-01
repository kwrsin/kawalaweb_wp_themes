<?php get_header(); ?>
    <section id="contents">
        <div class="info articles_looks">
            <div class="band lastarticles">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tLastArticles.svg" alt="Last Articles">
            </div>
        </div>
        <div class="container articles_looks articles_looks_sub">
            <?php
                echo '<div class="search-title">KEY WORD : ' . get_search_query() . '</div>';
                $count = $wp_query->found_posts;
                if($count > 0) {
                    echo '<div class="search-description">' . $count. ' COUNTS HIT</div>';
                }
            ?>
            <div class="articles">
            <?php if( have_posts() ) : ?>
                <?php while( have_posts() ) : the_post(); ?>
                    <?php get_template_part('template-parts/posts/content') ?>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="notfound-description">Not Founded Any Articles in the Blog.</div>
            <?php endif; ?>
            </div>
            <?php the_posts_pagination(
                array(
                    'prev_text' => '<img src="' . get_template_directory_uri() . '/assets/images/iLeft.svg" alt="prev"/>',
                    'next_text' => '<img src="' . get_template_directory_uri() . '/assets/images/iRight.svg" alt="next"/>',
                )
            ); ?>
        </div>
    <?php get_template_part('template-parts/loggers/subcontents') ?>
    <?php get_footer(); ?>
