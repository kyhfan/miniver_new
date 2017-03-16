<?
	include_once "head.php";
?>
<body>
	<div id="miniver">
<?
	include_once "header.php";
?>
		<div class="content-outer">
			<div class="content-inner">
				<div class="wrapper-about">
					<div class="parent-vertical">
						<div class="child-vertical">
							<div class="slide-wrapper">
								<div class="swiper-wrapper">
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
								</div>
								<div class="background" style="position:absolute;top:0;left:0;right:0">
									<img src="./images/slider_background.png" alt="">
								</div>
							</div>
						</div>
						<!--div class="pager">
									<span></span>
									<span></span>
									<span></span>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
	var slider_width = $(window).width() * 0.887;
	$(".slide-wrapper").width(slider_width);
	$(".slide-wrapper").height($(".background").height());

	$(window).load(function() {
		var $body = $('body');
		var menuBtn = $('.nav');
		var pathName = location.pathname.split("/")[3].split(".")[0];
		$body.addClass(pathName);

		var mySwiper = new Swiper ('.slide-wrapper', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			autoplay: 1000,
			speed:2000,
			effect: 'fade',
			fade:{ crossFade: true}
		});

		page_load();

		menuBtn.on('click', function(e) {
			e.stopPropagation();
			$body.hasClass('menuOpen') ? menu.close() : menu.open();
		});

		var menu = {
			open: function() {

				$body.addClass('menuOpen');
				TweenMax.staggerFromTo('.menu-layer .menu-list a', .35, {autoAlpha: 0, scale:0}, {autoAlpha: 1, scale: 1}, 0.25);
			},
			close: function() {
				TweenMax.killTweensOf('.menu-layer .menu-list a');
				TweenMax.staggerFromTo('.menu-layer .menu-list a', .35, {autoAlpha: 1, scale: 1}, {autoAlpha: 0, onComplete:hidden});
				$body.removeClass('menuOpen');

				function hidden() {
					$body.removeClass('menuOpen');
				}
			},
			move: function() {

			}
		}
	});
</script>
</body>
</html>
