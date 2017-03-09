<?
	include_once "head.php";
?>
<body>
	<div id="miniver">
<?
	// 사이드 헤더 메뉴
	include_once "header.php";
	// CONTACT US 팝업
	include_once "contact.php";
	// 상단 햄버그 메뉴
	include_once "navi.php";
?>		
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

		page_load();       
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
