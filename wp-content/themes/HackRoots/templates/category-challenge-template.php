<?php get_template_part('templates/page', 'header'); 
global $wpdb;
 
$category =get_queried_object(); 

$nimagen = get_tax_meta($category->term_id,'text_cat_id'); 
$nanterior= $nimagen-1;
$naanterior = $nanterior-2;
$nposterior = $nimagen+1;
$npposterior = $nimagen+2;
$lanterior= $nimagen-1;
$laanterior = $nanterior-2;
$lposterior = $nanterior+1;
$lpposterior = $nanterior+2;
if ($nimagen-1<=0)
{
	$nanterior = 0;
	$naanterior = 0;
}
else if ($nimagen-2<=0)
{
	$naanterior = 0;
}
else if ($nimagen-1<=0)
{
	$nanterior = 0;
	$naanterior = 0;
}
else if ($nimagen+1>=56)
{
	$nposterior = 0;
	$npposterior = 0;
}
else if ($nimagen+2>=56)
{ 
	$npposterior = 0;
}
$posts = query_posts( 'cat='.$category->term_id	 ); 

?>

<header class="reto-header">
	<div class="badges">
		<div class="badges">
			<div class="badge-container off">
				 
					<img class="img-responsive badge-img off" src="wp-content/themes/HackRoots/assets/img/cat/<?php echo $naanterior?>.png" alt="">
			 
			</div>
			<div class="badge-container off">
				 
					<img class="img-responsive badge-img off" src="wp-content/themes/HackRoots/assets/img/cat/<?php echo $nanterior?>.png" alt="">
				 
			</div>
			<div class="badge-container">
			 
					<img class="img-responsive badge-img on" src="wp-content/themes/HackRoots/assets/img/cat/<?php echo $nimagen?>.png" alt="">
				 
			</div>
			<div class="badge-container off">
				 
					<img class="img-responsive badge-img off" src="wp-content/themes/HackRoots/assets/img/cat/<?php echo $nposterior?>.png" alt="">
				 
			</div>
			<div class="badge-container off">
				 
					<img class="img-responsive badge-img off" src="wp-content/themes/HackRoots/assets/img/cat/<?php echo $npposterior?>.png" alt="">
				 
			</div>
		</div>
	</div>
</header>

<div class="reto-background">
	<div class="container">
		<h1 class="text-center">
			<?php echo $category->name ?>
		</h1>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<p class="text-center">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elit lacus, tristique nec lacus ut, vulputate interdum risus. Etiam facilisis, odio id tincidunt eleifend, felis massa scelerisque est, at lobortis leo libero vel quam. Duis porttitor vehicula quam vitae dignissim. Curabitur accumsan lobortis diam, quis adipiscing ligula adipiscing id. Quisque suscipit, enim ac blandit sollicitudin, sem enim aliquam sapien, a fermentum enim lacus sit amet nunc. Morbi vitae volutpat sem. In consectetur a diam eu tempor. Morbi ornare velit vitae lectus vulputate, eu posuere lectus rhoncus.
				</p>
			</div>
		</div>
		<div class="row">
		<?php  
			foreach ($posts as $post){
					 
		?>
			<div class="col-sm-6"> 
				<img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID)) ?>" alt="">
				<h2 class="text-center"><?php echo $post->post_title ?></h2>
				<a href="<?php echo $post->guid ?>" class="btn btn-primary btn-block btn-flat btn-large">
					<img src="wp-content/themes/HackRoots/assets/img/list-hexagon.png" alt="">
					<?php _e('¡Hazlo!','roots'); ?>
				</a>
			</div>
			 
		<?php }	?>
		</div>
	</div>
</div>