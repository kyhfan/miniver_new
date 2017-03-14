<?
	include_once "head.php";
?>
<body>
	<div id="miniver">
<?
	include_once "header.php";
?>
		<div class="content-outer">
			<div class="content-inner descAndPhone">
				<div class="device-block">
					<div class="inner">
						<div class="layout">
							<div class="push-line"></div>
						</div>
						<!-- <div class="wrap-text">
							<div class="brand">
								<span>더페이스샵 잉크젤스틱</span>
							</div>
							<div class="title">
								<h3>'당신의 입술을 캐스팅합니다'</h3>
							</div>
						</div> -->
						<!-- tablet  -->
						<div class="wrap-text">
							<div class="brand">
								<span>한샘</span>
							</div>
							<div class="title">
								<h3>'매장 가이드용 앱'</h3>
							</div>
						</div>
						<div class="mock-up">
							<!-- <img src="./images/tf_ink_01.png" alt=""> -->
							<img src="./images/hs_tab_01.png" alt="">
						</div>
					</div>
				</div>
				<div class="desc-block">
					<div class="row-block">
						<div class="row">
							<span class="guide">
								Category :
							</span>
							<span class="adInput">
								DIGITAL CAMPAIGN
							</span>
						</div>
						<div class="row">
							<span class="guide">
								Client :
							</span>
							<span class="adInput">
								THEFACESHOP
							</span>
						</div>
					</div>
					<div class="box-block">
						<div class="box">
							<div class="title">
								<span>brand issue</span>
							</div>
							<div class="flow-text">
								<p>
									더페이스샵의 새로운 립스틱, 잉크젤스틱 런칭
								</p>
							</div>
						</div>
						<div class="box">
							<div class="title">
								<span>creative</span>
							</div>
							<div class="flow-text">
								<p>
									새롭게 런칭한 잉크젤스틱, 수지라는 모델로 소구하기 보다 소비자들이 직접 입술 모델을
									지원 할 수 있게 캠페인을 기획했습니다 남여 나이 불문, 단지 입술로 모델 모집을 하여
									타겟들의 관심과 참여를 촉구하였습니다. 실제로 촬영된 일반인 모델 화보컷은 패션뷰티
									잡지와 매장에서 마케팅 용도로 활용 되었습니다.
								</p>
							</div>
						</div>
					</div>
					<div class="papers">
						<div class="paper _01 animate" data-animation-name="paperDrop">
							<img src="./images/tf_ink_02_01.png" alt="">
						</div>
						<div class="paper _02 animate" data-animation-name="paperDrop">
							<img src="./images/tf_ink_02_02.png" alt="">
						</div>
						<div class="paper _03 animate" data-animation-name="paperDrop">
							<img src="./images/tf_ink_02_02.png" alt="">
						</div>
					</div>
				</div>
				<div class="spread-block">
					<div class="spread-pages animate" data-animation-name="fadeInUp">
						<img src="./images/tf_ink_03.png" alt="">
					</div>
					<div class="list-all">
						<a href="#">
							<span>전체목록</span>
						</a>
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
	var $animateElem = $('.animate');
	var currentBottom;

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
		currentBottom = $(window).height() + $(this).scrollTop();
		$.each($animateElem, function() {
			if(currentBottom >= ($(this).offset().top) && $(this).hasClass('animate')) {
				animateTrigger($(this), $(this).data('animation-name'));
				$(this).removeClass('animate').addClass('animated');
			}
		});
	}

	function animateTrigger(target, type) {
		switch (type) {
			case "fadeInUp":
				TweenMax.fromTo(target, 1,{autoAlpha: 0, y:20}, {autoAlpha: 1, y:0});
			break;
			case "paperDrop":
				var paperCount = $('.paper').length;
				var movePoint = (paperCount)*30;
				paperAnimation(paperCount, movePoint);
			break;
			default:
			break;

		}
	}

	function paperAnimation(cnt, point) {
		if(cnt>0) {
			TweenMax.to('.paper._0'+cnt, 2, {autoAlpha: 1, y:point});
			cnt--;
			point = point-30;
			setTimeout(function() {
				paperAnimation(cnt, point);
			}, 1000);
			// paperAnimation(cnt);
		} else {
			return false;
		}
	}

	// console.log($(window).scrollTop());
	// console.log($('.work-block').height()/2);

});
</script>
</body>
</html>
