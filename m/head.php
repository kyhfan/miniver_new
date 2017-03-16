<?
	include_once "../config.php";

	if ($gubun == "PC")
		echo "<script>location.href='../".basename($_SERVER['PHP_SELF'])."?".$_SERVER['QUERY_STRING']."';</script>"

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="description" content="작지만 큰 아이디어. 본질을 추구합니다. 디지털광고대행사 미니버타이징" />
	<meta name="title" content="미니버타이징" />
	<meta name="keywords" content="" />
	<meta property="og:title" content="MINIVERTISING" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://minivertising.kr/miniver_new/images/miniver_main.jpg" />
	<meta property="og:site_name" content="MINIVERTISING" />
	<meta property="og:description" content="작지만 큰 아이디어. 본질을 추구합니다. 디지털광고대행사 미니버타이징" />
	<link rel="shortcut icon" type="image/x-icon" href="http://minivertising.kr/miniver_new/images/favicon.ico" />
	<link href="../css/normalize.css" rel="stylesheet" />
	<link href="../lib/swiper/swiper.min.css" rel="stylesheet" />
	<link href="./css/m.style_mini.css" rel="stylesheet" />
	<link href="../lib/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="../lib/bxslider/jquery.bxslider.css" />
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../lib/swiper/swiper.jquery.min.js"></script>
	<script type="text/javascript" src="../js/modernizr-custom.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
	<script type="text/javascript" src="../js/m_main.js"></script>
</head>
