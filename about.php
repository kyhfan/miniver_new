<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/style_mini.css">
	<link rel="stylesheet" href="./lib/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="./lib/font-awesome-4.7.0/css/font-awesome.min.css">
	<link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />	
	<script src="./js/jquery-1.11.2.min.js"></script>
	<script src="./js/modernizr-custom.js"></script>
	<script src="./lib/bxslider/jquery.bxslider.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
	<script src='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js'></script>
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
<body>
	<div id="miniver">
		<div id="header">
			<div class="header-logo">
				<a href="about.html">
					<img src="./images/header_logo.png" alt="MINIVERTISING">
				</a>
			</div>
			<div class="contact-us">
				<a href="contactUs">
					<img src="./images/contact_us.png" alt="CONTACT US">
					<!-- <i class="fa fa-angle-right first" aria-hidden="true"></i> -->
					<!-- <i class="fa fa-angle-right second" aria-hidden="true"></i> -->
				</a>
			</div>
			<div class="sns-elems">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 15 15" class="fb-svg">
					<path d="M4.7,0v1.7H3.6c-0.3,0-0.5,0.2-0.5,0.5v1h1.6L4.5,5H3.1v5H1V5.1H0V3.2h0.9V2c0-1.1,0.7-2,2-2H4.7z" fill="#ffffff">
				</svg>
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 16 16" class="blog-svg">
					<path d="M5.1,3.8c0.8-0.4,1.2-1,1.2-1.8c0-0.2,0-0.5-0.1-0.7C6.1,1.1,6,0.9,5.8,0.8C5.7,0.6,5.5,0.5,5.3,0.3
						C5.1,0.2,4.8,0.1,4.6,0.1S4,0,3.6,0H1C0.6,0,0.4,0.1,0.2,0.2C0.1,0.4,0,0.6,0,1v6c0,0.3,0.1,0.6,0.2,0.8C0.4,7.9,0.6,8,1,8h2.4
						c0.4,0,0.8,0,1.1-0.1c0.3,0,0.6-0.1,0.8-0.2c0.4-0.2,0.7-0.4,0.9-0.8c0.2-0.4,0.3-0.8,0.3-1.2C6.6,4.8,6.1,4.1,5.1,3.8z M1.6,1.2
						h1.3c0.6,0,1,0.1,1.3,0.2c0.3,0.1,0.4,0.4,0.4,0.8c0,0.2,0,0.4-0.1,0.5C4.4,2.9,4.3,3.1,4,3.2C3.8,3.2,3.5,3.3,3.1,3.3H1.6V1.2z
						M3.4,6.8H1.6V4.4h1.7c0.6,0,1,0.1,1.3,0.3C4.9,4.9,5,5.2,5,5.6C5,6.4,4.5,6.8,3.4,6.8z" fill="#ffffff">
				</svg>
			</div>
		</div>
<?
	include_once "contact.php";
