<?php
  if (post_password_required()) {
    return;
  }
?>

<div class="container">
  <section id="comments">


    <?php if (have_comments()) : ?>
      <h3><?php printf(_n('Una respuesta to &ldquo;%2$s&rdquo;', '%1$s respuestas a &ldquo;%2$s&rdquo;', get_comments_number(), 'roots'), number_format_i18n(get_comments_number()), get_the_title()); ?></h3>

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
      </div
    
    <?php endif; ?>
  </section><!-- /#comments -->
   
  <section id="respond">
    <?php if (comments_open()) : ?>
      <?php $comment_args = array( 'title_reply'=>'',

  'fields' => apply_filters( 'comment_form_default_fields', array(

  'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Nombre' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .

          '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',   

      'email'  => '<p class="comment-form-email">' .

                  '<label for="email">' . __( 'Correo electrónico' ) . '</label> ' .

                  ( $req ? '<span>*</span>' : '' ) .

                  '<input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

      'url'    => '' ) ),

      

      'comment_notes_after' => '',

  );

  comment_form($comment_args); ?>
     
      
    <?php endif; ?>
    
    <script>
    
    $(function() {
   $( "#comment-form-upload" ).remove(); 
  });
    </script>
  </section>
</div>
