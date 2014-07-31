<?php
	if(get_the_category()[0]->cat_ID == 2){
		get_template_part('templates/content', 'single-news'); 
	}else{
		get_template_part('templates/content', 'single-challenge'); 
	}
?>