?>		
		<div id="nav">
			<div class="wrap-btn">
				<div class="hamburger">
					<div class="nav-line"></div>
					<div class="nav-line"></div>
					<div class="nav-line"></div>
				</div>
				<div class="cross">
					<div class="nav-line"></div>
					<div class="nav-line"></div>
				</div>
			</div>
			<div class="wrap-menu">
				<ul class="clearfix">
					<li class="active"><a href="javascript:void(0)"><img src="./images/navi_01.png" alt="about"></a></li>
					<li><a href="work_list"><img src="./images/navi_02.png" alt="work"></a></li>
					<li><a href="javascript:void(0)"><img src="./images/navi_03.png" alt="news"></a></li>
				</ul>
			</div>
		</div>
		<div class="content-outer">
			<div class="content-inner main">
				<div class="slider-background-wrapper">
					<div class="slider-background">
						<div class="slider-wrapper">
							<div class="slide _01 current">
								<div class="wrap-inner">
									<div class="title">
										<img src="./images/slider_01_title.png" alt="MINI IS BIG, MINI IS ORIGINAL, MINI IS FUN">
									</div>
									<div class="sub">
										<p>
											작을 수록 크리에이티브는 날카로워 집니다 그래서 때론 크다고 표현합니다<br>
											비본질적인 것을 덜어내다보니 작아졌습니다 독창적입니다<br>
											작은 즐거움 모여, 브랜드를 세상을 변화시킵니다
										</p>
									</div>
								</div>
							</div>
							<div class="slide _02">
								<div class="wrap-inner">
									<div class="title">
										<img src="./images/slider_02_title.png" alt="MINI + ADVERTISING">
									</div>
									<div class="sub">
										<p>
											크기가 아닌 핵심을 이야기하는 것
										</p>
									</div>
								</div>
							</div>
							<div class="slide _03">
								<div class="wrap-inner">
									<div class="title">
										<img src="./images/slider_03_title.png" alt="MINIVERTISING">
									</div>
									<div class="sub">
										<p>
											하나의 아이디어를 두고 프레임부터 다양하게 접근합니다<br>
											디자인팀과 콘텐츠팀, 바이럴 무비팀, 개발팀이 유기적으로 컨버전스 되어<br>
											아이디어가 필요한 형태로 각 매체에 적합한 콘텐츠를 제작합니다<br>
											우리가 만드는 것은 새로움이지만 소비자가 기억하는 것은 브랜드와 즐거움일 것입니다
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	var $body = $('body');
	var menuBtn = $('#nav .wrap-btn');

	$(document).ready(function(){
		$('.slider-wrapper').bxSlider({
			mode: "fade",
			controls: false,
			speed:1000,
			auto:true,
			pager: false
		});
	});

	$('.contact-us > a').on('click', function(e) {
		e.preventDefault();
		$body.toggleClass('contactOpen');
	});
	menuBtn.on('click', function(e) {
		e.stopPropagation();
		// alert("aaa");
		$body.hasClass('menuOpen') ? menu.close() : menu.open();
	});

	// menuBtn.siblings().find('a').on('click', function(e) {
	// 	e.preventDefault();
	// 	console.log(this.href);
	// });

	$('.layer-contact .changeIcon a').off().on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		var $icon = $(this).children();
		if($icon.text() == "MAP") {
			$('.block-send').fadeOut(500, function(){
				$('.block-map').fadeIn(500, function(){
					$icon.fadeOut(100, function(){
						$(this).text("BACK").fadeIn();
					});
					$icon.removeClass("map").addClass('back');
				});
			});
		}else if($icon.text() == "BACK"){
			$('.block-map').fadeOut(500, function(){
				$('.block-send').fadeIn(500, function(){
					$icon.fadeOut(100, function(){
						$(this).text("MAP").fadeIn();
					});
					$icon.removeClass("back").addClass('map');
				});
			});
		}else{
			return false;
		}
	});

	var menu = {
		open: function() {
			$body.addClass('menuOpen');
			TweenMax.staggerFromTo('.wrap-menu li', .75, {opacity: 0, scale:0}, {opacity: 1, scale: 1}, 0.25);
			// $('.cross .nav-line:last-child').bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){

			// });
			// $body.addClass('menuOpen');
			console.log("open in");
		},
		close: function() {
			TweenMax.staggerFromTo('.wrap-menu li', .75, {opacity: 1, scale:1}, {opacity: 0, scale: 0, onComplete:hidden}, 0.25);
			function hidden() {
				$body.removeClass('menuOpen');
			}
			console.log("close in");
		},
		move: function() {

		}
	}
/*
	var miniverSlider = {
		init: function() {
			$('.slider-wrapper .slide').each(function(idx) {
                //while(true)
                //{
                  //  console.log('1');
                //}
                if ($(this).attr("class").indexOf("current") != -1)
                {

        			//TweenMax.staggerFromTo('.wrap-menu li', .75, {opacity: 0, scale:0}, {opacity: 1, scale: 1}, 0.25);
                    setTimeout(function(){
                        $(".slide._01").fadeOut('slow', function(){
                            $(".slide._02").fadeIn('slow');
                        });
                    }, 3000);
                    setTimeout(function(){
                        $(".slide._02").fadeOut('slow', function(){
                            $(".slide._03").fadeIn('slow');
                        });
                    }, 3000);
                }
				// console.log(idx);
			})
		},
		start: function() {

		},
		stop: function() {

		}
	}

miniverSlider.init();
*/

</script>
</body>
</html>
