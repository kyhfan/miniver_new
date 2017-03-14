<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<link href="../css/normalize.css" rel="stylesheet" />
	<link href="./css/m.style_mini.css" rel="stylesheet" />
	<link href="../lib/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../js/modernizr-custom.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
	<!-- <script type="text/javascript" src="../js/m_main.js"></script> -->
</head>
<body>
	<div id="miniver">
		<div class="header">
			<div class="header-outer">
				<div class="header-inner clearfix">
					<a href="" class="logo">
						<span class="sr-only">MINIVERTISING</span>
					</a>
					<div class="nav">
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
					</div>
				</div>
			</div>
		</div>
		<div class="menu-layer">
			<div class="inner">
				<div class="menu-list">
					<a href="#" class="about">
						<img src="./images/navi_01.png" alt="about">
					</a>
					<a href="#" class="work current">
						<img src="./images/navi_02.png" alt="work">
					</a>
					<a href="#" class="news">
						<img src="./images/navi_03.png" alt="news">
					</a>
					<a href="#" class="contactUs">
						<img src="./images/navi_04.png" alt="contact us">
					</a>
				</div>
			</div>
		</div>
		<div class="content-outer">
			<div class="content-inner">
				<div class="block-work-cate">
					<div class="cate-outer">
						<div class="cate-inner">
							<div class="layout clearfix">
								<div class="line tl"></div>
								<div class="line tr"></div>
								<div class="line br"></div>
								<div class="line bl"></div>
								<div class="block-title">
									<img src="./images/worklist_cate_title.png" alt="WORK">
								</div>
								<div class="block-catelist">
									<div class="inner">
										<div class="row">
											<a href="#" class="cate all active">
												<span>all</span>
											</a>
											<a href="#" class="cate viral">
												<span>VIRAL FILM</span>
											</a>
											<a href="#" class="cate app">
												<span>APP</span>
											</a>
											<a href="#" class="cate promotion">
												<span>PROMOTION</span>
											</a>
										</div>
										<div class="row">
											<a href="#" class="cate campaign">
												<span>DIGITAL CAMPAIGN</span>
											</a>
											<a href="#" class="cate onOff">
												<span>ON&OFFLINE EVENT</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block-work-list">
					<div class="work-block in-view">
						<div class="circle-thumb">
							<div class="thumbnail">
								<div class="img">
									<img src="./images/circle_thumbnail.png" alt="">
								</div>
							</div>
							<div class="wrap-category">
								<div class="push-line"></div>
								<div class="cate-name">
									<span>CAMPAIGN</span>
								</div>
							</div>
						</div>
						<div class="desc-zone">
							<div class="project">
								<div class="guide">
									<span>project</span>
								</div>
								<div class="name">
									<span>생명을 살리는 스티커</span>
								</div>
							</div>
							<div class="client">
								<div class="guide">
									<span>client</span>
								</div>
								<div class="name">
									<span>MINIVERTISING</span>
								</div>
							</div>
							<div class="wrap-product-number" data-no="01">
								<div class="push-line"></div>
							</div>
						</div>
					</div>
					<div class="work-block">
						<div class="circle-thumb">
							<div class="thumbnail">
								<div class="img">
									<img src="./images/circle_thumbnail2.png" alt="">
								</div>
							</div>
							<div class="wrap-category">
								<div class="push-line"></div>
								<div class="cate-name">
									<span>CAMPAIGN</span>
								</div>
							</div>
						</div>
						<div class="desc-zone">
							<div class="project">
								<div class="guide">
									<span>project</span>
								</div>
								<div class="name">
									<span>어린이재활병원</span>
								</div>
							</div>
							<div class="client">
								<div class="guide">
									<span>client</span>
								</div>
								<div class="name">
									<span>NEXON</span>
								</div>
							</div>
							<div class="wrap-product-number" data-no="02">
								<div class="push-line"></div>
							</div>
						</div>
					</div>
					<div class="work-block">
						<div class="circle-thumb">
							<div class="thumbnail">
								<div class="img">
									<img src="./images/circle_thumbnail3.png" alt="">
								</div>
							</div>
							<div class="wrap-category">
								<div class="push-line"></div>
								<div class="cate-name">
									<span>CAMPAIGN</span>
								</div>
							</div>
						</div>
						<div class="desc-zone">
							<div class="project">
								<div class="guide">
									<span>project</span>
								</div>
								<div class="name">
									<span>예뻐지는 가방</span>
								</div>
							</div>
							<div class="client">
								<div class="guide">
									<span>client</span>
								</div>
								<div class="name">
									<span>THE FACESHOP</span>
								</div>
							</div>
							<div class="wrap-product-number" data-no="03">
								<div class="push-line"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
