<?php
/*
Template Name: Prox Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
   
  <div class="container">
      <div class="main_info">
        <div class="text-center">
          <a href="#">
            <img src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/logo-soon.png">
          </a>
        </div>
        <h1 class="white-box-shadow text-center">Próximamente</h1>
      </div>
    </div>	

<?php endwhile; ?>
