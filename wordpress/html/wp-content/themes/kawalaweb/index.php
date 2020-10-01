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
                        <div class="date"><time><?php echo get_the_date(); ?></time></div>
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
    <footer></footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
    <script>
        (() => {
            let options = {
                speedAsDuration: true,
                speed: 800,
                easing: 'easeInOutQuint',
                header: window.matchMedia('(max-width:768px)').matches ? '[data-scroll-header]': ''
            }
            let scroll = new SmoothScroll('a[href*="#"]', options)

            let assemble_addr = () => {
                function converter(M) {
                    var str="", str_as="";
                    for(var i=0;i<M.length;i++){
                    str_as = M.charCodeAt(i);
                    str += String.fromCharCode(str_as + 1);
                    }
                    return str;
                }

                function mail_to(k_1,k_2) {
                    eval(String.fromCharCode(108,111,99,97,116,105,111,110,46,104,114,101,102,32,
                        61,32,39,109,97,105,108,116,111,58) 
                        + escape(k_1) + 
                        converter(String.fromCharCode(106,118,113,114,104,109,63,102,108,96,104,107,45,98,110,108,
                        62,114,116,97,105,100,98,115,60)) 
                        + escape(k_2) + "'");
                } 

                document.querySelector("#email").addEventListener('click', ev => {
                    ev.preventDefault()
                    if(confirm('Are you going to send an email to me?')) mail_to("","")
                })
            }
            assemble_addr()
        })()
    </script>
    <?php wp_footer(); ?>
</body>
</html>