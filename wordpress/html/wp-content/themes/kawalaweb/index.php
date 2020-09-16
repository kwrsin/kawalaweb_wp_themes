<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kawala-Web</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
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
                    <a href="#home">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iHome.svg" alt="home" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tHome.svg" alt="home" height="40px" width="168px" class="shake">
                    </a>
                </li>
                <li>
                    <a href="#aboutme">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iAboutMe.svg" alt="aboutme" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tAboutMe.svg" alt="aboutme" height="40px" width="168px" class="shake">
                    </a>
                </li>
                <li>
                    <a href="#artworks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iArtworks.svg" alt="artworks" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tArtworks.svg" alt="artworks" height="40px" width="168px" class="shake">
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iContact.svg" alt="contact" height="32px" width="32px">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tContact.svg" alt="contact" height="40px" width="168px" class="shake">
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <section id="home">
        <div class="caption">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/KawalaWeb.svg" alt="KawalaWeb" id="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/prisoner.gif" alt="" id="prisoner">
            </div>
        </div>
    </section>
    <section id="aboutme">
        <h3>About Me</h3>
        <div>
            <div class="description">
                <p>
                    Hi I'm Shintarou Kawara as kwrsin.
                </p>
                <p>
                    I live in Fukuoka, Japan and have been freelancing as a software engineer for over 10 years.
                </p>
                <p>
                    I have a long experience in front-end development mainly. I used to develop ATMs for banking systems. 
                </p>
                <p>
                    Now I'm building web applications for end users in Japan.
                </p>
                <p>
                    I am looking forward to taking on new challenges.
                </p>
                <p>
                    Here's a brief biography next to it
                </p>
            </div>
            <H3>My Abilities</H3>
            <div class="abilities">
                <div>
                    <h4>Developments</h4>
                    <ul>
                        <li>creating Web Applications</li>
                        <li>creating iOS Applications</li>
                        <li>creating Games Running on Web Browsers</li>
                    </ul>
                </div>
            </div>
            <H3>My Experiences</H3>
            <div class="experiences">
                <div>
                    <h4>Achievements</h4>
                    <ul>
                        <li>Boarding Tickets management</li>
                        <li>EA development for MT4</li>
                        <li>Inventory control</li>
                        <li>EC Shopping cart</li>
                        <li>ATMs for JP Banking</li>
                        <li>Development of many other web applications</li>
                    </ul>
                </div>
                <div>
                    <h4>Computer Languages</h4>
                    <ul>
                        <li>HTML4/5</li>
                        <li>Javascript</li>
                        <li>CSS2/3</li>
                        <li>Python</li>
                        <li>Java</li>
                        <li>Ruby</li>
                        <li>C++</li>
                        <li>SQL</li>
                        <li>Bash</li>
                    </ul>
                </div>
                <div>
                    <h4>Roles</h4>
                    <ul>
                        <li>Development Stuff</li>
                    </ul>
                </div>
                <div>
                    <h4>Human Languages</h4>
                    <ul>
                        <li>Japanese is Very Well.👍</li>
                        <li>English is OK. but I have Broken English.😓</li>
                    </ul>
                </div>
                <!-- <div>
                    <h4>Birth</h4>
                    <ul>
                        <li>XX/XX/1975</li>
                    </ul>
                </div> -->
            </div>
        </div>
    </section>
    <section id="artworks">
        <h3>My Artworks</h3>
        <div>
            <div class="cards">
                <div class="card clearfix">
                    <div class="artwork west">
                        <h4>Ran Ran Ranse</h4>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rrr.png" alt="">
                        </div>
                        <h5>2019-</h5>
                    </div>                    
                    <span>
                        I still have been playing retro video games since I was a kit. I love them. my favorite genre is strategy game. Above all,  I was getting into a Series of "Nobunaga no Yabo" from KOEI.<br>
                        “Ran Ran Ranse(ランラン乱世)”  is game that collaborated smart phone app which is simple and useful, with the genre of the game. 
                        one has just few commands and light weight, so whoever, wherever, whenever you can play it.<br>
                        you can download it a below icon.
                    </span>
                    <div class="storebadges">
                        <a href="https://apps.apple.com/us/app/ran-ran-ranse/id1217830782?mt=8" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/ja-jp/badge-lrg.svg?releaseDate=2017-03-22&kind=iossoftware&bubble=ios_apps) no-repeat;width:135px;height:40px;"></a>
                    </div>
                </div>
                <div class="card clearfix">
                    <div class="artwork east">
                        <h4>Flappy Chart</h4>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fchart.png" alt="">
                        </div>
                        <h5>2014-2017</h5>
                    </div>                    
                    <span>
                        "Money comes and goes." right?<br>
                        "No! Money has never come to me. My Money goes away from me all the time."
                        "I want to be a last person who gets benefits of "Abenomix" which is composed three arrows."<br>
                        <br>
                        to you<br>
                        I am pleased to introduce this game as "Flappy Chart"
                        and I'm sure that you would be happy by playing with it.
                        I seriously recomend it. <br>
                        you can play it <a href="http://kwrsin.github.io/games/FlappyChart/" target="_blank">here</a>. Good Luck!
                    </span>
                </div>
                <div class="card clearfix">
                    <div class="artwork west">
                        <h4>Okappa</h4>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/okappa.png" alt="">
                        </div>
                        <h5>2019-</h5>
                    </div>                    
                    <span>
                        I am afraid that there would be no one put a plastic model on his/her head in japan.<br>
                        No! they are there.
                        I have  evidence they exist.<br>
                        <br>
                        Look <a href="http://kwrsin.github.io/3dModels/" target="_blank">here</a>.<br>
                        this is one of 3d models I reproduced from collected data when I discovered them.
                        her name is okappa from plastic ne-san who created by blender which is 3d modeling tool .<br>
                        this is  my result of years of research i've been searched.<br>
                        <br>
                        Please take a look. <br>
                   </span>
                </div>
                <div class="card clearfix">
                    <div class="artwork east">
                        <h4>Yabusame<br>Horseback Archery</h4>
                        <div class="grave">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yabusame.png" alt="">
                        </div>
                        <h5>2014-2017</h5>
                    </div>                    
                    <span>Here is a game app scrolling infinitely which a player on horse having a bow and arrows is going to destroy targets to get high scores. Why I decided to create one was to aim at getting a position of horrible game like flappy bird. <br>He died, safely, in 2019, without gaining popularity.</span>
                </div>
                <div class="card clearfix">
                    <div class="artwork west">
                        <h4>Plus 1 Count</h4>
                        <div class="grave">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p1up.png" alt="">
                        </div>
                        <h5>2015-2018</h5>
                    </div>                    
                    <span>It was a simple counter that was included Apple's GAME CENTER. the app could increment or decrement one by one from 0 to 99,999 limited and clear a counter. and one could compete to friends. he was retired his career as Apple's App Store was updated.</span>
                </div>
                <div class="card clearfix">
                    <div class="artwork east">
                        <h4>Pochittona</h4>
                        <div class="grave">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pochittona.png" alt="">
                        </div>
                        <h5>2014-2017</h5>
                    </div>                    
                    <span>
                        even though you push the button, a lot of mechas (i.e. tiny robots) does not rush out of a parent's mouth as fighting supporters.<br>
                        <br>
                        "... what do you mean? " you might think.<br>
                        I know. me too.<br>
                        What I want to say is that this is a browser extension for safari, mac os x. and allow you to scroll  a page while moving your mouse.<br>
                        That's it.<br>
                        but, she died prematurely only around 3 months. 
                        because apple's safari extension galleries often had changed their security rules. 
                        in result, the author was at a lost and gave up developing it.<br>
                        <br>
                        rest in peace.<br>
                    </span>
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
</body>
</html>