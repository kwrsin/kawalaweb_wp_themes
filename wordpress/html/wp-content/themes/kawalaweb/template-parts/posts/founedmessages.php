<?php
    $count = $wp_query->found_posts;
    $keyword = get_search_query();
    if($count > 0 && $keyword) {
        echo '<div class="search-title">KEY WORD : ' . $keyword . '</div>';
        echo '<div class="search-description">' . $count. ' COUNTS HIT</div>';
    }
