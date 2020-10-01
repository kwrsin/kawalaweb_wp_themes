<?php

function list_categories() {
    $args = array(
        'orderby' => 'name',
        'order' => 'ASC'
        );
    $categories = get_categories($args);
    if($categories && !is_wp_error($categories)) {
        foreach($categories as $category) { 
            echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name. '</a> </li> ';
        } 
    } else {
        echo '<li>no categories</li>';
    }
}

function list_tags() {
    $args = array(
        'orderby' => 'name',
        'order' => 'ASC'
        );
    $tags = get_tags($args);
    if($tags && !is_wp_error($tags)) {
        foreach($tags as $tag) { 
            echo '<li><a href="' . get_tag_link( $tag->term_id ) . '">#' . $tag->name. '</a> </li> ';
        } 
    } else {
        echo '<li>no tags</li>';
    }
}

?>

        <div id="categories" class="info categories_looks">
            <div class="band categories">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tCategories.svg" alt="categories">
            </div>
        </div>
        <div class="container categories_looks">
            <div class="list_wrapper">
                <ul>
                    <?php list_categories(); ?>
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
                    <?php list_tags(); ?>
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
                <form name="form_search" method="get" onSubmit="search_articles(event)">
                    <input type="text" name="s" placeholder="Search...">
                    <div class="search_btn" onClick="search_articles(event)">
                        <i class="search_icon"></i>
                    </div>
                </form>
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