<?php
/*
Template Name: Login Template
*/
?>

<header class="login-header text-center">
	<img src="/wp-content/themes/HackRoots/assets/img/full-logo.png" alt="">
</header>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
