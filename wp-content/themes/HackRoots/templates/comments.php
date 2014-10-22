<?php
  if (post_password_required()) {
    return;
  }
?>

<section id="comments">
 
  <?php if (have_comments()) : ?>
     
    <ol class="media-list">
      <?php wp_list_comments(array('walker' => new Roots_Walker_Comment)); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'roots')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'roots')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>

    <?php if (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
      <div class="alert alert-warning">
        <?php _e('Comments are closed.', 'roots'); ?>
      </div>
    <?php endif; ?>
  <?php elseif(!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <?php _e('Comments are closed.', 'roots'); ?>
    </div>
	
  <?php endif; ?> 
</section><!-- /#comments -->
 
<section id="respond">
  <?php if (comments_open()) : ?>
    <?php $comment_args = array( 
      'title_reply'=>'','fields' => apply_filters( 'comment_form_default_fields', array(
      'author' => '<p class="comment-form-author">'.'<label for="author">' . __( 'Nombre' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) . '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
      'email'  => '<p class="comment-form-email">'.'<label for="email">' . __( 'Correo electrónico' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) . '<input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',
      'url'    => '' ) ),
      'comment_notes_after' => '',
      //'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><div id="comment" class="form-control comment-box" name="comment" cols="45" rows="8" aria-required="true" onClick="this.contentEditable=true"></div></p>',
      );

comment_form($comment_args); 

?>
	 
    
  <?php endif; ?>
  
  <script>
  
  $(function() {
  	$( "<div id='mergeOption'></div>" ).insertAfter( ".form-submit" ); 
  	$( "#comment-form-upload" ).appendTo( "#mergeOption" );
  	$( ".form-submit" ).appendTo( "#mergeOption" ); 
    
    $(".comment-box").contentEditable='true';

    $("#attachment").change(function(){
      var name = $(this).val().split('\\').pop().split('/').pop();
      console.log(name);
      $('#comment-form-upload').attr('data-content', ': '+name);

      //submit the form here
      

    });
  });
  </script>
</section><!-- /#respond -->
