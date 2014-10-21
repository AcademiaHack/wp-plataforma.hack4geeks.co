<?php
/**
 * Use Bootstrap's media object for listing comments
 *
 * @link http://getbootstrap.com/components/#media
 */
class Roots_Walker_Comment extends Walker_Comment {
  function start_lvl(&$output, $depth = 0, $args = array()) {
    $GLOBALS['comment_depth'] = $depth + 1; 

    $comment = get_comment(get_comment_ID());
    //if the comment is a comment from the current user or from an admin
    if (isCurrentAdmin() || isCurrentUser($comment->comment_author) || (isAdmin($comment->comment_author) && isMyReply($comment))) {
    ?>
      <ul <?php comment_class('media list-unstyled comment-' . get_comment_ID()); ?>>
    <?php
    }
  }

  function end_lvl(&$output, $depth = 0, $args = array()) {
    $GLOBALS['comment_depth'] = $depth + 1;

    $comment = get_comment(get_comment_ID());
    //if the comment is a comment from the current user or from an admin
    if (isCurrentAdmin() || isCurrentUser($comment->comment_author) || (isAdmin($comment->comment_author) && isMyReply($comment))) {
      echo '</ul>';
    }
 }

  function start_el(&$output, $comment, $depth = 0, $args = array(), $id = 0) {
    $depth++;
    $GLOBALS['comment_depth'] = $depth;
    $GLOBALS['comment'] = $comment;

    if (!empty($args['callback'])) {
      call_user_func($args['callback'], $comment, $args, $depth);
      return;
    }

    extract($args, EXTR_SKIP); 

    //if the comment is a comment from the current user or from an admin
    if (isCurrentAdmin() || isCurrentUser($comment->comment_author) || (isAdmin($comment->comment_author) && isMyReply($comment))) {
    ?>
    <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media comment-' . get_comment_ID()); ?>>
      <?php include(locate_template('templates/comment.php')); ?>
    <?php
    }
  }

  function end_el(&$output, $comment, $depth = 0, $args = array()) {
    if (!empty($args['end-callback'])) {
      call_user_func($args['end-callback'], $comment, $args, $depth);
      return;
    }

    //if the comment is a comment from the current user or from an admin
    if (isCurrentAdmin() || isCurrentUser($comment->comment_author) || (isAdmin($comment->comment_author) && isMyReply($comment))) {
      // Close ".media-body" <div> located in templates/comment.php, and then the comment's <li>
      echo "</div></li>\n";
    }
  }
}

function roots_get_avatar($avatar, $type) {
  if (!is_object($type)) { return $avatar; }

  $avatar = str_replace("class='avatar", "class='avatar pull-left media-object", $avatar);
  return $avatar;
}
add_filter('get_avatar', 'roots_get_avatar', 10, 2);
