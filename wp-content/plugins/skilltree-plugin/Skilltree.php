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
		add_user_meta( $user->ID, 'user_skilltree', '');
	}
}
register_activation_hook(__FILE__, 'skilltree_activation');

function skilltree_deactivation() {
	// Array of WP_User objects.
	$users = get_users( 'orderby=ID&role=' );
	// Add the corresponding meta to the users
	foreach ( $users as $user ) {
		if ( ! delete_user_meta( $user->ID, 'user_skilltree' ) ) {
		  echo "Ooops! Error al borrar esta informacion!: ".$user->ID;
		}
	}
}
register_deactivation_hook(__FILE__, 'skilltree_deactivation');

add_action( 'user_register', 'skilltree_user_registration_save');
function skilltree_user_registration_save( $user_id ) {
	add_user_meta( $user_id, 'user_skilltree', '');
}

add_action( 'delete_user', 'skilltree_user_delete' );
function skilltree_user_delete( $user_id ) {
	if ( ! delete_user_meta( $user_id, 'user_skilltree' ) ) {
	    echo "Ooops! Error al borrar esta informacion!: ".$user->ID;
	}
}

function skilltree_enqueues() 
{
	//Stylesheets
	wp_register_style('skilltree_layout_css', plugins_url('css/layout.css', __FILE__));
	wp_enqueue_style('skilltree_layout_css');
	
	//JS libraries
	wp_register_script('knockout', plugins_url('vendor/knockout.min.js', __FILE__));
	wp_register_script('skilltree_js', plugins_url('js/skilltree.js', __FILE__));
	wp_register_script('skilltree_default', plugins_url('default.js', __FILE__));
	wp_enqueue_script('knockout');
	wp_enqueue_script('skilltree_js');
	wp_enqueue_script('skilltree_default');

}
add_action('wp_enqueue_scripts', 'skilltree_enqueues');
add_action('admin_enqueue_scripts', 'skilltree_enqueues');

// We need some CSS to position the paragraph
function skilltree_css() {
	echo "<style type='text/css'></style>";
}
add_action( 'admin_head', 'skilltree_css' );

function skilltree_add_menus(){
	add_users_page('Usuarios > Arboles de Talentos', 'Arboles de Talentos', 'administrator', 'skilltree.php', 'skilltree_display');
}
add_action('admin_menu', 'skilltree_add_menus');


function skilltree_display(){
	$users = get_users( 'orderby=ID&role=' );

	echo '<h1>Arboles de talentos</h1>';
	echo '<label for="skilltree_userDropdown">Usuario </label> ';
	echo '<select id="skilltree_userDropdown"> ';
	foreach ( $users as $user ) {
		echo '<option value="'.$user->ID.'">'.$user->display_name.'</option>';
	}
	echo '</select><input type="submit" value="Guardar"><br>';
	echo '<h2>Arbol de talentos de <span id="username_title"></span></h2>';
	
	// $users = get_users( 'orderby=ID&role=' );
	// // $users = get_users( array( 'fields' => array( 'ID' ),
	// // 						   'orderby' => 'ID'  ) );
	// // Array of WP_User objects.
	// foreach ( $users as $user ) {
	// 	echo '<pre>' . $user->ID . '</pre>';
	// }

	echo skilltree_render_toString();
	echo '<hr>';
}

function skilltree_render_toString(){
	$talent_tree = '<div class="ltIE9-hide">
						<div class="page open">
							<div class="talent-tree">
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

	return $talent_tree;
}


?>