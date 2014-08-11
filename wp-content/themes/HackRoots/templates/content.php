<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title">
		<img src="wp-content/themes/HackRoots/assets/img/white-key-left.png" alt="">
    	<a href="<?php the_permalink(); ?>">
    		<?php the_title(); ?>
    	</a>
		<img src="wp-content/themes/HackRoots/assets/img/white-key-right.png" alt="">		
    </h2>
  </header>
  <div class="entry-summary">
  	<h2><?php the_title(); ?></h2>
  	<?php get_template_part('templates/entry-meta'); ?>
    <?php the_excerpt(); ?>
  </div>
</article>
