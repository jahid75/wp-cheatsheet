<?php

/**
 * Create a user in wordpress.
 * Put this code into the functions.php in your active theme.
 * Then just visit the home page, it'll create a new user for you. 
 * You've to replace the information for $user_login, $email, $password & $role
 * 
 * @author Niamul <email@niamul.me>
 * @return void
 */
function ni_create_new_user() {
    
    $user_login = 'user_name_here'; // User name want to add
    $email      = 'email@email.com'; // Email you want to add
    $password   = 'password_here'; // Password you want to login with
    $role       = 'administrator'; // Whatever role you want
    
    if ( ! email_exists( $email ) ) {
        
        $userdata = array(
            'user_login' =>  $user_login,
            'user_email' =>  $email,
            'user_pass'  =>  $password,
            'role'       => $role
        );
        
        $user_id = wp_insert_user( $userdata ) ;
        
    }
    
}
add_action( 'init', 'ni_create_new_user' );
