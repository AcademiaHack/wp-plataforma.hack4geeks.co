<article <?php post_class(); ?>>
  <header>
    <div class="container">
      <h2 class="entry-title">
      <img src="/wp-content/themes/HackRoots/assets/img/white-key-left.png" alt="">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      <img src="/wp-content/themes/HackRoots/assets/img/white-key-right.png" alt="">   
      </h2>
    </div>
  </header>
  <div class="container">
    <div class="entry-summary">
      <?php get_template_part('templates/entry-meta'); ?>
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
