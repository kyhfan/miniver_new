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
			<div class="content-inner worklist">
				<div class="wrap-work">
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	var $body = $('body');
	var menuBtn = $('#nav .wrap-btn');


	$(window).load(function() {
		// var path = location.pathname;
		// var pathName = path.split("/");
		// console.log(pathName[2].split(".")[0]);
		var pathName = location.pathname.split("/")[1].split(".")[0];
		$body.addClass(pathName);
		// TweenMax.set('.txt-layout', {opacity: 0});
		TweenMax.to('.txt-layout', 2, {opacity: 1});

		page_load("sort");
	});

	$('#contactOpener').off().on('click', function(e) {
		e.preventDefault();
		$body.toggleClass('contactOpen');
	});
	$('#contactCloser').off().on('click', function(e) {
		e.preventDefault();
		$body.removeClass('contactOpen');
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
