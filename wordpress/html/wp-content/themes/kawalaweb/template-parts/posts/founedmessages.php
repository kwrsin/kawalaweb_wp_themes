<?php 
    if( ! is_home() ) {
        the_archive_title( '<h1 class="archive_title">', '</h1>' );

        if ( is_category() || is_tag() ) {
            $desc = get_the_archive_description();
            
            if ( $desc ) {
                echo '<div class="archive-description">' . $desc . '</div>';
            } 
        } 
        $count = $wp_query->found_posts;
            $keyword = get_search_query();
            if($count > 0 && $keyword) {
                echo '<div class="search-title">KEY WORD : ' . $keyword . '</div>';
                echo '<div class="search-description">' . $count. ' COUNTS HIT</div>';
            }
    } else {
        $count = $wp_query->found_posts;
            $keyword = get_search_query();
            if($count > 0 && $keyword) {
                echo '<div class="search-title">KEY WORD : ' . $keyword . '</div>';
                echo '<div class="search-description">' . $count. ' COUNTS HIT</div>';
            }
    }


