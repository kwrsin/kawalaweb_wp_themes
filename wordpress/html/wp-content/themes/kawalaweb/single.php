<?php get_header(); ?>
    <section id="contents">
        <div class="info articles_looks">
            <div class="band lastarticles">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tLastArticles.svg" alt="Last Articles">
            </div>
        </div>
        <div class="container articles_looks articles_looks_sub">
            <div class="articles">
            <?php while( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="overview">
                        <div class="eyecatcher">
                            <?php if( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>    
                        <div class="date"><time><?php the_time( 'Y-m-d (D) G:i' ); ?></time></div>
                        <?php the_title('<h4>>', '</h4>'); ?>
                        <div class="description"><?php the_content(); ?></div>
                        <div class="subinformations">
                            <div class="categorylist">
                                <?php get_template_part('template-parts/posts/thepostcategories') ?>
                            </div>
                            <div class="taglist">
                                <?php get_template_part('template-parts/posts/theposttags') ?>
                            </div>
                        </div>
                        <?php $host_name = $_SERVER['HTTP_HOST']; ?>
                        <?php if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'], $host_name) !== false)) : ?>
                        <div class="back">
                            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/iEnter.svg" alt="Back" class="vibe"></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
            <?php the_post_navigation(
                array(
                    'prev_text' => '<img src="' . get_template_directory_uri() . '/assets/images/iLeft.svg" alt="prev"/>',
                    'next_text' => '<img src="' . get_template_directory_uri() . '/assets/images/iRight.svg" alt="next"/>',
                )
            ); ?>
            
        </div>
    <?php get_template_part('template-parts/loggers/subcontents') ?>
    <?php get_footer(); ?>
