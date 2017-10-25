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
                <div class="news-content">
					<a href="" class="logo">
						<span class="sr-only">NEWS</span>
					</a>
                    <hr align="left" size="1" width="100%" color="#000000" />
                    <div class="news-block first" onclick="move_page('news_detail.php?idx=1');">
                        <div class="news_img">
                            <img src="./images/news_sample.jpg" alt="news image" />
                        </div>
                        <div class="title-txt">
                            <div class="txt1">3박 4일 혼자 떠나는 제주도</div>
                            <div class="txt2">MINIVER STORY</div>
                        </div>
                        <div class="desc-txt">
                        출근길이 여행을 떠나는 것처럼 설레고, 업무가 즐기는 것이 되었으면 합니다. 미니버타이징에서는 전직원들에게 제주도로 혼자 떠나는..
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

		page_load();

		menuBtn.on('click', function(e) {
			e.stopPropagation();
			$body.hasClass('menuOpen') ? menu.close() : menu.open();
		});

		var menu = {
			open: function() {

				$body.addClass('menuOpen');
				TweenMax.staggerFromTo('.menu-layer .menu-list a', .35, {autoAlpha: 0, scale:0}, {autoAlpha: 1, scale: 1}, 0.25);
				console.log("open in");
			},
			close: function() {
				TweenMax.killTweensOf('.menu-layer .menu-list a');
				TweenMax.staggerFromTo('.menu-layer .menu-list a', .35, {autoAlpha: 1, scale: 1}, {autoAlpha: 0, onComplete:hidden});
				$body.removeClass('menuOpen');
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
</body>
</html>
