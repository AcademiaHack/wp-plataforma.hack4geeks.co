<?php 

	 $path =  plugin_dir_url(__FILE__);  // define path to link and scripts



	 $pageURL = get_permalink();



	 $sign = strpos($pageURL,'?')?'&':'?';





	//print_r($_REQUEST);die;	

	 extract($_REQUEST);







	 if($login1)



	 {



	 	include 'UPB_register_file.php';



	 }



	 else if($login2)



	 {



	 	include 'UPB_login_file.php';



	 }



	 else if($login4)



	 {



	 	include 'UPB_view_profile_file.php';



	 }



	 else if($login5)



	 {



	 	include 'UPB_edit_profile_file.php';



	 }



	 else



	 {



	//	$path = WP_PLUGIN_URL."/ultimate_profile_builder/";



	 	?>



	 	<?php /*?>  <link type="text/css" href="<?php echo $path; ?>css/style.css" rel="stylesheet" /><?php */?>

	 	<?php include 'UPB_theme.php'; ?>

	 	<?php



	 	$user_login = $_POST['user_login'];



	 	if($user_login)



	 	{



	 		$lostErr= "El usuario o correo electrónico no se encuentran registrados";



	 		$lostErrC = 'lostErr';



	 	}



	 	else



	 	{



	 		$lostErrC = 'noErr';



	 	}



	 	global $wpdb;



	 	$wp_usermeta=$wpdb->prefix."usermeta";



	 	$wp_users=$wpdb->prefix."users";



	 	if(username_exists( $user_login ))



	 	{

	 		$userstatus = 1;

	 		$user_id = username_exists( $user_login );



	 		$user_info = get_userdata($user_id);



	 		$user_email = $user_info->user_email;



	 		$random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );



	 		wp_set_password( $random_password, $user_id );







	 		$subject = get_bloginfo('name');



	 		$subject .= " - Lost Password";



	 		$message = "This is your new password : " . $random_password;







	 		wp_mail( $user_email, $subject, $message );



	 		?>



	 		<style type="text/css">



	 			#recoverErr



	 			{



	 				display:none;



	 				width:300px;



	 			}



	 		</style>



	 		<div id="upb-form">  







	 			<div class="main-edit-profile" align="left">



	 				Contraseña enviada al correo.



	 				<br />

	 				<div id="main-upb-form">  

	 					 


 

   <div class="col-sm-4 col-sm-offset-4">
            <div class="row">
              <div class="col-sm-6">
                <a class="btn btn-primary btn-block" href="<?php echo site_url(); ?>">
                  Volver al inicio
                </a>
              </div>
              <div class="col-sm-6">
                <a class="btn btn-primary btn-block" href="<?php echo $pageURL; ?><?php echo $sign; ?>login2=1" title="Logout">
                	Volver al login
                </a>
              </div>
            </div>
          </div>

	 						 


	 					</div>

	 				</div>

	 			</div>





	 		</div>



	 		<?php



	 	}



	 	else if (email_exists( $user_login ))



	 	{

	 		$userstatus = 1;

	 		$user_id = email_exists( $user_login );



	 		$user_email = $user_login;



	 		$random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );



	 		wp_set_password( $random_password, $user_id );







	 		$subject = get_bloginfo('name');



	 		$subject .= " - Lost Password";



	 		$message = "This is your new password : " . $random_password;







	 		wp_mail($user_email, $subject, $message);



	 		?>



	 		<div class="main-edit-profile" align="center">



	 			Contraseña enviada al correo indicado.



	 			<br />



	 			<div class="margin-left">

 <div class="col-sm-4 col-sm-offset-4">
            <div class="row">
              <div class="col-sm-6">
                <a class="btn btn-primary btn-block" href="<?php echo site_url(); ?>">
                  Volver al inicio
                </a>
              </div>
              <div class="col-sm-6">
                <a class="btn btn-primary btn-block" href="<?php echo $pageURL; ?><?php echo $sign; ?>login2=1" title="Logout">
                	Volver al login
                </a>
              </div>
            </div>
          </div>

	 				 



	 			</div>



	 		</div>



	 		<?php



	 	}



	 	else



	 	{

	 		$userstatus = 0;



	 		?>



	 		<style type="text/css">





	 			.noErr{



	 				display:none;



	 				width:300px;



	 				margin: 6px 0 !important;					



	 			}



	 		</style>



	 		<?php



	 	}



	 	?>



	 	<script language="javascript" type="text/javascript">



	 		function validate123()



	 		{



	 			var a = document.getElementById("user_login").value;



	 			if(a == "" || a == NULL)



	 			{



	 				document.getElementById('recoverErr').innerHTML='Campo requerido';



	 				document.getElementById('recoverErr').style.display = 'block';



	 				document.getElementById("user_login").focus();



	 				return false;



	 			}



	 			else



	 			{



	 				return true;



	 			}



	 		}



	 	</script>

	 	<?php if($userstatus==0) : ?>

	 		<form method="post" action="" id="lostpasswordform" name="lostpasswordform" onsubmit="javascript:return validate123();">
	 			<div class="container">
	 				<div class="row">
	 					<div class="col-sm-4 col-sm-offset-4">
	 						<label for="user_login">
	 							Usuario / Correo electrónico
	 						</label>
	 						<input type="text" size="20" value="" class="form-control" id="user_login" name="user_login">
	 						<div class="reg_frontErr <?php echo $lostErrC; ?>" id="recoverErr"><?php echo $lostErr; ?></div>
	 						<p class="login-info">Por favor introduzca su correo o nombre de usuario y le enviaremos su contraseña a la brevedad.</p>
	 						<input type="submit" value="Enviar" class="btn btn-primary btn-block" id="PRSubmit" name="PRSubmit">
	 					</div>
	 				</div>
	 			</div>
	 		</form>

	 	<?php endif; ?>

	 	<?php



	 }



	 ?>