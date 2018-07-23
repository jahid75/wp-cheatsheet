//Adding Additional Styles to Tiny MCE
function ie_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'ie_mce_buttons_2');

// Callback function to filter the MCE settings
function ie_mce_before_init_insert_formats( $init_array ) {  

  // Add your styles here as an Array
    $style_formats = array(  
        array(  
            'title' => 'Company or Feature Name',  
            'block' => 'span',  
            'classes' => 'company-or-featured-name',
            'wrapper' => true,
             
        ),  
        array(  
            'title' => 'Bright Red',  
            'block' => 'span',  
            'classes' => 'bright-red',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Dark Red',  
            'block' => 'span',  
            'classes' => 'bright-red',
            'wrapper' => true,
        )
    );  
    $init_array['style_formats'] = json_encode( $style_formats );  
    return $init_array;  
} 

add_filter( 'tiny_mce_before_init', 'ie_mce_before_init_insert_formats' ); 
