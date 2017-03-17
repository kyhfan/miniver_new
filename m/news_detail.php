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
                <div class="news-detail">
                    <!--<hr align="left" size="1" width="100%" color="#000000" />-->
                    <div class="top-line">
                    </div>
                    <div class="news-header">
                        <div class="news-title">3박 4일, 혼자 떠나는 제주도</div>
                        <div class="news-category">MINIVER STORY</div>
                    </div>
                    <div class="news-desc">
                        출근길이 여행을 떠나는 것처럼 설레고, 업무가 즐기는 것이 되었으면 합니다.<br /><br />
                        미니버타이징에서는 전직원들에게 제주도로 혼자 떠나는 3박 4일의 힐링워크가 있습니다. 물론 여행 경비는 전액 지원합니다 :)<br /><br />
                        방배동으로 출근하지 않고 공항으로 출근하여 제주도로 가고 낯선 카페에서 업무를 하게 되는 것은 분명 일에 대한 생각과 각도를 바꿔줄 것이라 생각합니다.<br /><br />
                        미니버타이징은, 작지만 의미있는 프로젝트들을 계속 만들어 가려합니다.<br />
                        (아래 사진들은 힐링워크에서 찍어온 사진들입니다.)<br /><br />
                        <img src="./images/news_detail_sample.jpg">
                    </div>
                    <div class="news-btn" onclick="move_page('news_list.php');">
                        <img src="./images/news_btn_text.jpg">
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

		page_load();

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
			$('.work-block').each(function(idx) {
				var offsetBottom = $(this).offset().top + $(this).outerHeight();
				if(windowBottom-5 >= offsetBottom || windowBottom+5 >= offsetBottom) {
					$('.work-block').removeClass('in-view');
					$(this).addClass('in-view');
				}
			});
		}

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
