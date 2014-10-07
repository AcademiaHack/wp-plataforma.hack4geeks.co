<?php

	$path =  plugin_dir_url(__FILE__);  // define path to link and scripts
	$pageURL = get_permalink();
	$sign = strpos($pageURL,'?')?'&':'?';
	global $wpdb;
	$upb_fields =$wpdb->prefix."upb_fields";
	function checkfieldname($fieldname,$value)
	{
		global $wpdb;
		$upb_option=$wpdb->prefix."upb_option";
		$select="select value from $upb_option where fieldname='".$fieldname."'";
		$data = $wpdb->get_var($select);
		//$data=mysql_query($select);
		if($data==$value)
		{
			return true;	
		}
		else
		{
			return	false;	
		}
	}	
	extract($_REQUEST);
	if($login1)
	{
		include 'UPB_register_file.php';
	}
	else if($login2)
	{
		include 'UPB_login_file.php';
	}
	else if($login3)
	{
		include 'UPB_recover_password_file.php';
	}
	else if($login5)
	{
		include 'UPB_edit_profile_file.php';
	}
	else
	{
		?>
		

		<?php include 'UPB_theme.php'; ?>

		<?php
		if ( is_user_logged_in() )
		{
			?>

			<script language="javascript" type="text/javascript">
				function toggleDivFun1(a)
				{
					$(a).parent('.toggleDiv1').hide();
					$(a).parent('.toggleDiv1').parent('.toggleDiv').children('.toggleDiv2').show();
				}
				function toggleDivFun2(a)
				{
					$(a).parent('.toggleDiv2').hide();
					$(a).parent('.toggleDiv2').parent('.toggleDiv').children('.toggleDiv1').show();
				}
			</script>
			<?php
			$current_user = wp_get_current_user();
			$current_id = $current_user->ID;
			$avtar_image = get_user_meta( $current_id, 'avtar_image' );
			$user_info = get_userdata($current_id);
			$user_description = $user_info->user_description;
			?>
			
			<div class="profile">
				<div class="row">
					<div class="blue-sidebar">
						<div class="row">
							<div class="col-sm-12 text-center">
								<div class="user-pic">
									<img src="../wp-content/themes/HackRoots/assets/img/default.jpg" alt="">

									<?php



									if($avtar_image[0])
									{
										echo '<img src="$avtar_image[0]">';		
									}
									else
									{
										?>

										<div class="hexagon-in2"></div>

										<?php
									}
									?>

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h3><?php the_author_meta('first_name',$current_id); ?>&nbsp;<?php the_author_meta('last_name',$current_id); ?></h3>
								<div class="user-info">

									<?php if (checkfieldname("upb_usernameshowhide","yes")==true ) : ?>
										<div class="user-name-info"><img src="/wp-content/themes/HackRoots/assets/img/list-hexagon.png" alt=""> <?php echo " @";the_author_meta('user_login',$current_id); ?></div>
									<?php endif; ?>
									<?php if (checkfieldname("upb_emailshowhide","yes")==true) : ?>
										<div class="user-email-info"><img src="/wp-content/themes/HackRoots/assets/img/list-hexagon.png" alt=""><?php the_author_meta('user_email',$current_id); ?></div>
									<?php endif; ?>
									<!-- 	<?php if (checkfieldname("upb_websiteshowhide","yes")==true) : ?>
											<div class="user-web-info"><strong>Página web:</strong> <?php the_author_meta('user_url',$current_id); ?></div>
										<?php endif; ?>
										<br>
										<?php if (checkfieldname("upb_aimshowhide","yes")==true && (get_user_meta($current_id,'aim', true) !="")) : ?>
											<div class="user-aim-info"><strong>AIM:</strong> <?php the_author_meta('aim',$current_id); ?></div>
										<?php endif; ?>
										<?php if (checkfieldname("upb_yahooimshowhide","yes")==true && (get_user_meta($current_id,'yim', true) !="")) : ?>
											<div class="user-yahoo-info"><strong>Yahoo:</strong> <?php the_author_meta('yim',$current_id); ?></div>
										<?php endif; ?>
										<?php if (checkfieldname("upb_jabbergoogletalkshowhide","yes")==true && (get_user_meta($current_id,'jabber', true) !="")) : ?>
											<div class="user-gtalk-info"><strong>Gtalk:</strong> <?php the_author_meta('jabber',$current_id); ?></div>
										<?php endif; ?> -->
									</div>
									<div class="row">
										<div class="col-sm-12">
											<a class="btn btn-default btn-flat btn-block" id="editPerfil" href="<?php echo $pageURL; ?><?php echo $sign; ?>login5=1" title="Edit Profile">
												Editar
											</a>
										</div>
									</div>  
								</div>
							</div>
						</div>
						<div class="right-space">
							<!-- Talent Tree -->

								<div class="ltIE9-hide">
									<div class="page open">
										<!-- <header>
											<img src="img/logo.png" class="logo">
										</header> -->
										<div class="talent-tree">
							 				<h2 class="start-helper" data-bind="css:{active:noPointsSpent}">Start here!</h2>
											<!--ko foreach: skills-->
											<!--ko if: hasDependencies-->
											<div data-bind="css: { 'can-add-points': canAddPoints, 'has-points': hasPoints, 'has-max-points': hasMaxPoints }, attr: { 'data-skill-id': id }" class="skill">
												<div data-bind="css: { active: dependenciesFulfilled }" class="skill-dependency"></div>
											</div>
											<!--/ko-->
											<!--/ko-->
											<!--ko foreach: skills-->
											<div data-bind="css: { 'can-add-points': canAddPoints, 'has-points': hasPoints, 'has-max-points': hasMaxPoints }, attr: { 'data-skill-id': id }" class="skill">
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
																	_gaq.push(['_trackEvent',$parent.title, label, url]);
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
										<div class="avatar">
											<div class="portrait">
												<img data-bind="attr: { src: portraitURL }">
											</div>
											<div class="details">
												<input data-bind="value: avatarName" class="h2">
												<div class="level">Level <span data-bind="	text: level" class="value"></span> Web Developer</div>
												<!-- <div data-bind="text: talentSummary" class="talent-summary"></div> -->
												<!-- <ul class="stats"> -->
													<!--ko foreach: stats-->
													<!-- <li><span data-bind="text: title" class="title"></span>: <span data-bind="	text: value" class="value"></span></li> -->
													<!--/ko-->
												<!-- </ul> -->
											</div>
										</div>
										<div class="sign-off">
											<h2>It's dangerous to go alone!</h2>
											<p>Throughout the dark corners of the web, doors are always opening to new challenges that will test the mettle of even the most stout developer. Let these watering holes provide a brief respite and an opportunity for you and other heroes to band together:
											</p>
											<ul>
												<li><a onclick="_gaq.push(['_trackEvent','external link','footer','A List Apart']);" href="http://alistapart.com/" target="_blank">A List Apart</a></li>
												<li><a onclick="_gaq.push(['_trackEvent','external link','footer','Smashing Magazine']);" href="http://www.smashingmagazine.com/" target="_blank">Smashing Magazine</a></li>
												<li><a onclick="_gaq.push(['_trackEvent','external link','footer','Code Academy']);" href="http://www.codecademy.com/" target="_blank">Code Academy</a></li>
												<li><a onclick="_gaq.push(['_trackEvent','external link','footer','Stack Overflow']);" href="http://www.stackoverflow.com/" target="_blank">Stack Overflow</a></li>
												<li><a onclick="_gaq.push(['_trackEvent','external link','footer','reddit']);" href="http://www.reddit.com/r/webdesign/" target="_blank">reddit webdesign</a></li>
											</ul>
											<h3>Happy adventuring!</h3>
										</div>
									</div>
								</div>
								<div class="ltIE9-show ltIE9-warning">
									<img src="img/logo.png" class="logo">
									<h2>Please upgrade your browser!</h2>
									<p>Try one of these free options:</p>
									<ul>
										<li><a onclick="_gaq.push(['_trackEvent','external link','upgrade browser','Chrome']);" href="http://google.com/chrome" target="_blank">Google Chrome</a></li>
										<li><a onclick="_gaq.push(['_trackEvent','external link','upgrade browser','MSIE']);" href="http://windows.microsoft.com/en-US/internet-explorer/download-ie" target="_blank">Microsoft Internet Explorer 10</a></li>
										<li><a onclick="_gaq.push(['_trackEvent','external link','upgrade browser','Firefox']);" href="www.mozilla.org/en-US/firefox" target="_blank">Mozilla Firefox</a></li>
									</ul>
								</div>


						</div>
					</div>
				</div>

				<div id="upb-form">
				<!--<div> 
						<div class="my-post">

							<?php

							$user_post_count = count_user_posts( $current_id );

							if($user_post_count)
							{

								?>

								<h3>My Posts</h3>

								<?php

							}

							?>

							<p>

								<?php

								global $current_user;

								get_currentuserinfo();

								$author_query = array('posts_per_page' => '-1','author' => $current_user->ID);

								$author_posts = new WP_Query($author_query);

								while($author_posts->have_posts()) : $author_posts->the_post();

								?>

								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

									<?php

									the_title();

									?>

								</a>

								<br />

								<?php

								endwhile;

								?>

							</p>
						</div>
					</div>
				</div>
			-->
			<?php



		}



		else



		{



			?>

			<div id="upb-form">
				<div align="center">
					<br><br>
					<h4>Necesitas estar logueado para acceder a tu perfil</h4>
					<div class="col-sm-4 col-sm-offset-4">
						<div class="row">
							<div class="col-sm-6">
								<a class="btn btn-primary btn-block" href="<?php echo site_url(); ?>">
									Volver al inicio
								</a>
							</div>
							<div class="col-sm-6">
								<a class="btn btn-primary btn-block" href="<?php echo $pageURL; ?><?php echo $sign; ?>login2=1" title="Login">
									Iniciar sesión
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php



		}



	}



	?>
