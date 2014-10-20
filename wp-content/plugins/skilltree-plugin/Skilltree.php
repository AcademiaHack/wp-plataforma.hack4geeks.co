<?php
/*
Plugin Name: Skilltree
Plugin URI: http://heyyeyaaeyaaaeyaeyaa.com/
Description: Skilltree plugin for wordpress 
Author: Jorge Fuentes
Version: 0.1
Author URI: http://heyyeyaaeyaaaeyaeyaa.com/
*/

function skilltree_activation() {
	// Array of WP_User objects.
	$users = get_users( 'orderby=ID&role=' );
	// Add the corresponding meta to the users
	foreach ( $users as $user ) {
		add_user_meta( $user->ID, 'user_skilltree', '_');
	}
}
register_activation_hook(__FILE__, 'skilltree_activation');

function skilltree_deactivation() {
	// Array of WP_User objects.
	// $users = get_users( 'orderby=ID&role=' );
	// // Add the corresponding meta to the users
	// foreach ( $users as $user ) {
	// 	if ( ! delete_user_meta( $user->ID, 'user_skilltree' ) ) {
	// 	  echo "Ooops! Error al borrar esta informacion!: ".$user->ID;
	// 	}
	// }
}
register_deactivation_hook(__FILE__, 'skilltree_deactivation');

add_action( 'user_register', 'skilltree_user_registration_save');
function skilltree_user_registration_save( $user_id ) {
	add_user_meta( $user_id, 'user_skilltree', '_');
}

add_action( 'delete_user', 'skilltree_user_delete' );
function skilltree_user_delete( $user_id ) {
	if ( ! delete_user_meta( $user_id, 'user_skilltree' ) ) {
	    echo "Ooops! Error al borrar esta informacion!: ".$user->ID;
	}
}

/* STYLES AND SCRIPTS ENQUEUES*/
/* Admin enqueues */
function skilltree_enqueues() 
{	
	if(is_page('Perfil')) {
		//Stylesheets
		wp_register_style('skilltree_layout_css', plugins_url('css/layout.css', __FILE__));
		wp_enqueue_style('skilltree_layout_css');
		
		//JS libraries
		// wp_register_script('knockout', plugins_url('vendor/knockout.min.js', __FILE__));
		// wp_register_script('skilltree_js', plugins_url('js/skilltree.js', __FILE__));
		// wp_register_script('skilltree_profile_default', plugins_url('profile_init.js', __FILE__));
		wp_enqueue_script('knockout', plugins_url('vendor/knockout.min.js', __FILE__),false,false,true);
		wp_enqueue_script('skilltree_js', plugins_url('js/skilltree.js', __FILE__),false,false,true);
		wp_enqueue_script('skilltree_profile_default', plugins_url('profile_init.js', __FILE__),false,false,true);
	}
}
add_action('wp_enqueue_scripts', 'skilltree_enqueues');

/* Profile enqueues */
function skilltree_admin_enqueues() 
{
	//Stylesheets
	wp_register_style('skilltree_layout_css', plugins_url('css/layout.css', __FILE__));
	wp_enqueue_style('skilltree_layout_css');
	
	//JS libraries
	// wp_register_script('knockout', plugins_url('vendor/knockout.min.js', __FILE__));
	// wp_register_script('skilltree_js', plugins_url('js/skilltree.js', __FILE__));
	// wp_register_script('skilltree_admin_default', plugins_url('admin_init.js', __FILE__));

	wp_enqueue_script('knockout', plugins_url('vendor/knockout.min.js', __FILE__),false,false,true);
	wp_enqueue_script('skilltree_js', plugins_url('js/skilltree.js', __FILE__),false,false,true);
	wp_enqueue_script('skilltree_admin_default', plugins_url('admin_init.js', __FILE__),false,false,true);
	wp_enqueue_script('skilltree_scripts_default', plugins_url('defaultScripts.js', __FILE__),false,false,true);
}
add_action('admin_enqueue_scripts', 'skilltree_admin_enqueues');

/*CSS if needed*/

// We need some CSS to position the paragraph
function skilltree_css() {
	echo "<style type='text/css'></style>";
}
add_action( 'admin_head', 'skilltree_css' );

/* Admin Menu adding */

function skilltree_add_menus(){
	add_users_page('Usuarios > árboles de Habilidades', 'Árboles de Habilidades', 'administrator', 'skilltree.php', 'skilltree_display');
}
add_action('admin_menu', 'skilltree_add_menus');

/* Admin Menu contents and front end */

