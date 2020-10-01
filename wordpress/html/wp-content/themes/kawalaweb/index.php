<?php get_header(); ?>
    <section id="contents">
        <div class="info articles_looks">
            <div class="band lastarticles">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tLastArticles.svg" alt="Last Articles">
            </div>
        </div>
        <div class="container articles_looks articles_looks_sub">
            <div class="articles">
            <?php if( have_posts() ) : ?>
                <?php while( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="overview">
                        <div class="eyecatcher">
                            <?php if( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            <?php endif; ?>
                        </div>    
                        <div class="date"><time><?php the_time( 'Y-m-d (D) G:i' ); ?></time></div>
                        <?php the_title(
                            '<h4><a href="' . esc_url( get_permalink() ) . '">',
                            '</a></h4>'
                        ); ?>
                        <div class="description"><?php the_content('<span class="">...</span>'); ?></div>
                        <div class="subinformations">
                            <div class="categorylist">
                                <a href="">cate1</a>
                                <a href="">cate2</a>
                                <a href="">cate3</a>
                            </div>
                            <div class="taglist">
                                <a href="">#tag1</a>
                                <a href="">#tag2</a>
                                <a href="">#tag3</a>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endwhile; ?>
            <?php else: ?>
                Not Founded Any Articles int the Blog.
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
