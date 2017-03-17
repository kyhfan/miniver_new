<?
	include_once "head.php";
?>
<body>
	<div id="background-gate">
		<div class="wrap-gate">
			<div class="gate">
				<div class="anim-elems">
					<h1 class="title">
						<img src="./images/gate_02.png" alt="MINIVERTISING">
					</h1>
					<div class="rotate">
						<img src="./images/gate_01.png">
					</div>
				</div>
			</div>
			<div class="loading-bar">
				<div class="fill"></div>
			</div>
		</div>
	</div>
<script>
	$(window).load(function() {
		init();

		function init() {
			TweenMax.from(".rotate", 2, {autoAlpha: 0, scale:0});
			TweenMax.from(".title", 1, {autoAlpha: 0, delay: 2, onStart:loading});
			TweenMax.from(".loading-bar", 3, {autoAlpha: 0});
		}



		function loading() {
			load1();
			function load1() {
				TweenMax.to(".fill", 0.5, {width: '23%', delay:0.5, onComplete:load3});
			}
			function load2() {
				// TweenMax.to(".fill", 0.5, {width: '25%', onComplete:load3});
				// TweenMax.to(".fill", 0.5, {width: '25%', onComplete:load3});
			}
			function load3() {
				// TweenMax.to(".fill", 2, {width: '60%', onComplete:load4});
				TweenMax.to(".fill", 1, {width: '60%', onComplete:load5});
			}
			function load4() {
				// TweenMax.to(".fill", 0.5, {width: '61%', onComplete:load5});
				// TweenMax.to(".fill", 0.5, {width: '61%', onComplete:load5});
			}
			function load5() {
				// TweenMax.to(".fill", 1.5, {width: '100%', onComplete:endLoading});
				TweenMax.to(".fill", 1, {width: '100%', onComplete:endLoading});
			}

			rotate();
		}

		function rotate() {
			TweenMax.to(".rotate", 0.1, {rotation: '-=2', transformOrigin: 'center center center', onComplete:rotate});
		}

		function endLoading() {
			TweenMax.killTweensOf(".rotate");
			TweenMax.to(".rotate, .title, .loading-bar", 2, {autoAlpha: 0, onComplete:page_start});
		}

		function page_start()
		{
			move_page('about.php');
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
