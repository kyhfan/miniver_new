<?
	include_once "head.php";
?>
<body>
	<div id="miniver">
<?
	include_once "header.php";
?>
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
				<div class="wrapper-about">
					<div class="parent-vertical">
						<div class="child-vertical">
							<div class="slide-wrapper swiper-container">
								<div class="slide _01 swiper-slide">
									<div class="wrap-inner">
										<div class="title">
											<img src="./images/slider_01_title.png" alt="">
										</div>
										<div class="sub">
											작을 수록 크리에이티브는 날카로워 집니다<br>
											그래서 때론 크다고 표현합니다<br>
											비본질적인 것을 덜어내다보니 작아졌습니다 독창적입니다<br>
											작은 즐거움 모여, 브랜드를 세상을 변화시킵니다
										</div>
									</div>
								</div>
								<div class="slide _02 swiper-slide">
									<div class="wrap-inner">
										<div class="title">
											<img src="./images/slider_02_title.png" alt="">
										</div>
										<div class="sub">
											크기가 아닌 핵심을 이야기하는 것
										</div>
									</div>
								</div>
								<div class="slide _03 swiper-slide">
									<div class="wrap-inner">
										<div class="title">
											<img src="./images/slider_03_title.png" alt="">
										</div>
										<div class="sub">
											하나의 아이디어를 두고 프레임부터 다양하게 접근합니다<br>
											디자인팀과 콘텐츠팀, 바이럴 무비팀, 개발팀이<br>
											유기적으로 컨버전스 되어 아이디어가 필요한 형태로<br>
											각 매체에 적합한 콘텐츠를 제작합니다<br>
											우리가 만드는 것은 새로움이지만<br>
											소비자가 기억하는 것은 브랜드와 즐거움일 것입니다
										</div>
									</div>
								</div>
								<div class="background">
									<img src="./images/slider_background.png" alt="">
								</div>
							</div>
						</div>
						<div class="pager">
									<span></span>
									<span></span>
									<span></span>
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

	page_load();

	var pathName = location.pathname.split("/")[3].split(".")[0];
	$body.addClass(pathName);


	menuBtn.on('click', function(e) {
		e.stopPropagation();
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

	var swiper = new Swiper('.slide-wrapper', {
        // pagination: '.swiper-pagination',
        // paginationClickable: true,
        // nextButton: '.swiper-button-next',
        // prevButton: '.swiper-button-prev',
        // spaceBetween: 30,
		autoplay: 1500,
        effect: 'fade'
    });

});
</script>
</body>
</html>
