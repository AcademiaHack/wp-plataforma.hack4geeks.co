<?php

get_template_part('templates/page', 'header');
global $wpdb;

$category  = get_queried_object();
$args      = array(
    'orderby' => 'id',
    'order' => 'ASC',
    'hierarchical' => 0,
    'hide_empty' => 0
);
$testcat   = get_categories($args);
$keynumber = 0;
foreach ($testcat as $key => $value) {
    if (get_category_new($value) > 1) {
        
        if ($value->term_id == $category->term_id) {
            $keynumber = $key;
        }
        
    }
}
$args = array(
  'orderby' => 'id',
  'order' => 'ASC',  
  'hierarchical' =>0,
  'hide_empty' =>0,
  'parent' =>strval($activity->cat_ID)
  ); 
  $sprintslength = sizeof($testcat);
$nimagen     = get_tax_meta($category->term_id, 'text_cat_id');
$nanterior   = $nimagen - 1>0?$nimagen - 1:0;
$naanterior  = $nimagen - 2>0?$nimagen - 2:0;
$nposterior  = $nimagen + 1<=$sprintslength?$nimagen + 1:0;
$npposterior = $nimagen + 2<=$sprintslength?$nimagen + 2:0; 
 
 $nlanterior   = $nanterior>0?$testcat[$keynumber - 1]->term_id:0;
 $nlaanterior   = $naanterior>0?$testcat[$keynumber - 2]->term_id:0;
 $nlposterior   = $nposterior<=$sprintslength?$testcat[$keynumber + 1]->term_id:0;
 $nlpposterior   = $npposterior<=$sprintslength?$testcat[$keynumber + 2]->term_id:0;
    
$fullfilledaant = get_tax_meta($testcat[$keynumber - 2]->parent, 'text_cat_id') > 9000;
$fullfilledant = get_tax_meta($testcat[$keynumber - 1]->parent, 'text_cat_id') > 9000;
$fullfilledpost = get_tax_meta($testcat[$keynumber + 1]->parent, 'text_cat_id') > 9000;
$fullfilledppost = get_tax_meta($testcat[$keynumber + 2]->parent, 'text_cat_id') > 9000;

$unlockedaant = get_tax_meta($testcat[$keynumber - 2]->parent, 'text_cat_id') == 9000;
$unlockedant = get_tax_meta($testcat[$keynumber - 1]->parent, 'text_cat_id') == 9000;
$unlockedpost = get_tax_meta($testcat[$keynumber + 1]->parent, 'text_cat_id') == 9000;
$unlockedppost = get_tax_meta($testcat[$keynumber + 2]->parent, 'text_cat_id') == 9000;

?>

<!-- Agregando el caret al header -->
<script>$(".menu-actividades").attr("class","active");</script>

