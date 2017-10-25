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
	<meta name="url" content="http://minivertising.kr/miniver_new/index.php" />
	<meta name="keywords" content="" />
	<meta property="og:title" content="MINIVERTISING" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://minivertising.kr/miniver_new/images/miniver_main.jpg" />
	<meta property="og:site_name" content="MINIVERTISING" />
	<meta property="og:url" content="http://minivertising.kr/miniver_new/index.php" />
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
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '167692687145282');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=167692687145282&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-93879621-1', 'auto');
	ga('send', 'pageview');
</script>
<!-- Google 리마케팅 태그 코드 -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 830727412;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/830727412/?guid=ON&amp;script=0"/>
</div>
</noscript>

</head>

