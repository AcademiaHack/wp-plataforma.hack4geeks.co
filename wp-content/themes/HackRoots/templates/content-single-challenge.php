<?php while (have_posts()) : the_post();

$nimagen = get_tax_meta(get_the_category()[0]->term_id,'text_cat_id'); 
?>
      

  <article <?php post_class(); ?>>
    <div class="parent-category">
      <div class="container">
        <div class="pull-right">
          <span>Como buscar, HTML</span>
          <img class="small-category" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $nimagen?>.png" alt="">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-4 col-sm-offset-4 text-center">
              <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( get_the_ID()))?>" alt="">
              <h1 class="entry-title"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      </footer>
      <?php comments_template('/templates/comments.php'); ?>
    </div>
  </article>
<?php endwhile; ?>
