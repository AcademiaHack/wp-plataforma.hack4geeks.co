<?php

	$selectedTabId = 1;
	if(isset($_REQUEST['submit']))
	{
		$selectedTabId = 2;
		if($_REQUEST['theme'])
		{
			mytable_add_option( 'upb_theme', $_REQUEST['theme']);
		}
		if($_REQUEST['autogeneratedepass']=="yes")
		{
			mytable_add_option( 'upb_autogeneratedepass', 'yes');
		}
		else
		{
			mytable_add_option( 'upb_autogeneratedepass', 'no');
		}
		if($_REQUEST['max_results'])
		{
			mytable_add_option( 'upb_profile_max_resutls', $_REQUEST['max_results'] );
		}
		if($_REQUEST['profilelistview'] == "table")
		{
			mytable_add_option( 'upb_profile_list_view', 'table');
		}
		else
		{
			mytable_add_option( 'upb_profile_list_view', 'box');
			if($_REQUEST['box_width'] == "1")
			{
				mytable_add_option( 'upb_profile_list_column', '1');
			}
			else if($_REQUEST['box_width'] == "2")
			{
				mytable_add_option( 'upb_profile_list_column', '2');
			}
			else if($_REQUEST['box_width'] == "3")
			{
				mytable_add_option( 'upb_profile_list_column', '3');
			}
			else
			{
				mytable_add_option( 'upb_profile_list_column', '4');
			}
		}
	}
	if(isset($_REQUEST['submit1']))
	{
		$selectedTabId = 3;
		if($_REQUEST['adminshowhide']=="yes")
		{
			mytable_add_option( 'upb_adminshowhide', 'yes');
		}
		else
		{
			mytable_add_option( 'upb_adminshowhide', 'no');
		}
		if($_REQUEST['editorshowhide']=="yes")
		{
			mytable_add_option( 'upb_editorshowhide', 'yes');
		}
		else
		{
			mytable_add_option( 'upb_editorshowhide', 'no');
		}
		if($_REQUEST['authorshowhide']=="yes")
		{
			mytable_add_option( 'upb_authorshowhide', 'yes');
		}
		else
		{
			mytable_add_option( 'upb_authorshowhide', 'no');
		}
		if($_REQUEST['contributorshowhide']=="yes")
		{
			mytable_add_option( 'upb_contributorshowhide', 'yes');
		}
		else
		{
			mytable_add_option( 'upb_contributorshowhide', 'no');
		}
		if($_REQUEST['subscribershowhide']=="yes")
		{
			mytable_add_option( 'upb_subscribershowhide', 'yes');
		}
		else
		{
			mytable_add_option( 'upb_subscribershowhide', 'no');
		}
	}
	if(isset($_REQUEST['RegCustomSubmit']))
	{
		$selectedTabId = 4;	
		mytable_add_option( 'Registration_Custom_Text', $_REQUEST['RegCustomText']);
		mytable_add_option( 'upb_usernameshowhide', $_REQUEST['usernameshowhide']);
		mytable_add_option( 'upb_nicknameshowhide', $_REQUEST['nicknameshowhide']);
		mytable_add_option( 'upb_emailshowhide', $_REQUEST['emailshowhide']);
		mytable_add_option( 'upb_websiteshowhide', $_REQUEST['websiteshowhide']);
		mytable_add_option( 'upb_aimshowhide', $_REQUEST['aimshowhide']);
		mytable_add_option( 'upb_yahooimshowhide', $_REQUEST['yahooimshowhide']);
		mytable_add_option( 'upb_jabbergoogletalkshowhide', $_REQUEST['jabbergoogletalkshowhide']);
		mytable_add_option( 'upb_biographicalinfoshowhide', $_REQUEST['aboutmeshowhide']);
	}
/*	if(isset($_REQUEST['submit2']))

	{

		if($_REQUEST['usernameshowhide']=="yes")

		{

			mytable_add_option( 'upb_usernameshowhide', 'yes');

		}

		else

		{

			mytable_add_option( 'upb_usernameshowhide', 'no');

		}



		if($_REQUEST['firstnameshowhide']=="yes")

		{

			mytable_add_option( 'upb_firstnameshowhide', 'yes');

		}

		else

		{

			mytable_add_option( 'upb_firstnameshowhide', 'no');

		}



		if($_REQUEST['lastnameshowhide']=="yes")

		{

			mytable_add_option( 'upb_lastnameshowhide', 'yes');

		}

		else

		{

			mytable_add_option( 'upb_lastnameshowhide', 'no');

		}



		if($_REQUEST['nicknameshowhide']=="yes")

		{

			mytable_add_option( 'upb_nicknameshowhide', 'yes');

		}

		else

		{

			mytable_add_option( 'upb_nicknameshowhide', 'no');

		}



		if($_REQUEST['displaynamepubliclyshowhide']=="yes")

		{

			mytable_add_option( 'upb_displaynamepubliclyshowhide', 'yes');

		}

		else

		{

			mytable_add_option( 'upb_displaynamepubliclyshowhide','no');

		}



		if($_REQUEST['emailshowhide']=="yes")

		{

			mytable_add_option( 'upb_emailshowhide', 'yes' );

		}

		else

		{

			mytable_add_option( 'upb_emailshowhide', 'no' );

		}



		if($_REQUEST['websiteshowhide']=="yes")

		{

			mytable_add_option( 'upb_websiteshowhide', 'yes' );

		}

		else

		{

			mytable_add_option( 'upb_websiteshowhide', 'no' );

		}	



		if($_REQUEST['aimshowhide']=="yes")

		{

			mytable_add_option( 'upb_aimshowhide', 'yes' );

		}

		else

		{

			mytable_add_option( 'upb_aimshowhide', 'no' );

		}



		if($_REQUEST['yahooimshowhide']=="yes")

		{

			mytable_add_option( 'upb_yahooimshowhide', 'yes' );

		}

		else

		{

			mytable_add_option( 'upb_yahooimshowhide', 'no' );

		}



		if($_REQUEST['jabbergoogletalkshowhide']=="yes")

		{

			mytable_add_option( 'upb_jabbergoogletalkshowhide', 'yes' );

		}

		else

		{

			mytable_add_option( 'upb_jabbergoogletalkshowhide', 'no' );

		}



		if($_REQUEST['biographicalinfoshowhide']=="yes")

		{

			mytable_add_option( 'upb_biographicalinfoshowhide', 'yes' );

		}

		else

		{

			mytable_add_option( 'upb_biographicalinfoshowhide', 'no' );

		}

	}

*/

	function mytable_add_option($fieldname,$value)
	{
		global $wpdb;
		$upb_option=$wpdb->prefix."upb_option";
		$update="update $upb_option set value='".$value."' where fieldname='".$fieldname."'";
		$wpdb->query($update);
		//mysql_query($update);
	}

	function checkfieldname($fieldname,$value)
	{
		global $wpdb;

		$upb_option=$wpdb->prefix."upb_option";

		$select="select * from $upb_option where fieldname='".$fieldname."'and value='".$value."'";
		$data = $wpdb->get_results($select);
		//$data=mysql_query($select);

			if($data[0]->value==$value)
			{
				return true;
			}
			else
			{
				return false;
			}

	}

?>