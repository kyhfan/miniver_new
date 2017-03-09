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


		// introAnimation.from('h1 img', 1, {opactiy: 0, onComplete:myfunc})
		// .from('.rotate-bg', 6, {opacity: 0, scale:0});
		function init() {
            $(".anim-elems").css("visibility","visible");
			// TweenMax.from(".rotate-bg", 4.5, {opacity: 0, scale:0});
			TweenMax.from(".rotate", 2, {opacity: 0, scale:0});
			TweenMax.fromTo(".title", 1, {opacity: 0}, {opacity: 1, delay: 2, onComplete:loading});
			TweenMax.fromTo(".loading-bar", 3, {opacity: 0}, {opacity:1});
		}



		function loading() {
			load1();
			function load1() {
				// TweenMax.to(".fill", 1.5, {width: '23%', delay:3, onComplete:load2});
				TweenMax.to(".fill", 0.5, {width: '23%', delay:2, onComplete:load3});
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
			TweenMax.to(".rotate, .title, .loading-bar", 2, {opacity: 0, onComplete:page_start});
		}

        function page_start()
        {
            move_page('about.php');
        }

	});
</script>
</body>
</html>
