<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="./css/normalize.css" rel="stylesheet">
	<link href="./css/animation.css" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
</head>
<body>
	<div class="wrap-section">
		<div class="section">
			<div class="wrap-box">
				<div class="box">
					<div class="line top"></div>
					<div class="line right"></div>
					<div class="line bottom"></div>
					<div class="line left"></div>
					<div class="titles">
						<span id="title" class="title glitch1" data-text="MINIVERTISING">MINIVERTISING</span>
					</div>
				</div>
			</div>
		</div>
	<div class="section">
		<div class="wrap-box">
			<div class="box">
				<!-- <div class="titles">
				<span class="title glitch2">MINIVERTISING</span>
				</div> -->
				<div class="titles">
					<div class="glitch2 title" data-text="MINIVERTISING">MINIVERTISING</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section2">
		<div class="wrap-intro">
			<div class="title">
				<h1 class="tween">
					<img src="./images/gate_02.png" alt="MINIVERTISING">
				</h1>
				<div class="rotate-bg">
					<img src="./images/gate_01.png">
				</div>
			</div>
			<div class="loading-elem">
				<div class="fill"></div>
			</div>
		</div>
	</div>
	</div>
<script>
	$(window).load(function() {
		var title = document.getElementById('title');

		setTimeout(function() {
			$('#title').addClass('ready');
		}, 1000);

		title.addEventListener('transitionend', function(event) {
			setTimeout(function() {
				lineAnimation();
			}, 1500);

		}, false );

		function lineAnimation() {
			$('.box > .line.top').animate({width:100+'%'}, 600, function (){
				$(this).next().animate({height:100+'%'}, 600, function (){
					$(this).next().animate({width:100+'%'}, 600, function(){
						$(this).next().animate({height:100+'%'}, 600, function(){
							$('.box').addClass('is-glitched');
							glitch();
						});
					});
				});
			});
		}

		function glitch() {
			setInterval(function(){
				if($('.box').hasClass('is-glitched'))
				{
					$('.box').removeClass('is-glitched');
				}
				else{
					$('.box').addClass('is-glitched');
				}
			}, 7000)
		}

		init();


		// introAnimation.from('h1 img', 1, {opactiy: 0, onComplete:myfunc})
		// .from('.rotate-bg', 6, {opacity: 0, scale:0});
		function init() {
			TweenMax.from(".rotate-bg", 4.5, {opacity: 0, scale:0});
			TweenMax.fromTo(".tween", 2, {opacity: 0}, {opacity: 1, delay: 4, onComplete:loading});
			TweenMax.fromTo(".loading-elem", 8, {opacity: 0}, {opacity:1});
		}



		function loading() {
			TweenMax.to(".fill", 30, {width: '100%', delay:3, onComplete:endLoading});
			rotate();
		}

		function rotate() {
			TweenMax.to(".rotate-bg", 0.1, {rotation: '-=2', transformOrigin: 'center center center', onComplete:rotate});
		}

		function endLoading() {
			TweenMax.killTweensOf(".rotate-bg");
			TweenMax.to(".rotate-bg, .tween, .loading-elem", 2, {opacity: 0});
		}

	});

</script>
</body>
</html>
