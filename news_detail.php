<?
	include_once "head.php";

    $idx    = $_REQUEST['idx'];
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
<?
    if ($idx == "1")
    {
?>                
				<div class="wrap-news detail">
					<div class="title-block">
						<div class="title">3박 4일, 혼자 떠나는 제주도</div>
						<div class="category">miniver story</div>
					</div>
					<div class="main-cnt">
						<div class="inner">
							<!--  editor -->

							출근길이 여행을 떠나는 것처럼 설레고, 업무가 즐기는 것이 되었으면 합니다.<br><br>

							미니버타이징에서는 전직원들에게 제주도로 혼자 떠나는 3박 4일의 힐링워크가 있습니다.<br>
							물론 여행 경비는 전액 지원합니다 :)<br><br>

							방배동으로 출근하지 않고, 공항으로 출근하여 제주도로 가고<br>
							낯선 카페에서 업무를 하게 되는 것은 분명 일에 대한 생각과 각도를 바꿔줄 것이라 생각합니다.<br><br>

							미니버타이징은, 작지만 의미있는 프로젝트들을 계속 만들어가려합니다.<br>
							(아래 사진들은 힐링워크에서 찍어온 사진들입니다.)<br><br>

							<img src="./images/news_detail_sample.png" alt="">
							<!--  editor -->
						</div>
					</div>
					<div class="list-all">
						<a href="javascript:void(0)" onclick="move_page('news_list.php');">
							<span>전체목록</span>
						</a>
					</div>
				</div>
<?
    }
?>                
			</div>
		</div>
	</div>
<script type="text/javascript">
	var $body = $('body');
	var menuBtn = $('#nav');
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
		$("#header").fadeIn(600, function(){
			$("#nav").fadeIn(600, function(){
				//$(".content-outer").fadeIn(300);
				//TweenMax.staggerFrom('.content-outer', .5, {opacity: 1}, 0.1);
				$(".content-outer").css("visibility","visible");
				 TweenMax.from( $('.content-outer'), 0.5, {css:{opacity:0}});
				//TweenMax.staggerFrom("li", .5, {top:100, opacity:0, delay:1, ease:Back.easeOut}, 0.1);
			});
		});

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
</body>
</html>
