<?php 
    
   $queried_object = get_queried_object();
   // echo "<pre><h5>"; var_dump(sizeof((get_ancestors($queried_object->cat_ID, 'category'))) ); echo "</h5></pre>";

   if ($queried_object->category_parent == 0) {
     if($queried_object->cat_ID == 2){
       get_template_part('templates/category', 'news-template');
     }else{
       get_template_part('templates/category', 'sprint-template');
     }
   } else {
        get_template_part('templates/category', 'challenge-template');
      }
   }
 ?>

