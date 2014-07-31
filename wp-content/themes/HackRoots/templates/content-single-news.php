<?php while (have_posts()) : the_post(); ?>
  <!-- <pre>
    <h3><?php var_dump(get_the_category()[0]->cat_ID); ?></h3>
  </pre>
  <hr> -->
  <h3>Template para los post de noticias</h3>

  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
