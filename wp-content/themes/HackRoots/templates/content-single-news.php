<?php while (have_posts()) : the_post(); ?>
   
  

  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
	<div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-12 text-justify">
      			 <?php the_content(); ?>
      			</div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
     <?php comments_template('/templates/commentsnew.php'); ?>
  </article>
<?php endwhile; ?>
