<?php
	include_once "config.php";

	switch ($_REQUEST['exec'])
	{
		case "insert_contact":
			$company_name       = $_POST['company_name'];
			$contact_name       = $_POST['contact_name'];
			$contact_phone      = $_POST['contact_phone'];
			$contact_email      = $_POST['contact_email'];
			$contact_content    = $_POST['contact_content'];


			$contact_query		= "INSERT INTO ".$_gl['contact_info_table']."(ip_addr, company_name, contact_name, contact_phone, contact_email, contact_content, reg_date) values('".$_SERVER['REMOTE_ADDR']."','".$company_name."','".$contact_name."','".$contact_phone."','".$contact_email."','".$contact_content."','".date("Y-m-d H:i:s")."')";
			$contact_result   = mysqli_query($my_db, $contact_query);

            if ($contact_result)
                $flag   = "Y";
            else
                $flag   = "N";

			echo $flag;

		break;

	}
?>