<?php
/*
Template Name: Login Template
*/
?>

<?php 
	$loginID = get_page_by_title('Login')->ID;
	if(is_user_logged_in()){
		$homeURL = get_home_url();
?>
	<script> window.location = "<?php echo $homeURL ?>"; </script>
<?php
	}else{
?>

<header class="login-header text-center">
	<img src="/wp-content/themes/HackRoots/assets/img/full-logo.png" alt="">
</header>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php } ?>