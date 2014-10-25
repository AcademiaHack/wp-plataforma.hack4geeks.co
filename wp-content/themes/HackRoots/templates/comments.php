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
  <?php 
    $commentField='<div class="comment-reply-content">
                      <div class="attachment-container">
                        <div class="attachment-img">
                          <button type="button" class="close close-att" hidden><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        </div>
                      </div>
                      <div class="comment-textarea-container">
                        <p class="comment-form-comment">
                          <label for="comment">' . _x( 'Comment', 'noun' ) . '</label>
                          <textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                        </p>
                      </div>
                    </div>';
   ?>
  <?php if (comments_open()) : ?>
    <?php $comment_args = array( 
      'title_reply'=>'','fields' => apply_filters( 'comment_form_default_fields', array(
      'author' => '<p class="comment-form-author">'.'<label for="author">' . __( 'Nombre' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) . '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
      'email'  => '<p class="comment-form-email">'.'<label for="email">' . __( 'Correo electrónico' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) . '<input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',
      'url'    => '' ) ),
      'comment_field' => $commentField,
      'comment_notes_after' => '',
);

comment_form($comment_args); 
?>
	 
    
  <?php endif; ?>
  
  <script>
  
  $(function() {
  	$( '#comment-form-upload' ).appendTo( '.attachment-container' );
    $( '#comment-form-upload' ).attr('data-content', "Examinar...");
    
    //Magical unicornical function to get a secure
    //temorary path to the image
    function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('.attachment-img').css('background-image','url('+e.target.result+')');
          }
          reader.readAsDataURL(input.files[0]);
      }
    }

    //Reset attachment function
    function resetAttachment(){
      //Reset the img
      $('.attachment-img').attr('style',"");
      //Reset the input
      var input = $("#attachment");
      input.replaceWith(input.val('').clone(true));
      //Reset the button name
      $('#comment-form-upload').attr('data-content', "Examinar...");
      //hide close button
      $(".close-att").attr('hidden',true);
    }

    //button to close the attachment
    $(".close-att").on('click',function(){
      resetAttachment();
    });

    //When the input changes...
    $("#attachment").change(function(){
      //show the close button
      $(".close-att").attr('hidden',false);
      
      //get the file name
      var name = $(this).val().split('\\').pop().split('/').pop();
      
      if(name == ""){
        resetAttachment();
      }else{     
        var ext = name.substring(name.lastIndexOf(".")+1,name.length).toLowerCase();
        
        //if its an iamge show a preview
        if(ext == "jpg" || ext == "jpeg" || ext == "png" || ext == "bmp" || ext == "gif" || ext == "tiff" || ext == "pdf"){
          $('.attachment-img').css('background-size','contain');
          readURL(this);
        }      
        $('#comment-form-upload').attr('data-content', name);
      }
    });

  });
  </script>
</section><!-- /#respond -->
