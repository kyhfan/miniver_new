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
				<div class="wrapper-contactUs">
					<div class="wrapper">
						<div class="title">
							<img src="./images/contact_us_title.png" alt="">
						</div>
						<div class="sub">
							<p>
								귀사의 브랜드로 좋은 캠페인을 만드는 일 만큼은<br>
								결코 양보할 수 없는 미니버타이징의 가치입니다
							</p>
						</div>
						<div class="address-zone">
							<p class="corp">MINIVERTISING Corp.</p>
							<p>OFFICE.  2F 931-9, Bangbae-dong, Seocho-gu Seoul</p>
							<p>서울시 서초구 방배동 931-9, 2층</p>
							<p>TEL. 02 532 2475, FAX. 02 532 2493</p>
							<p><a href="http://www.facebook.com/minivertising" target="_blank">FB. www.facebook.com/minivertising</a></p>
						</div>
						<div class="swap-button">
							<a href="javascript:void(0)">
								<span class="map">MAP</span>
							</a>
						</div>
						<div class="wrap-swap-content">
							<div class="block-send">
								<div class="row">
									<input type="text" id="company_name" placeholder="브랜드 / 회사명">
								</div>
								<div class="row">
									<input type="text" id="contact_name" placeholder="담당자 성함">
								</div>
								<div class="row">
									<input type="tel" id="contact_phone" placeholder="연락처">
								</div>
								<div class="row last">
									<input type="text" id="contact_email" placeholder="이메일">
								</div>
								<div class="textBox">
									<textarea rows="8" id="contact_content" cols="80" placeholder="의뢰 내용"></textarea>
								</div>
								<div class="sendIcon">
									<span>SEND</span>
								</div>
							</div>
							<div class="block-map">
								<div id="prev_img" class="map">
									<img src="./images/temp_map.png" alt="">
								</div>
								<div id="real_img" class="map" style="display:none;">
                         			<iframe src="https://a.tiles.mapbox.com/v4/minivertising.jkhj9560/attribution,zoompan.html?access_token=pk.eyJ1IjoibWluaXZlcnRpc2luZyIsImEiOiJCNXFCN25FIn0.dDiascoSjcN1uN3v77RlNw#17/37.48462/126.99073" id="gmap_iframe" frameborder="0"></iframe>
								</div>
								<div class="desc">
									<p>
										- 지하철 7호선 내방역 4번 출구 (도보 10분 소요)
									</p>
									<p>
										- 2호선 방배역 3번 출구 (도보 12분 소요)
									</p>
								</div>
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
	var $animateElem = $('.animate');
	var currentBottom;

	var pathName = location.pathname.split("/")[3].split(".")[0];
	$body.addClass(pathName);

    page_load();

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

	$('.swap-button a').off().on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		var $icon = $(this).children();
		if($icon.text() == "MAP") {
			$('.block-send').fadeOut(500, function(){
				$('.block-map').fadeIn(500, function(){
                    var prev_img_width  = $("#prev_img").width();
                    var prev_img_height  = $("#prev_img").height();
                    $("#gmap_iframe").width(prev_img_width);
                    $("#gmap_iframe").height(prev_img_height);
                    $("#prev_img").hide();
                    $("#real_img").show();
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

});
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
