<?php
/**
 * Use Bootstrap's media object for listing comments
 *
 * @link http://getbootstrap.com/components/#media
 */
class Roots_Walker_Comment extends Walker_Comment {
  function start_lvl(&$output, $depth = 0, $args = array()) {
    //if is the user or is admin
    // previous version
    // if (($comment->comment_author==wp_get_current_user()->user_login )||(current_user_can( 'manage_options' ))):
    if ($comment->comment_author==wp_get_current_user()->user_login || user_can( get_user_by( 'login', $comment->comment_author)->ID , 'manage_options') || current_user_can( 'manage_options' )):
    $GLOBALS['comment_depth'] = $depth + 1; 
    ?>
      <ul <?php comment_class('media list-unstyled comment-' . get_comment_ID()); ?>>
    <?php
    endif;
  }

  function end_lvl(&$output, $depth = 0, $args = array()) {
    //if is the user or is admin
    // previous version
    // if (($comment->comment_author==wp_get_current_user()->user_login )||(current_user_can( 'manage_options' ))):
    if ($comment->comment_author==wp_get_current_user()->user_login || user_can( get_user_by( 'login', $comment->comment_author)->ID , 'manage_options') || current_user_can( 'manage_options' )):
    $GLOBALS['comment_depth'] = $depth + 1;
      echo '</ul>';
    endif;
 }

  function start_el(&$output, $comment, $depth = 0, $args = array(), $id = 0) {
    //if is the user  or is admin
    // previous version
    // if (($comment->comment_author==wp_get_current_user()->user_login )||(current_user_can( 'manage_options' ))):
    if ($comment->comment_author==wp_get_current_user()->user_login || user_can( get_user_by( 'login', $comment->comment_author)->ID , 'manage_options') || current_user_can( 'manage_options' )):
    $depth++;
    $GLOBALS['comment_depth'] = $depth;
    $GLOBALS['comment'] = $comment;

    if (!empty($args['callback'])) {
      call_user_func($args['callback'], $comment, $args, $depth);
      return;
    }

    extract($args, EXTR_SKIP); 
    ?>

    <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media comment-' . get_comment_ID()); ?>>
      <?php include(locate_template('templates/comment.php')); ?>
  <?php
    endif;
  }

  function end_el(&$output, $comment, $depth = 0, $args = array()) {
    //if is the user or is a comment from the admin,  or is admin
    // previous version
    // if (($comment->comment_author==wp_get_current_user()->user_login )||(current_user_can( 'manage_options' ))):
    if ($comment->comment_author==wp_get_current_user()->user_login || user_can( get_user_by( 'login', $comment->comment_author)->ID , 'manage_options') || current_user_can( 'manage_options' )):

    if (!empty($args['end-callback'])) {
      call_user_func($args['end-callback'], $comment, $args, $depth);
      return;
    }
      // Close ".media-body" <div> located in templates/comment.php, and then the comment's <li>
      echo "</div></li>\n";
    endif;
  }
}

function roots_get_avatar($avatar, $type) {
  if (!is_object($type)) { return $avatar; }

  $avatar = str_replace("class='avatar", "class='avatar pull-left media-object", $avatar);
  return $avatar;
}
add_filter('get_avatar', 'roots_get_avatar', 10, 2);
