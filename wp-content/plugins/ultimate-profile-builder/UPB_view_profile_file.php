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
			
			<header class="profile">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 text-center">
							<div class="user-pic">
								<div class="white-border">
									<div class="hexagon hexagon1">
										<div class="hexagon-in1">
											<div class="hexagon-border"></div>
										</div>
									</div>
								</div>
								<div class="hexagon hexagon2">
									<div class="hexagon-in1">
										<?php



										if($avtar_image[0])
										{
											echo '<div class="hexagon-in2" style="background-image: url(' . $avtar_image[0] . ');"></div>';		
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
						</div>
						<div class="col-sm-6">
							<h1><?php the_author_meta('first_name',$current_id); ?>&nbsp;<?php the_author_meta('last_name',$current_id); ?></h1>
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
								<div class="col-sm-6">
									<a class="btn btn-default btn-flat btn-block" href="<?php echo $pageURL; ?><?php echo $sign; ?>login5=1" title="Edit Profile">
										Editar
									</a>
								</div>
								<div class="col-sm-6">
									<a class="btn btn-default btn-flat btn-block" href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">
										Cerrar sesión
									</a>
								</div>
							</div>  
						</div>
					</div>
				</div>
			</header>

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