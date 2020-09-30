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
                    'screen_reader_text' => '',
                )
            ); ?>
        </div>
        <div id="categories" class="info categories_looks">
            <div class="band categories">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tCategories.svg" alt="categories">
            </div>
        </div>
        <div class="container categories_looks">
            <div class="list_wrapper">
                <ul>
                    <li><a href="">Tutorials</a></li>
                    <li><a href="">Daliy</a></li>
                    <li><a href="">Development</a></li>
                    <li><a href="">KawaraWeb</a></li>
                </ul>
            </div>
        </div>
        <div id="tags"  class="info tags_looks">
            <div class="band tags">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tTags.svg" alt="tags">
            </div>
        </div>
        <div class="container tags_looks">
            <div class="list_wrapper">
                <ul>
                    <li><a href="">#c++</a></li>
                    <li><a href="">#design</a></li>
                    <li><a href="">#css</a></li>
                    <li><a href="">#internatioal languages</a></li>
                    <li><a href="">#machine larnings</a></li>
                    <li><a href="">#python</a></li>
                    <li><a href="">#進撃の巨人</a></li>
                    <li><a href="">#プラスティック姉さん</a></li>
                    <li><a href="">#red hot chill pepeprs</a></li>
                    <li><a href="">#木村カエラ</a></li>
                </ul>
            </div>
        </div>
        <div id="search"  class="info search_looks">
            <div class="band search">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tSearch.svg" alt="search">
            </div>
        </div>
        <div class="container search_looks">
            <div class="search_box">
                <input type="text" name="search" placeholder="Search...">
                <div class="search_btn">
                    <i class="search_icon"></i>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="socials">
            <h3>Contact Me</h3>
            <p>
                Thank you for visiting my website.<br>
                Please feel free to contact me using below Email/SNS icons, if you have any questions or requests.
            </p>
            <div>
                <ul>
                    <li><a href="" target="_blank" id="email"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.png" alt="" height="48" width="48"></a></li>
                    <li><a href="https://twitter.com/kwrsin" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="" height="48" width="48"></a></li>
                    <li><a href="https://github.com/kwrsin" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/github.png" alt="" height="48" width="48"></a></li>
                </ul>
            </div>
        </div>
    </section>
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