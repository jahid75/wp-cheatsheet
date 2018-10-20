<?php

// Search Text Highlighter by Niamul
function highlight_search($text, $word = 45){
    $excerpt = wp_trim_words($text, $word, '...');
    $keys = implode('|', explode(' ', get_search_query()));
    $excerpt = preg_replace('/(' . $keys .')/iu', '<strong class="highlight">\0</strong>', $excerpt);
    return $excerpt;
}


// Uses:
// In the loop 
echo highlight_search(get_the_title(), 30); //Optional Limit word 30

// Or
echo highlight_search(get_the_content());

// Or
echo highlight_search(get_the_excerpt());