<header class="reto-bg">
	<div class="container">
		<div class="badge-boxes">
			<div class="badge-box off"> 
			<?php
				if ($nlaanterior != 0){
			?>
				<?php if($unlockedaant){ ?>
				 <a href="<?php echo get_category_link($nlaanterior); ?>" >
				<?php } ?>
				   <img class="img-responsive" title="<?php echo $testcat[$keynumber - 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $naanterior; ?>.png" alt="">
				   <?php if($unlockedaant){ ?>
				     <img class="img-responsive black_hexagon" title="<?php echo $testcat[$keynumber - 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
				   <?php } else if($fullfilledaant){ ?>
				     <img class="img-responsive lockedBG" title="<?php echo $testcat[$keynumber - 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
	            	 <img class="img-responsive locked" title="<?php echo $testcat[$keynumber - 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/fullfilled.png">
				   <?php } else { ?>
				     <img class="img-responsive lockedBG" title="<?php echo $testcat[$keynumber - 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
	            	 <img class="img-responsive locked" title="<?php echo $testcat[$keynumber - 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/locked.png">
				   <?php } ?>
				<?php if($unlockedaant){ ?>
				 </a>
				<?php } ?>
			<?php
				}else{
			?>
				<img class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $naanterior; ?>.png" alt="">
				<img class="img-responsive black_hexagon cero" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
			<?php
				}
			?>
			</div>
			
			<div class="badge-box off">
			<?php
				if ($nlanterior != 0){
			?>
				<?php if($unlockedant){ ?>
				 <a href="<?php echo get_category_link($nlanterior); ?>" >
				<?php } ?>
				   <img class="img-responsive" title="<?php echo $testcat[$keynumber - 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $nanterior; ?>.png" alt="">
				   <?php if($unlockedant){ ?>
				     <img class="img-responsive black_hexagon" title="<?php echo $testcat[$keynumber - 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
				   <?php } else if($fullfilledant){ ?>
				     <img class="img-responsive lockedBG" title="<?php echo $testcat[$keynumber - 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
	            	 <img class="img-responsive locked" title="<?php echo $testcat[$keynumber - 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/fullfilled.png">
				   <?php } else { ?>
				     <img class="img-responsive lockedBG" title="<?php echo $testcat[$keynumber - 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
	            	 <img class="img-responsive locked" title="<?php echo $testcat[$keynumber - 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/locked.png">
				   <?php } ?>
				<?php if($unlockedant){ ?>
				 </a>
				<?php } ?>
			<?php
				}else{
			?>
				<img class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $nanterior; ?>.png" alt="">
				<img class="img-responsive black_hexagon cero" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
			<?php
				}
			?>
			</div> 
			
			<div class="badge-box on">
				<img  class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $nimagen; ?>.png" alt="">
			</div>

			<div class="badge-box off"> 
			<?php
				if ($nlposterior != 0){
			?>
				<?php if($unlockedpost){ ?>
				 <a href="<?php echo get_category_link($nlposterior); ?>" >
				<?php } ?>
				   <img class="img-responsive" title="<?php echo $testcat[$keynumber + 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $nposterior; ?>.png" alt="">
				   <?php if($unlockedpost){ ?>
				     <img class="img-responsive black_hexagon" title="<?php echo $testcat[$keynumber + 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
				   <?php } else if($fullfilledpost){ ?>
				     <img class="img-responsive lockedBG" title="<?php echo $testcat[$keynumber + 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
	            	 <img class="img-responsive locked" title="<?php echo $testcat[$keynumber + 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/fullfilled.png">
				   <?php } else { ?>
				     <img class="img-responsive lockedBG" title="<?php echo $testcat[$keynumber + 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
	            	 <img class="img-responsive locked" title="<?php echo $testcat[$keynumber + 1]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/locked.png">
				   <?php } ?>
				<?php if($unlockedpost){ ?>
				 </a>
				<?php } ?>
			<?php
				}else{
			?>
				<img class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $nposterior; ?>.png" alt="">
				<img class="img-responsive black_hexagon cero" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
			<?php
				}
			?>
			</div>
			
			<div class="badge-box off">
			<?php
				if ($nlpposterior != 0){
			?>	
				<?php if($unlockedppost){ ?>
				 <a href="<?php echo get_category_link($nlpposterior); ?>" >
				<?php } ?>
				   <img class="img-responsive" title="<?php echo $testcat[$keynumber + 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $npposterior; ?>.png" alt="">
				   <?php if($unlockedppost){ ?>
				     <img class="img-responsive black_hexagon" title="<?php echo $testcat[$keynumber + 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
				   <?php } else if($fullfilledppost){ ?>
				     <img class="img-responsive lockedBG" title="<?php echo $testcat[$keynumber + 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
	            	 <img class="img-responsive locked" title="<?php echo $testcat[$keynumber + 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/fullfilled.png">
				   <?php } else { ?>
				     <img class="img-responsive lockedBG" title="<?php echo $testcat[$keynumber + 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
	            	 <img class="img-responsive locked" title="<?php echo $testcat[$keynumber + 2]->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/locked.png">
				   <?php } ?>
				<?php if($unlockedppost){ ?>
				 </a>
				<?php } ?>
			<?php
				}else{
			?>
				<img class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php echo $npposterior; ?>.png" alt="">
				<img class="img-responsive black_hexagon cero" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
			<?php
				}
			?>
			</div> 
		</div>
	</div>
</header>

<div class="reto-background">
	<div class="container">
		<h1 class="text-center">
		 	<?php echo $category->name; ?> 
		 
  
		</h1>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<p class="text-center">
					<?php echo $category->category_description; ?>
				</p>
			</div>
		</div>

		<h2><?php _e('Retos de la mañana:', 'roots'); ?></h2><br>
		<div class="row">
		<?php
			$postsManana = query_posts('cat=' . $category->term_id."&tag=manana&orderby=title&order=ASC");
			foreach ($postsManana as $post) {
		?>
			<div class="col-sm-6 col-md-4">
				<div class="title-vert-container">
					<h2 class="reto-title text-center"> <?php echo $post->post_title;?> </h2>
				</div>
				<div class="img-holder">
					<img class="img-responsive center-block reto-img" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>" alt="">
				</div>
				<a href="<?php echo get_permalink(); ?>" class="btn btn-primary btn-block btn-flat btn-large">
					<img src="/wp-content/themes/HackRoots/assets/img/list-hexagon.png" alt="">
					<?php _e('¡Hazlo!', 'roots'); ?>
				</a>
			</div>
		<?php
			}
		?>
		</div>

		<?php wp_reset_query(); ?>		
		
		<h2><?php _e('Retos de la tarde:', 'roots'); ?></h2><br>
		<div class="row">
		<?php
			$postsTarde = query_posts('cat='.$category->term_id."&tag=tarde&orderby=title&order=ASC");
			foreach ($postsTarde as $post) {
		?>
			<div class="col-sm-6 col-md-4">
				<div class="title-vert-container">
					<h2 class="reto-title text-center"> <?php echo $post->post_title;?> </h2>
				</div>
				<div class="img-holder">
					<img class="img-responsive center-block reto-img" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>" alt="">
				</div>
				<a href="<?php echo get_permalink(); ?>" class="btn btn-primary btn-block btn-flat btn-large">
					<img src="/wp-content/themes/HackRoots/assets/img/list-hexagon.png" alt="">
					<?php _e('¡Hazlo!', 'roots'); ?>
				</a>
			</div>
		<?php
			}
		?>
		<?php wp_reset_query(); ?>
		</div>
	</div>
</div>
