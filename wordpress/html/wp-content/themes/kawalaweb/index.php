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
    <footer>
        PLEASE GEVE ME JOBS!!
    </footer>
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