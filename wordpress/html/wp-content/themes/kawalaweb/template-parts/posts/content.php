<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="overview">
                        <div class="date"><time><?php the_time( 'Y-m-d (D) G:i' ); ?></time></div>
                        <?php the_title(
                            '<h4><a href="' . esc_url( get_permalink() ) . '">',
                            '</a></h4>'
                        ); ?>
                        <div class="description"><?php the_content('<span class="">...</span>'); ?></div>
                        <div class="eyecatcher">
                            <?php if( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            <?php endif; ?>
                        </div>    
                        <div class="subinformations">
                            <div class="categorylist">
                                <?php get_template_part('template-parts/posts/thepostcategories') ?>
                            </div>
                            <div class="taglist">
                                <?php get_template_part('template-parts/posts/theposttags') ?>
                            </div>
                        </div>
                    </div>
                </article>
