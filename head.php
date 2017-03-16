<?
	include_once "config.php";

	if ($gubun == "MOBILE")
		echo "<script>location.href='./m/".basename($_SERVER['PHP_SELF'])."?".$_SERVER['QUERY_STRING']."';</script>"
?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="작지만 큰 아이디어. 본질을 추구합니다. 디지털광고대행사 미니버타이징" />
	<meta name="title" content="미니버타이징" />
	<meta name="keywords" content="" />
	<meta property="og:title" content="MINIVERTISING" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://minivertising.kr/miniver_new/images/miniver_main.jpg" />
	<meta property="og:site_name" content="MINIVERTISING" />
	<meta property="og:description" content="작지만 큰 아이디어. 본질을 추구합니다. 디지털광고대행사 미니버타이징" />
	<link rel="shortcut icon" type="image/x-icon" href="http://minivertising.kr/miniver_new/images/favicon.ico" />
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/style_mini.css">
	<link rel="stylesheet" href="./lib/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="./lib/font-awesome-4.7.0/css/font-awesome.min.css">
	<link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />
	<script src="./js/jquery-1.11.2.min.js"></script>
	<script src="./js/selectivizr-min.js"></script>
	<script src="./js/modernizr-custom.js"></script>
	<script src="./js/main.js"></script>
<?
    if ($IE8 == "Y")
    {
?>
	<script src="./lib/bxslider/jquery.bxslider_ie8.js"></script>
<?
    }else{
?>
	<script src="./lib/bxslider/jquery.bxslider.js"></script>
<?
    }
?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
	<style>
	.bx-wrapper .bx-viewport
	{
		-moz-box-shadow: none;
		-webkit-box-shadow: none;
		box-shadow: none;
	}

	.bx-wrapper img
	{
		margin-left: auto;
		margin-right: auto;
	}
	</style>
</head>