function skilltree_display(){
	$users = get_users( 'orderby=ID&role=' );

	$selected = $_POST["skilltree_userDropdown"];
	$userid = $_POST["userID"];

	if(isset($userid))
		echo '<h1>Árbol de habilidades de '.get_user_by('id', $userid)->display_name.'</h1>';
	else
		echo '<h1>Árboles de habilidades</h1>';

	echo '<div id="feedback" hidden></div>';

	echo '<form method="post" action="'.home_url('/').'wp-admin/users.php?page=skilltree.php">';
	echo '<label name="label_userDropdown" for="skilltree_userDropdown">Seleccione un usuario: </label><br>';
	echo '<select id="skilltree_userDropdown" name="skilltree_userDropdown"> ';
	foreach ( $users as $user ) {
		$skilltree_hash = get_user_meta( $user->ID, 'user_skilltree' );
		if(isset($selected) && $skilltree_hash[0] == $selected ){
			echo '<option id="'.$user->ID.'" value="'.$skilltree_hash[0].'" selected>'.$user->display_name.'</option>';
		}else{
			echo '<option id="'.$user->ID.'" value="'.$skilltree_hash[0].'">'.$user->display_name.'</option>';
		}
	}
	echo '</select>';
	echo '<input id="userid" type="text" name="userID" hidden/>';
	echo '<input type="submit" id="chooseButton" value="Elegir">';
	echo '</form>';

	// echo '<h2>árbol de habilidades de <span id="username_title"></span></h2>';
	
	if(isset($selected) ){
		echo skilltree_admin_render_toString($userid);
		echo '<button id="saveButton">Guardar</button><br>';
	}
}

/* Ajax functions */
// ajax is called from defaultScripts.js
// save_tree action is then called from ajax in that js function.

add_action( 'wp_ajax_save_tree', 'save_tree_callback' );
function save_tree_callback() {
	if ( ! update_user_meta($_POST["user"]["id"], 'user_skilltree', $_POST["user"]["hashString"]) ){
		echo '<div id="message" class="alert alert-danger" role="alert">';
		echo "<strong>Error!</strong> No se pudo guardar el árbol de habilidades.<a class='alert-link'>&times;</a>";
	}else{
		echo '<div id="message" class="alert alert-success" role="alert">';
		echo "<strong>Exito!</strong> Se ha guardado el árbol para ".get_user_by( "id",  $_POST["user"]["id"])->display_name."!<a class='alert-link'>&times;</a>";
		// echo "Guardare, id: ".$_POST["user"]["id"]." - hashString:".$_POST["user"]["hashString"];	
	}
	echo '</div>';
	
	die(); // this is required to terminate immediately and return a proper response
}

/* Renderizarion function */