$(window).load(function() {
	var $body = $('body');
	var menuBtn = $('.nav');
	var scrolled = false;
	var windowBottom = $(window).height();

	menuBtn.on('click', function(e) {
		e.stopPropagation();
		// alert("aaa");
		$body.hasClass('menuOpen') ? menu.close() : menu.open();
	});

	var menu = {
		open: function() {

			$body.addClass('menuOpen');
			// TweenMax.staggerFromTo('.wrap-menu li', .75, {opacity: 0, scale:0}, {opacity: 1, scale: 1}, 0.25);
			// $('.cross .nav-line:last-child').bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){

			// });
			// $body.addClass('menuOpen');
			TweenMax.staggerFromTo('.menu-layer .menu-list a', .35, {autoAlpha: 0, scale:0}, {autoAlpha: 1, scale: 1}, 0.25);
			console.log("open in");
		},
		close: function() {
			TweenMax.killTweensOf('.menu-layer .menu-list a');
			TweenMax.staggerFromTo('.menu-layer .menu-list a', .35, {autoAlpha: 1, scale: 1}, {autoAlpha: 0, onComplete:hidden});
			$body.removeClass('menuOpen');
			// hidden();
			// TweenMax.staggerFromTo('.wrap-menu li', .75, {opacity: 1, scale:1}, {opacity: 0, scale: 0, onComplete:hidden}, 0.25);
			function hidden() {
				$body.removeClass('menuOpen');
			}
			console.log("close in");
		},
		move: function() {

		}
	}

	$('.content-inner').scroll(function(e) {
		e.preventDefault();
		scrolled = true;
	});

	setInterval(function() {
		if(scrolled) {
			hasScrolled();
			scrolled = false;
		}
	}, 200);

	function hasScrolled() {
		// console.log($('.content-inner').scrollTop());
		// currentBottom = $(window).height() + $(this).scrollTop();
		// currentBottom = $(window).height() + $('.content-inner').scrollTop();
		// $.each($animateElem, function() {
		// 	if(currentBottom >= ($(this).offset().top) && $(this).hasClass('animate')) {
		// 		animateTrigger($(this), $(this).data('animation-name'));
		// 		$(this).removeClass('animate').addClass('animated');
		// 	}
		// });
		// console.log(windowCenter);

		$('.work-block').each(function(idx) {
		// 	// console.log(currentBottom);
		// 	// if(currentBottom >= ($(this).height()/2) && currentBottom < $(this).offset().top){
		// 	// console.log("현재 페이지 하단:"+currentBottom);
		// 	// console.log("현재 페이지 중간:"+currentBottom);
		// 	// console.log("현재 work box 중간점:"+$(this).offset().top+$('.work-box').height()/2);
		// 	// if(currentBottom >= ($(this).offset().top+$(this).outerHeight()/2)+129 && !$(this).hasClass('in-view')) {
		// 	// 	$('.work-block').removeClass('in-view');
		// 	// 	$(this).addClass('in-view');
		// 	// 	// console.log($(this));
		// 	// }else {
		// 	// 	console.log('in');
		// 	// 	// $('.work-block').removeClass('in-view');
		// 	// }
		// 	if(windowCenter+40 >= $(this).offset().top+$(this).outerHeight()/2 || windowCenter-40 >= $(this).offset().top+$(this).outerHeight()/2) {
		// 		$('.work-block').removeClass('in-view');
		// 		$(this).addClass('in-view');
		// 	}
		// 	// if(currentBottom > $(this).offset().top+$(this).height()/2) {
		// 	// 	// console.log("in-view");
		// 		// $('.work-box').removeClass('in-view');
		// 		// $(this).addClass('in-view');
		// 	// }
		// });
			var offsetBottom = $(this).offset().top + $(this).outerHeight();
			if(windowBottom-5 >= offsetBottom || windowBottom+5 >= offsetBottom) {
				$('.work-block').removeClass('in-view');
				$(this).addClass('in-view');
			}
		});
	}

	// console.log($(window).scrollTop());
	// console.log($('.work-block').height()/2);

});
</script>
</body>
</html>
