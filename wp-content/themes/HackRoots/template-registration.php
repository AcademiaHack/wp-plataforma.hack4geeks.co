<?php
/*
Template Name: Registration Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
	<h3>Template para el Registro de Usuarios</h3>
	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
