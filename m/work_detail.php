<?
	include_once "head.php";

	$idx    = $_REQUEST['idx'];
    // 포트폴리오 정보
    $portfolio_info     = select_portfolio_info($idx);
?>
<body>
	<div id="miniver">
<?
	include_once "header.php";
?>
		<div class="content-outer">
			<div class="content-inner video">
				<div class="device-block">
					<div class="inner">
						<div class="layout">
							<div class="push-line"></div>
						</div>
						<div class="wrap-text">
							<div class="brand">
								<span><?=$portfolio_info['project_company_name']?></span>
							</div>
							<div class="title">
								<h3>
									'<?=$portfolio_info['project_name']?>'
								</h3>
							</div>
						</div>
						<div class="mock-up">
							<div class="inner">
								<?
								if($portfolio_info["template_gubun"] == "video") {
								?>
									<!-- video layout -->
									<div class="video">
										<?=$portfolio_info['m_main_image']?>
										<!-- <img src="./images/video_sample.png" alt=""> -->
									</div>
									<!-- video layout -->
								<?
								}else{
								?>
								<!--  desc phone tablet layout -->
									<!-- <img src="./images/tf_ink_01.png" alt=""> -->
									<img src="<?=str_replace("../../../","../",$portfolio_info['m_main_image'])?>" alt="">
								<!--  desc phone tablet layout -->
								<?
								}
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="desc-block">
					<div class="row-block">
						<div class="row">
							<span class="guide">
								Category :
							</span>
							<span class="adInput">
								<?=$portfolio_info['project_category']?>
							</span>
						</div>
						<div class="row">
							<span class="guide">
								Client :
							</span>
							<span class="adInput">
								<?=$portfolio_info['project_client']?>
							</span>
						</div>
					</div>
					<div class="box-block">
						<div class="box">
							<div class="title">
								<span>brand issue</span>
							</div>
							<div class="flow-text">
								<p>
									<?=$portfolio_info['project_brand_issue']?>
								</p>
							</div>
						</div>
						<div class="box">
							<div class="title">
								<span>creative</span>
							</div>
							<div class="flow-text">
								<p>
									<?=$portfolio_info['project_creative']?>
								</p>
							</div>
						</div>
					</div>
					<?
					if($portfolio_info["template_gubun"] == "video") {
					?>
					<!-- video layout -->
						<div class="capture-block">
							<img src="<?=str_replace("../../../","../",$portfolio_info['m_middle_image1'])?>" alt="">
							<!-- <img src="./images/tf_bag_02_01.png" alt=""> -->
						</div>
					<!-- video layout -->
					<?
					}else{
					?>
					<!--  desc phone tablet layout -->
					<div class="papers">
						<?
						if($portfolio_info['m_middle_image1'] != "") {
						?>
						<div class="paper _01 animate" data-animation-name="paperDrop">
							<img src="<?=str_replace("../../../","../",$portfolio_info['m_middle_image1'])?>" alt="">
							<!-- <img src="./images/tf_ink_02_01.png" alt=""> -->
						</div>
						<?
						}
						if($portfolio_info['m_middle_image2'] != "") {
						?>
						<div class="paper _02 animate" data-animation-name="paperDrop">
							<img src="<?=str_replace("../../../","../",$portfolio_info['m_middle_image2'])?>" alt="">
							<!-- <img src="./images/tf_ink_02_02.png" alt=""> -->
						</div>
						<?
						}
						if($portfolio_info['m_middle_image3'] != "") {
						?>
						<div class="paper _03 animate" data-animation-name="paperDrop">
							<img src="<?=str_replace("../../../","../",$portfolio_info['m_middle_image3'])?>" alt="">
							<!-- <img src="./images/tf_ink_02_02.png" alt=""> -->
						</div>
						<?
						}
						?>
					</div>
					<!--  desc phone tablet layout -->
					<?
					}
					?>
				</div>
				<div class="spread-block">
					<?
					if($portfolio_info["template_gubun"] == "video" && $portfolio_info["webYN"] == "N") {
					?>
					<div class="spread-pages no-webImg">
						<div class="blank"></div>
					</div>
					<?
					}else{
					?>
					<div class="spread-pages animate" data-animation-name="fadeInUp">
						<img src="<?=str_replace("../../../","../",$portfolio_info['m_web_image'])?>" alt="">
					</div>
					<?
					}
					?>
					<div class="list-all">
						<a href="javascript:void(0)" onclick="move_page('work_list.php');">
							<span>전체목록</span>
						</a>
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


		var pathName = location.pathname.split("/")[2].split(".")[0];
		$body.addClass(pathName);

		page_load();

		setVideoSize();

		menuBtn.on('click', function(e) {
			e.stopPropagation();
			$body.hasClass('menuOpen') ? menu.close() : menu.open();
		});

		var menu = {
			open: function() {

				$body.addClass('menuOpen');
				TweenMax.staggerFromTo('.menu-layer .menu-list a', .35, {autoAlpha: 0, scale:0}, {autoAlpha: 1, scale: 1}, 0.25);
			},
			close: function() {
				TweenMax.killTweensOf('.menu-layer .menu-list a');
				TweenMax.staggerFromTo('.menu-layer .menu-list a', .35, {autoAlpha: 1, scale: 1}, {autoAlpha: 0, onComplete:hidden});
				$body.removeClass('menuOpen');
				function hidden() {
					$body.removeClass('menuOpen');
				}
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
			} else {
				return false;
			}
		}

		function setVideoSize() {
			var $iframeWidth = $('.mock-up > .inner > .video').width()+1;
			var $iframeHeight = ($iframeWidth/16)*9;

			$('.video iframe').css({
				width: '100%',
				height: $iframeHeight+'px',
				visibility: 'visible',
				opacity: 1
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
<!-- Google 리마케팅 태그 코드 -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 830727412;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/830727412/?guid=ON&amp;script=0"/>
</div>
</noscript>

</body>
</html>
