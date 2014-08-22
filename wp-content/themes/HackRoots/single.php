 
<?php
	$noticias_id = get_cat_ID('noticias');
	 
	if(get_the_category()[0]->cat_ID == $noticias_id){
	 
		get_template_part('templates/content', 'single-news'); 
	}else{ 
		get_template_part('templates/content', 'single-challenge'); 
	}
?>
