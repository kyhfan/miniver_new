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

			$portfolio_query		= "INSERT INTO ".$_gl['portfolio_info_table']."(serial_code, template_gubun, webYN, project_company_name, project_name, project_category, project_client, project_brand_issue, project_creative, reg_date) values('".$serial_code."','".$template_gubun."','".$webYN."','".$project_company_name."','".$project_name."','".$project_category."','".$project_client."','".$project_brand_issue."','".$project_creative."','".date("Y-m-d H:i:s")."')";
			$portfolio_result		= mysqli_query($my_db, $portfolio_query);

			if ($portfolio_result)
				$flag	= "Y";
			else
				$flag	= "N";

			echo $flag;
		break;

		case "show_portfolio_list" :
			$target	= $_REQUEST['target'];
			$list_query		= "SELECT * FROM ".$_gl['portfolio_info_table']." WHERE 1 ORDER BY idx DESC";
			$list_result		= mysqli_query($my_db, $list_query);
			$innerHTML	= "<thead>";
			$innerHTML	.= "<tr>";
			$innerHTML	.= "<th>템플릿</th>";
			$innerHTML	.= "<th>웹사이트 이미지 사용여부</th>";
			$innerHTML	.= "<th>프로젝트 업체명</th>";
			$innerHTML	.= "<th>프로젝트 명</th>";
			$innerHTML	.= "<th>프로젝트 카테고리</th>";
			$innerHTML	.= "<th>프로젝트 클라이언트</th>";
			$innerHTML	.= "<th>브랜드 이슈</th>";
			$innerHTML	.= "<th>크리에이티브</th>";
			$innerHTML	.= "<th>메인 이미지</th>";
			$innerHTML	.= "<th>중간 이미지1</th>";
			$innerHTML	.= "<th>중간 이미지2</th>";
			$innerHTML	.= "<th>중간 이미지3</th>";
			$innerHTML	.= "<th>웹 이미지1</th>";
			$innerHTML	.= "<th>웹 이미지2</th>";
			$innerHTML	.= "<th>웹 이미지3</th>";
			$innerHTML	.= "<th>웹 이미지4</th>";
			$innerHTML	.= "<th>웹 이미지5</th>";
			$innerHTML	.= "<th>등록일</th>";
			$innerHTML	.= "</tr>";
			$innerHTML	.= "</thead>";
			$innerHTML	.= "<tbody>";
			//$i	= 1;
			while ($list_data = mysqli_fetch_array($list_result))
			{
				$innerHTML	.= "<tr>";
				$innerHTML	.= "<td>".$list_data['template_gubun']."</td>";
				$innerHTML	.= "<td>".$list_data['webYN']."</td>";
				$innerHTML	.= "<td>".$list_data['project_company_name']."</td>";
				$innerHTML	.= "<td>".$list_data['project_name']."</td>";
				$innerHTML	.= "<td>".$list_data['project_category']."</td>";
				$innerHTML	.= "<td>".$list_data['project_client']."</td>";
				$innerHTML	.= "<td>".$list_data['project_brand_issue']."</td>";
				$innerHTML	.= "<td>".$list_data['project_client']."</td>";
				$innerHTML	.= "<td><img src='".str_replace("../../../","../../",$list_data['main_image'])."' width='80px'></td>";
				$innerHTML	.= "<td><img src='".str_replace("../../../","../../",$list_data['middle_image1'])."' width='80px'></td>";
				$innerHTML	.= "<td><img src='".str_replace("../../../","../../",$list_data['middle_image2'])."' width='80px'></td>";
				$innerHTML	.= "<td><img src='".str_replace("../../../","../../",$list_data['middle_image3'])."' width='80px'></td>";
				$innerHTML	.= "<td><img src='".str_replace("../../../","../../",$list_data['web_image1'])."' width='80px'></td>";
				$innerHTML	.= "<td><img src='".str_replace("../../../","../../",$list_data['web_image2'])."' width='80px'></td>";
				$innerHTML	.= "<td><img src='".str_replace("../../../","../../",$list_data['web_image3'])."' width='80px'></td>";
				$innerHTML	.= "<td><img src='".str_replace("../../../","../../",$list_data['web_image4'])."' width='80px'></td>";
				$innerHTML	.= "<td><img src='".str_replace("../../../","../../",$list_data['web_image5'])."' width='80px'></td>";
				$innerHTML	.= "<td>".$list_data['reg_date']."</td>";
				$innerHTML	.= "</tr>";
				//$i++;
			}
			$innerHTML	.= "</tbody>";
			echo $innerHTML;
		
		break;
	}

?>