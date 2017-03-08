<?
	include_once "head.php";

    $idx    = $_REQUEST['idx'];
    // 포트폴리오 정보
    $portfolio_info     = select_portfolio_info($idx);
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
			<div class="content-inner workdetail descAndPhone">
				<div class="device-block">
					<div class="layout"></div>
					<div class="brand"><?=$portfolio_info['project_company_name']?></div>
					<div class="title">
						'<?=$portfolio_info['project_name']?>'
					</div>
					<div class="mock-up">
						<div class="img">
							<img src="<?=str_replace("../../../","",$portfolio_info['main_image'])?>" alt="">
						</div>
					</div>
				</div>
				<div class="desc-block clearfix">
					<div class="papers">
						<div class="paper _01 animate" data-animation-name="paperDrop">
							<img src="<?=str_replace("../../../","",$portfolio_info['middle_image3'])?>" alt="">
						</div>
						<div class="paper _02 animate" data-animation-name="paperDrop">
							<img src="<?=str_replace("../../../","",$portfolio_info['middle_image2'])?>" alt="">
						</div>
						<div class="paper _03 animate" data-animation-name="paperDrop">
							<img src="<?=str_replace("../../../","",$portfolio_info['middle_image1'])?>" alt="">
						</div>
					</div>
					<div class="desc animate" data-animation-name="fadeInUp">
						<div class="row category">
							<span class="guide">Category : </span>
							<span class="input"><?=$portfolio_info['project_category']?></span>
						</div>
						<div class="row client">
							<span class="guide">Client : </span>
							<span class="input"><?=$portfolio_info['project_client']?></span>
						</div>
						<div class="block issue">
							<div class="title">
								<span>brand issue</span>
							</div>
							<div class="sub">
								<p>
                                    <?=$portfolio_info['project_brand_issue']?>
								</p>
							</div>
						</div>
						<div class="block creative">
							<div class="title">
								<span>creative</span>
							</div>
							<div class="sub">
								<p>
									<?=$portfolio_info['project_creative']?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="spread-block">
					<div class="layout">
						<div class="spread-pages">
							<img src="<?=str_replace("../../../","",$portfolio_info['web_image1'])?>" alt="" class="animate" data-animation-name="fadeInUp">
							<img src="<?=str_replace("../../../","",$portfolio_info['web_image2'])?>" alt="" class="animate" data-animation-name="fadeInUp">
							<img src="<?=str_replace("../../../","",$portfolio_info['web_image3'])?>" alt="" class="animate" data-animation-name="fadeInUp">
							<img src="<?=str_replace("../../../","",$portfolio_info['web_image4'])?>" alt="" class="animate" data-animation-name="fadeInUp">
							<img src="<?=str_replace("../../../","",$portfolio_info['web_image5'])?>" alt="" class="animate" data-animation-name="fadeInUp">
						</div>
					</div>
					<div class="list-all">
						<a href="javascript:void(0);" onclick="move_page('work_list.php');">
							<span>전체목록</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	var $body = $('body');
	var menuBtn = $('#nav');
	var currentBottom;
	var $animateElem = $('.animate')
	var scrolled = false;


	$(window).load(function() {

		$("#header").fadeIn(600, function(){
			$("#nav").fadeIn(600, function(){
				$(".content-outer").css("visibility","visible");
				 TweenMax.from( $('.content-outer'), 0.5, {css:{opacity:0}});
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
