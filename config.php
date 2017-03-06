<?php
	//session_save_path($_SERVER['DOCUMENT_ROOT']."/session");
	session_save_path($_SERVER['DOCUMENT_ROOT']."/miniver_new/session");
	session_start();

	header("Content-Type: text/html; charset=UTF-8");
	//환경설정 파일
	include_once "include/global.php"; 				//변수정보
	include_once "include/function.php"; 			//함수정보
	include_once "include/dbi.php"; 				//DB 연결정보
	include_once "include/dir.php"; 				//경로정보
	include_once "include/phprandom.php"; 			//랜덤함수

	mysqli_query ($my_db,"set names utf8");
	// 모바일 체크
	$mobile_agent = array("iPhone","iPod","iPad","Android","Blackberry","SymbianOS|SCH-M\d+","Opera Mini", "Windows ce", "Nokia", "sony" );
	$check_mobile = "N";
	for($i=0; $i<sizeof($mobile_agent); $i++){
		if(stripos( $_SERVER['HTTP_USER_AGENT'], $mobile_agent[$i] )){
			$check_mobile = "Y";
			break;
		}
	}
	if($check_mobile == "Y")
		$gubun = "MOBILE";
	else
		$gubun = "PC";
?>