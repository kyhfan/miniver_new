<?php
	include_once "../../config.php";

	switch ($_REQUEST['exec'])
	{
		
		case "login_admin" :
			$admin_id	= $_REQUEST['admin_id'];
			$admin_pw	= $_REQUEST['admin_pw'];
			$admin_query		= "SELECT * FROM ".$_gl['admin_info_table']." WHERE admin_id='".$admin_id."'";
			$admin_result		= mysqli_query($my_db, $admin_query);
			$admin_data		= mysqli_fetch_array($admin_result);
			// 암호 검증
			if (validate_password($admin_pw,$admin_data['admin_pw']))
			{
				$update_query		= "UPDATE ".$_gl['admin_info_table']." SET admin_lastdate='".date("Y-m-d H:i:s")."' WHERE admin_id='".$admin_data['admin_id']."'";
				$update_result		= mysqli_query($my_db, $update_query);
				// 관리자 아이디, 이름 세션 생성
				$_SESSION['ss_admin_id']			= $admin_data['admin_id'];
				$_SESSION['ss_admin_name']		= $admin_data['admin_name'];
				$flag	= "Y";
			}else{
				$flag	= "N";
			}
			echo $flag;
		break;

		case "join_admin" :
			$admin_id			= $_REQUEST['admin_id'];
			$admin_pw			= $_REQUEST['admin_pw'];
			$admin_name		= $_REQUEST['admin_name'];
			$admin_pw = create_hash($admin_pw);
			$dupli_query		= "SELECT * FROM ".$_gl['admin_info_table']." WHERE admin_id='".$admin_id."'";
			$dupli_result		= mysqli_query($my_db, $dupli_query);
			$dupli_num		= mysqli_fetch_array($dupli_result);
			if ($dupli_num > 0)
			{
				$flag	= "D";
			}else{
				$admin_query		= "INSERT INTO ".$_gl['admin_info_table']."(admin_id,admin_pw,admin_name,admin_regdate) values('".$admin_id."','".$admin_pw."','".$admin_name."','".date('Y-m-d H:i:s')."')";
				$admin_result		= mysqli_query($my_db, $admin_query);
				if ($admin_result > 0)
					$flag	= "Y";
				else
					$flag	= "N";
			}
			echo $flag;
		break;

		case "insert_portfolio_info" :
			$template_gubun 		= $_REQUEST["template_gubun"];
			$webYN 					= $_REQUEST["webYN"];
			$project_company_name 	= $_REQUEST["project_company_name"];
			$project_name 			= $_REQUEST["project_name"];
			$project_category 		= $_REQUEST["project_category"];
			$project_client 		= $_REQUEST["project_client"];
			$project_brand_issue 	= $_REQUEST["project_brand_issue"];
			$project_creative 		= $_REQUEST["project_creative"];
			$serial_code 			= $_REQUEST["serial_code"];

			$portfolio_query		= "INSERT INTO ".$_gl['portfolio_info_table']."(serial_code, template_gubun, webYN, project_company_name, project_name, project_category, project_client, project_brand_issue, project_creative) values('".$serial_code."',".$template_gubun."','".$webYN."','".$project_company_name."','".$project_name."','".$project_category."','".$project_client."','".$project_brand_issue."','".$project_creative."')";
			$portfolio_result		= mysqli_query($my_db, $portfolio_query);

			if ($portfolio_result)
				$flag	= "Y";
			else
				$flag	= "N";

			echo $flag;
		break;
	}

?>