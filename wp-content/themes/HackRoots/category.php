<?php 
    
   $queried_object = get_queried_object();
   // echo "<pre><h5>"; var_dump(get_category_depth()); echo "</h5></pre>";

   if ($queried_object->category_parent == 0) {
     if($queried_object->cat_ID == 2){
       get_template_part('templates/category', 'news-template');
     }else{
       get_template_part('templates/category', 'sprint-template');
     }
   } else {
      get_template_part('templates/category', 'challenge-template');
   }
 ?>

