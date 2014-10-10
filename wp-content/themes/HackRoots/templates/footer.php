<footer class="content-info" role="contentinfo">
	<div class="container">
		
	</div>
</footer>

<?php wp_footer(); ?>

<?php 
$current_user = wp_get_current_user();
$logoutlink = wp_logout_url();
if(isset($current_user)){ 
	echo("<div id='username-text' class='hidden-xs hidden-sm hidden-md hidden-lg'>".$current_user->display_name."</div>");
	
}else{
	echo("<div id='username-text' class='hidden-xs hidden-sm hidden-md hidden-lg'>Usuario</div>");
}
?>
<a style="display: none;"   id="logoutPerfil" href="<?php echo wp_logout_url(get_bloginfo('url')); ?>" title="Logout">
	Cerrar sesión
</a>
<script> 
	$(function() { 
		$(".menu-username>a").text($("#username-text").text()); 
		
		//Menu superior Boton de editar
		//$(".editperfil").find("a").attr("href",$("#editPerfil").attr('href'));

		//Menu superior: Boton de Salir
		$(".outperfil").find("a").attr("href",$("#logoutPerfil").attr('href'));
		$(".outperfil").find("a").html("<span class='glyphicon glyphicon-off'></span>");
		// $("#editPerfil").remove();
	});
	
</script> 