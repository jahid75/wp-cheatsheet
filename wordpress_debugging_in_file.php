<?php

// Function for debugging only
// can remove once it's in production
// Put this into your theme functions.php

if( !function_exists('dd')) {
    function dd ($content, $die = false){
     ob_start();
     print_r($content);
     echo PHP_EOL . '=======================>>>>>>>>>' . PHP_EOL;
     $data = ob_get_clean();
     file_put_contents( get_stylesheet_directory() . '/debug.txt', $data, FILE_APPEND);
     if($die) wp_die($data);
    }
}