function skilltree_admin_render_toString($userID){
	$skill_tree = '<div class="ltIE9-hide">
						<div class="page open">
							<div class="talent-tree">
								<h2 id="hashString" data-bind="text:hash" style="visibility: hidden"></h2>
								<h2 id="userID" style="visibility: hidden">'.$userID.'</h2>
				 				<!--ko foreach: skills-->
								<!--ko if: hasDependencies-->
								<div data-bind="css: { \'can-add-points\': canAddPoints, \'has-points\': hasPoints, \'has-max-points\': hasMaxPoints }, attr: { \'data-skill-id\': id }" class="skill">
									<div data-bind="css: { active: dependenciesFulfilled }" class="skill-dependency"></div>
								</div>
								<!--/ko-->
								<!--/ko-->
								<!--ko foreach: skills-->
								<div data-bind="css: { \'can-add-points\': canAddPoints, \'has-points\': hasPoints, \'has-max-points\': hasMaxPoints }, attr: { \'data-skill-id\': id }" class="skill">
									<div class="icon-container">
										<div class="icon"></div>
									</div>
									<div class="frame">
										<div class="tool-tip">
											<h3 data-bind="text: title" class="skill-name"></h3>
											<div data-bind="text: helpMessage" class="help-message"></div>
											<div data-bind="html: description" class="skill-description"></div>
											
											<div data-bind="if: currentRankDescription" class="current-rank-description">Current rank: <span data-bind="	text: currentRankDescription"></span></div>
											<div data-bind="if: nextRankDescription" class="next-rank-description">Next rank: <span data-bind="	text: nextRankDescription"></span></div>
											
											<ul class="skill-links">
												<!--ko foreach: links-->
												<li>
													<a data-bind="attr: { href: url }, click: function(){ 
														_gaq.push([\'_trackEvent\',$parent.title, label, url]);
														return true;
														}, text: label" target="_blank"></a>
												</li>
												<!--/ko-->
											</ul>
											<!-- <ul class="stats"> -->
												<!--ko foreach: stats-->
												<!-- <li><span class="value">+<span data-bind="text: value"></span></span> <span data-bind="	text: title" class="title"></span></li> -->
												<!--/ko-->
											<!-- </ul> -->
											<!--ko if: talentSummary-->
											<!-- <div class="talent-summary">Grants <span data-bind="text: talentSummary"></span></div> -->
											<!--/ko-->
											
										</div>
										<div class="skill-points"><span data-bind="text: points" class="points"></span>/<span data-bind="	text: maxPoints" class="max-points"></span></div>
										<div data-bind="click: addPoint, rightClick: removePoint" class="hit-area"></div>
									</div>
								</div>
								<!--/ko-->
							</div>
						</div>
					</div>
					<div class="ltIE9-show ltIE9-warning">
						<h2>Please upgrade your browser!</h2>
						<p>Try one of these free options:</p>
						<ul>
							<li><a onclick="_gaq.push([\'_trackEvent\',\'external link\',\'upgrade browser\',\'Chrome\']);" href="http://google.com/chrome" target="_blank">Google Chrome</a></li>
							<li><a onclick="_gaq.push([\'_trackEvent\',\'external link\',\'upgrade browser\',\'MSIE\']);" href="http://windows.microsoft.com/en-US/internet-explorer/download-ie" target="_blank">Microsoft Internet Explorer 10</a></li>
							<li><a onclick="_gaq.push([\'_trackEvent\',\'external link\',\'upgrade browser\',\'Firefox\']);" href="www.mozilla.org/en-US/firefox" target="_blank">Mozilla Firefox</a></li>
						</ul>
					</div>';

	return $skill_tree;
}

function skilltree_profile_render_toString(){
	if ( is_user_logged_in() )
	{
		//skilltree
		$logged_user = wp_get_current_user();
		$skilltree_hash = get_user_meta( $logged_user->id, 'user_skilltree' );

		$skill_tree = '<div class="ltIE9-hide">
							<div class="page open">
								<div class="talent-tree" id="'.$skilltree_hash[0].'">
					 				<h2>Mi árbol de habilidades</h2>
									<!--ko foreach: skills-->
									<!--ko if: hasDependencies-->
									<div data-bind="css: { \'can-add-points\': canAddPoints, \'has-points\': hasPoints, \'has-max-points\': hasMaxPoints }, attr: { \'data-skill-id\': id }" class="skill">
										<div data-bind="css: { active: dependenciesFulfilled }" class="skill-dependency"></div>
									</div>
									<!--/ko-->
									<!--/ko-->
									<!--ko foreach: skills-->
									<div data-bind="css: { \'can-add-points\': canAddPoints, \'has-points\': hasPoints, \'has-max-points\': hasMaxPoints }, attr: { \'data-skill-id\': id }" class="skill">
										<div class="icon-container">
											<div class="icon"></div>
										</div>
										<div class="frame">
											<div class="tool-tip">
												<h3 data-bind="text: title" class="skill-name"></h3>
												<div data-bind="text: helpMessage" class="help-message"></div>
												<div data-bind="html: description" class="skill-description"></div>
												
												<div data-bind="if: currentRankDescription" class="current-rank-description">Current rank: <span data-bind="	text: currentRankDescription"></span></div>
												<div data-bind="if: nextRankDescription" class="next-rank-description">Next rank: <span data-bind="	text: nextRankDescription"></span></div>
												
												<ul class="skill-links">
													<!--ko foreach: links-->
													<li>
														<a data-bind="attr: { href: url }, click: function(){ 
															_gaq.push([\'_trackEvent\',$parent.title, label, url]);
															return true;
															}, text: label" target="_blank"></a>
													</li>
													<!--/ko-->
												</ul>
												<!-- <ul class="stats"> -->
													<!--ko foreach: stats-->
													<!-- <li><span class="value">+<span data-bind="text: value"></span></span> <span data-bind="	text: title" class="title"></span></li> -->
													<!--/ko-->
												<!-- </ul> -->
												<!--ko if: talentSummary-->
												<!-- <div class="talent-summary">Grants <span data-bind="text: talentSummary"></span></div> -->
												<!--/ko-->
												
											</div>
											<div class="skill-points"><span data-bind="text: points" class="points"></span>/<span data-bind="	text: maxPoints" class="max-points"></span></div>
											<!-- <div data-bind="click: addPoint, rightClick: removePoint" class="hit-area"></div> -->
										</div>
									</div>
									<!--/ko-->
								</div>
							</div>
						</div>
						<div class="ltIE9-show ltIE9-warning">
							<h2>Please upgrade your browser!</h2>
							<p>Try one of these free options:</p>
							<ul>
								<li><a onclick="_gaq.push([\'_trackEvent\',\'external link\',\'upgrade browser\',\'Chrome\']);" href="http://google.com/chrome" target="_blank">Google Chrome</a></li>
								<li><a onclick="_gaq.push([\'_trackEvent\',\'external link\',\'upgrade browser\',\'MSIE\']);" href="http://windows.microsoft.com/en-US/internet-explorer/download-ie" target="_blank">Microsoft Internet Explorer 10</a></li>
								<li><a onclick="_gaq.push([\'_trackEvent\',\'external link\',\'upgrade browser\',\'Firefox\']);" href="www.mozilla.org/en-US/firefox" target="_blank">Mozilla Firefox</a></li>
							</ul>
						</div>';

		$skill_tree .= '<div class="blocked">
							<img class="img-responsive candado center-block" title="Patrones y convenciones en diseño, Bootstrap." src="http://localhost:8080/wp-content/themes/HackRoots/assets/img/locked.png">
						 </div>';

		return $skill_tree;

	}else{
		return '';
	}
}


?>
