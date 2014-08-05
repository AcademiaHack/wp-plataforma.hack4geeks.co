<?php
/*
Template Name: Login Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
	<h3>Template para el Login</h3>
	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
