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
											<a href="javascript:void(0);" onclick="sort_work('all');" class="cate all active">
												<span>all</span>
											</a>
											<a href="javascript:void(0);" onclick="sort_work('viral');" class="cate viral">
												<span>VIRAL FILM</span>
											</a>
											<a href="javascript:void(0);" onclick="sort_work('app');" class="cate app">
												<span>APP</span>
											</a>
											<a href="javascript:void(0);" onclick="sort_work('promotion');" class="cate promotion">
												<span>PROMOTION</span>
											</a>
										</div>
										<div class="row">
											<a href="javascript:void(0);" onclick="sort_work('digital');" class="cate digital">
												<span>DIGITAL CAMPAIGN</span>
											</a>
											<a href="javascript:void(0);" onclick="sort_work('event');" class="cate event">
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
	var pathName = location.pathname.split("/")[3].split(".")[0];

	$body.addClass(pathName);

	page_load();
	sort_work('all');



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
