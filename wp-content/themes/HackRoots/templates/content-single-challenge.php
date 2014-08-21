<?php while (have_posts()) : the_post(); ?>
  <!-- <pre>
    <h3><?php var_dump(get_the_category()[0]->cat_ID); ?></h3>
  </pre>
  <hr> -->

  <article <?php post_class(); ?>>
    <div class="parent-category">
      <div class="container">
        <div class="pull-right">
          <span>Como buscar, HTML</span>
          <img class="small-category" src="wp-content/themes/HackRoots/assets/img/1_1.png" alt="">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-4 col-sm-offset-4 text-center">
              <img class="img-responsive" src="wp-content/themes/HackRoots/assets/img/challenge-accepted.jpg" alt="">
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
