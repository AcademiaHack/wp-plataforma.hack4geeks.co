
<?php  
  if (($comment->comment_author==wp_get_current_user()->user_login )||(current_user_can( 'manage_options' ))):
?> 
<?php echo get_avatar($comment, $size = '64'); ?>
<div class="media-body">
  <h4 class="media-heading"><?php echo get_comment_author_link(); ?></h4>
  <time datetime="<?php echo get_comment_date('c'); ?>"><?php printf(__('%1$s', 'roots'), get_comment_date(),  get_comment_time()); ?></time>

  <?php if ($comment->comment_approved == '0') : ?>
    <div class="alert alert-info">
      <?php _e('Your comment is awaiting moderation.', 'roots'); ?>
    </div>
  <?php endif; ?>

  <?php comment_text(); ?>
  <div class="row">
    <div class="col-sm-12 text-right">
      <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
      <?php $url = clean_url(wp_nonce_url( "/wp-admin/comment.php?action=deletecomment&p=$comment->comment_post_ID&c=$comment->comment_ID", "delete-comment_$comment->comment_ID" ));?>
      <a href="<?php echo $url ?>" class="btn btn-danger">
        <span class="glyphicon glyphicon-trash"></span>
      </a>
    </div>
  </div>
<?php endif; ?>