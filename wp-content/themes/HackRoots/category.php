<?php 
   $queried_object = get_queried_object();

   $noticias_id = get_cat_ID('noticias');
   
  // echo "<pre><h5>"; var_dump($queried_object->term_id); echo "</h5></pre>"; 

   if ($queried_object->category_parent == 0) {

     if($queried_object->cat_ID == $noticias_id){
       get_template_part('templates/category', 'news-template');
     }else{
       get_template_part('templates/category', 'sprint-template');
     }
   } else {
      get_template_part('templates/category', 'challenge-template');
   }
 ?>

