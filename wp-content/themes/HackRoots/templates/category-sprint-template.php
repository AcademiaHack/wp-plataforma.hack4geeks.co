<?php 

get_template_part('templates/page', 'header');

$activity = get_category_by_slug('activities');
$args = array(
  'orderby' => 'slug',
  'order' => 'ASC',  
  'hierarchical' =>0,
  'hide_empty' =>0,
  'parent' =>strval($activity->cat_ID)
  );
$categories = get_categories($args);
$args = array(  
  'orderby' => 'slug',
  'order' => 'ASC',  
  'hierarchical' =>0,
  'hide_empty' =>0,
  'parent' =>strval($value->cat_ID)
  ); 

$active_week = 4;
  ?>
  <div id="badges_carousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Wrapper for slides -->

    <div class="carousel-inner">

      <?php  

      foreach ($categories as $key => $value){
        
        $block_value = get_tax_meta($value->cat_ID,'text_cat_id');
        $unlocked_cat = ($block_value == 9000);
        $fullfilled_cat = ($block_value > 9000);        

        $args = array(
          'orderby' => 'id',
          'order' => 'ASC',  
          'hierarchical' =>0,
          'hide_empty' =>0,
          'parent' =>strval($value->cat_ID)
          );
        $category = get_categories($args);
        ?>
        <div class="item <?php if ($key==$active_week-1){echo active;}?>" name="sprint-<?php echo $key;?>">
          <h1 class="text-center">
            <?php echo $value->name ?>
          </h1>
          <div class="badges">
            <a class="left carousel-control" href="#badges_carousel" role="button" data-slide="prev">
              <img class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/arrow-left.png" alt="">
            </a>
            <a class="right carousel-control" href="#badges_carousel" role="button" data-slide="next">
              <img class="img-responsive" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/arrow-right.png" alt="">
            </a>
            <?php  
            foreach ($category as $count => $cat){  
              if (($count==0)&&(!isset($primera))){
                $primera = $cat;
              } 
              ?>

            <div class="badge-container">
             <?php if($unlocked_cat){ ?>
              <a href="<?php  echo get_category_link( $cat->cat_ID )?>">
             <?php } ?>
                <img class="img-responsive badge-img" title="<?php echo $cat->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/cat/<?php  echo get_tax_meta($cat->term_id,'text_cat_id'); ?>.png" alt="">
                <?php if($unlocked_cat){ ?>
                  <img class="img-responsive black_hexagon"  title="<?php echo $cat->name; ?>"  src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
                <?php } else if($fullfilled_cat){ ?>
                  <img class="img-responsive lockedBG"  title="<?php echo $cat->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
                  <img class="img-responsive locked"  title="<?php echo $cat->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/fullfilled.png">
                <?php } else { ?>
                  <img class="img-responsive lockedBG"  title="<?php echo $cat->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/black_hexagon.png">
                  <img class="img-responsive locked"  title="<?php echo $cat->name; ?>" src="<?php echo get_theme_root_uri(); ?>/HackRoots/assets/img/locked.png">
                <?php } ?>
             <?php if($unlocked_cat){ ?>
              </a>
             <?php } ?>
            </div>
            <?php } ?>
          </div>
        </div>
        <?php
      }
      ?>
    
    </div>
      <div class="text-center">
        <div class="badge-title" id="badge-title">
          <?php echo $primera->name ?>
        </div>
      </div>
    <div id="breadcrumb">
      <a class="next-prev" data-target="#badges_carousel" data-slide="prev"><div class="arrow-left"></div></a>
      <ol class="carousel-indicators">

        <?php 
        foreach ($categories as $key => $value){
         ?>
         <li data-target="#badges_carousel" data-slide-to="<?php echo $key ?>" <?php if ($key==$active_week-1){echo "class='active'";}?>><?php echo $key+1 ?></li>
         <?php } ?>

       </ol>
       <a class="next-prev" data-target="#badges_carousel" data-slide="next"><div class="arrow-right"></div></a>
     </div>

   </div>

 </div>

 <script type="text/javascript">

   $(function() { 
     $(".black_hexagon").hover(function(){ 
      $("#badge-title").text(this.title);
    }); 
     $(".badge-img").hover(function(){ 
      $("#badge-title").text(this.title);
    });
     $(".locked").hover(function(){ 
      $("#badge-title").text(this.title);
    });

     $("#badges_carousel").on('slid.bs.carousel', function(event) {
       var allListElements = $( ".badges" );
       var d = $(".active").find(allListElements).children().first().find("a").find("img");
       $("#badge-title").text(d[0].title);
     });
   });
 </script>
