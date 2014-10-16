<?php
/*
Template Name: Login Template
*/
$homeURL = get_home_url();
?>

<header class="login-header text-center">
	<img src="/wp-content/themes/HackRoots/assets/img/full-logo.png" alt="">
</header>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php 
	if(is_user_logged_in()){	
?>
	<script> 
		setTimeout(function(){ window.location = "<?php echo $homeURL ?>"; }, 0);
	</script>
<?php
	}
?>


