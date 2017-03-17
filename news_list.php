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
	include_once "navi_w.php";
?>
		<div class="content-outer">
			<div class="content-inner news">
				<div class="wrap-news">
					<div class="title">
						<img src="./images/news_list_title.png" alt="NEWS">
					</div>
					<div class="list">
						<div class="row clearfix" style="cursor:pointer;" onclick="move_page('news_detail.php?idx=1');">
							<div class="thumbnail">
								<img src="./images/news_thumbnail_01.png" alt="">
							</div>
							<div class="desc">
								<div class="title">
									<p>3박 4일, 혼자 떠나는 제주도</p>
								</div>
								<div class="sub">
									<p>
										출근길이 여행을 떠나는 것처럼 설레고, 업무가 즐기는 것이 되었으면 합니다.
										미니버타이징에서는 전직원들에게 제주도로 혼자 떠나는 3박 4일의 힐링워크가
										있습니다…
									</p>
								</div>
								<div class="category">
									<span>
										miniver story
									</span>
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
	var currentBottom;
	var $animateElem = $('.animate');
	var $animateElemCnt = $animateElem.length;
	var scrolled = false;
	// var $animateElemsOffsetArray = new Object;
	// $animateElem.each(function(idx) {
	// 	$animateElemsOffsetArray[idx] = {
	// 		key: this,
	// 		value: $(this).offset().top
	// 	}
	// });
	// console.log($animateElemsOffsetArray);



	$(window).load(function() {
		page_load();

		var pathName = location.pathname.split("/")[2].split(".")[0];
		$body.addClass(pathName);
		TweenMax.to('.txt-layout', 2, {opacity: 1});
		$('.category-box .bl').bind('transitionend', function() {
		});

		$('.content-inner').scroll(function() {
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
			if($animateElemCnt>0)
			{
				$.each($animateElem, function(idx) {
					if(currentBottom >= ($(this).offset().top) && $(this).hasClass('animate')) {
						console.log($(this).offset().top);
						animateTrigger($(this), $(this).data('animation-name'));
						$(this).removeClass('animate').addClass('animated');
						$animateElemCnt--;
					}
				});
			}
		}


		function animateTrigger(target, type) {
			switch (type) {
				case "fadeInUp":
					TweenMax.fromTo(target, 1,{opacity: 0, y:20}, {opacity: 1, y:0});
				break;
				case "paperDrop":
					var paperCount = $('.paper').length;
					var movePoint = (paperCount-1)*45;
					paperAnimation(paperCount, movePoint);
				break;
				default:
				break;

			}
		}

		function paperAnimation(cnt, point) {
			if(cnt>0) {
				TweenMax.to('.paper._0'+cnt, 2, {opacity: 1, y:point});
				cnt--;
				point = point-45;
				setTimeout(function() {
					paperAnimation(cnt, point);
				}, 1000);
				// paperAnimation(cnt);
			} else {
				return false;
			}
		}


	});

	$('.contact-us > a').on('click', function(e) {
		e.preventDefault();
		$body.toggleClass('contactOpen');
	});
	menuBtn.on('click', function() {
		$body.hasClass('menuOpen') ? menu.close() : menu.open();
	});

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
		}
	}

</script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-93879621-1', 'auto');
	ga('send', 'pageview');
</script>
</body>
</html>
