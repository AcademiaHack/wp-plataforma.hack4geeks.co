<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);


function get_category_depth(){
  return sizeof((get_ancestors(get_queried_object()->cat_ID, 'category')));
}
function get_category_new($value){ 
  return sizeof((get_ancestors($value->cat_ID, 'category')));
}

/**
 * bainternet_allow_email_login filter to the authenticate filter hook, to fetch a username based on entered email
 * @param  obj $user
 * @param  string $username [description]
 * @param  string $password [description]
 * @return boolean
 */
add_filter('authenticate', 'bainternet_allow_email_login', 20, 3);
function bainternet_allow_email_login( $user, $username, $password ) {
    if ( is_email( $username ) ) {
        $user = get_user_by('email', $username );
        if ( $user ) $username = $user->user_login;
    }
    return wp_authenticate_username_password(null, $username, $password );
}
 
/**
 * addEmailToLogin function to add email address to the username label
 * @param string $translated_text   translated text
 * @param string $text              original text
 * @param string $domain            text domain
 */
add_filter( 'gettext', 'addEmailToLogin', 20, 3 );
function addEmailToLogin( $translated_text, $text, $domain ) {
    if ( "Nombre de usuario" == $translated_text )
        $translated_text .= __( ' o Email');
    return $translated_text;
}

//Returns true if the current user is admin
function isCurrentAdmin(){
  return current_user_can( 'manage_options' );
}

//Returns true if $login is admin
function isAdmin($login){
  return user_can( get_user_by( 'login', $login)->ID , 'manage_options');
}

//Returns true if $login is the current user
function isCurrentUser($login){
  return $login == wp_get_current_user()->user_login;
}

//Returns true if the comment is inside of one of a user comments
function isMyReply($comment){
  $comm=$comment;

  while ($comm->comment_parent != 0){
    $comm=get_comment($comm->comment_parent);
  }

  return $comm->comment_author == wp_get_current_user()->user_login;
}