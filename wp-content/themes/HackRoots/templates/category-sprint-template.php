<?php get_template_part('templates/page', 'header');
 $activity = get_category_by_slug('activities');
$args = array(
  'orderby' => 'id',
  'order' => 'ASC',  
  'hierarchical' =>0,
  'hide_empty' =>0,
  'parent' =>strval($activity->cat_ID)
  );
$categories = get_categories($args);
 ?>
<div id="badges_carousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  <?php 
  foreach ($categories as $key => $value){
   
    $args = array(
  'orderby' => 'id',
  'order' => 'ASC',  
  'hierarchical' =>0,
  'hide_empty' =>0,
  'parent' =>strval($value->cat_ID)
  );
$category = get_categories($args);
	?>
    <div class="item <?php if ($key==0){echo active;}?>">
      <h1 class="text-center"><?php echo $value->name ?></h1>
      <div class="badges">
      	<div class="badges">
		<?php  
			foreach ($category as $cat){  
		?>
		
      		<div class="badge-container">
      			<a href="<?php  echo get_category_link( $cat->cat_ID )?>">
      				<img class="img-responsive badge-img" title="<?php echo $cat->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php  echo get_tax_meta($cat->term_id,'text_cat_id'); ?>.png" alt="">
      			</a>
      		</div>
      		 <?php } ?>
      	</div>
      </div>
    </div>
	 <?php
	 }
	 ?>
    
  </div>

  <!-- Indicators -->
  <div id="breadcumb">
      <a class="next-prev" data-target="#badges_carousel" data-slide="prev"><div class="arrow-left"></div></a>
        <ol class="carousel-indicators">
      <?php 
       foreach ($categories as $key => $value){
     ?>
          <li data-target="#badges_carousel" data-slide-to="<?php echo $key ?>" <?php if ($key==0){echo "class='active'";}?>><?php echo $key+1 ?></li>
      <?php } ?>
          
        </ol>
      <a class="next-prev" data-target="#badges_carousel" data-slide="next"><div class="arrow-right"></div></a>
  </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#badges_carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#badges_carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>

</div>