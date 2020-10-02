<?php        
    $tags = get_the_tags(get_the_ID());
    if($tags && !is_wp_error($tags)) {
        foreach($tags as $tag) { 
            echo '<a href="' . get_tag_link( $tag->term_id ) . '">#' . $tag->name. '</a>';
        } 
    }
