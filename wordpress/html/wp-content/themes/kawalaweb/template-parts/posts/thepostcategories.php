<?php
    $categories = get_the_category(get_the_ID());
    if($categories && !is_wp_error($categories)) {
        foreach($categories as $category) { 
            echo '<a href="' . get_category_link( $category->term_id ) . '"/>' . $category->name. '</a>';
        } 
    }

