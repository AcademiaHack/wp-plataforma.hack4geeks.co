<footer class="content-info" role="contentinfo">
  <div class="container">
    
  </div>
</footer>

<?php wp_footer(); ?>

<?php 
    $current_user = wp_get_current_user();

	if(isset($current_user)){
		echo("<div id='username-text' class='hidden-xs hidden-sm hidden-md hidden-lg'>".$current_user->display_name."</div>");
	}else{
		echo("<div id='username-text' class='hidden-xs hidden-sm hidden-md hidden-lg'>Usuario</div>");
	}
?>
<script> 
	$(function() { 
		$(".menu-username>a").text($("#username-text").text()); 
	});
	 
</script> 