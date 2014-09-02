<?php 

get_template_part('templates/page', 'header'); 
global $wpdb;

$category =get_queried_object();  
 $args = array(  
  'orderby' => 'id',
  'order' => 'ASC',  
  'hierarchical' =>0,
  'hide_empty' =>0
  );
$testcat = get_categories($args);
$keynumber=0;  
foreach ($testcat as $key => $value){
    if (get_category_new($value)>1){ 
    	 
    	if ($value->term_id==$category->term_id) {
    		$keynumber = $key;  
    	}
    
    }
 } 
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
	$nlposterior = $testcat[$keynumber+1]->term_id;
	$nlpposterior = $testcat[$keynumber+2]->term_id;

}
else if ($nimagen-2<=0)
{
	$naanterior = 0;
	$nlaanterior = $testcat[$keynumber-2]->term_id;
	$nlposterior = $testcat[$keynumber+1]->term_id;
	$nlpposterior = $testcat[$keynumber+2]->term_id;
}
else if ($nimagen+1>=56)
{
	$nposterior = 0;
	$npposterior = 0;
	$nlposterior = $testcat[$keynumber+1]->term_id;
	$nlanterior = $testcat[$keynumber-1]->term_id;
	$nlaanterior = $testcat[$keynumber-2]->term_id;
}
else if ($nimagen+2>=56)
{ 
	$npposterior = 0;
	$nlanterior = $testcat[$keynumber-1]->term_id;
	$nlaanterior = $testcat[$keynumber-2]->term_id;
}
else
{
	$nlanterior = $testcat[$keynumber-1]->term_id;
	$nlaanterior = $testcat[$keynumber-2]->term_id;
	$nlposterior = $testcat[$keynumber+1]->term_id;
	$nlpposterior = $testcat[$keynumber+2]->term_id;
echo "string";
	echo $nlanterior;echo "<br/>";
	echo $nlaanterior;echo "<br/>";
	echo $nlposterior;echo "<br/>";
	echo $nlpposterior;echo "<br/>";

}
$posts = query_posts( 'cat='.$category->term_id	 ); 

?>

<!-- Agregando el caret al header -->
<script>$(".menu-actividades").attr("class","active");</script>

<header class="reto-bg">
	<div class="container">
		<div class="badge-boxes">
			<div class="badge-box off">
				<?php if ($nlaanterior!=0) : ?>

						<a href="<?php  echo get_category_link($nlaanterior)?>" >
						<img class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $naanterior?>.png" alt=""></a>
				<?php else : ?>
					<img class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $naanterior?>.png" alt="">
			
				<?php endif; ?>
			</div>
			<div class="badge-box off">
						<?php if ($nlanterior!=0) : ?>
								<a href="<?php  echo get_category_link($nlanterior)?>" >
								<img href="<?php  echo get_category_link($nlanterior)?>" class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $nanterior?>.png" alt=""></a>
					<?php else : ?>
						<img class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $nanterior?>.png" alt="">
				
				<?php endif; ?>
	</div>
			<div class="badge-box on">
				<img  class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $nimagen?>.png" alt="">
			</div>
			<div class="badge-box off">
					<?php if ($nlposterior!=0) : ?>
				<a href="<?php  echo get_category_link($nlposterior)?>" ><img href="<?php  echo get_category_link($nlposterior)?>" class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $nposterior?>.png" alt=""></a>
			<?php else : ?>
	<img class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $nposterior?>.png" alt="">
			
			<?php endif; ?></div>
			<div class="badge-box off">
					<?php if ($nlpposterior!=0) : ?>
				<a href="<?php  echo get_category_link($nlpposterior)?>" ><img href="<?php  echo get_category_link($nlpposterior)?>" class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $npposterior?>.png" alt=""></a>
			<?php else : ?>
	<img class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $npposterior?>.png" alt="">
			
			<?php endif; ?></div>
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
				 <?php echo $category->category_description ?>
				 </p>
			</div>
		</div>
		<div class="row">
			<?php  
			foreach ($posts as $post){

				?>
				<div class="col-sm-6 col-md-4">
					<h2 class="reto-title text-center"><?php echo $post->post_title ?></h2>
					<img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID)) ?>" alt="">
					<a href="<?php echo $post->guid ?>" class="btn btn-primary btn-block btn-flat btn-large">
						<img src="/wp-content/themes/HackRoots/assets/img/list-hexagon.png" alt="">
						<?php _e('¡Hazlo!','roots'); ?>
					</a>
				</div>

				<?php }	?>
			</div>
		</div>
	</div>
