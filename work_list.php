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
					<div class="category-box work-box">
						<div class="inner">
							<div class="cate-block">
								<div class="line tl"></div>
								<div class="line tr"></div>
								<div class="line br"></div>
								<div class="line bl"></div>
								<div class="txt-layout">
									<div class="title">
										<h2>WORK</h2>
									</div>
									<div class="cate active">
										<a href="#">
											<span>all</span>
										</a>
									</div>
									<div class="cate">
										<a href="#">
											<span>DIGITAL CAMPAIGN</span>
										</a>
									</div>
									<div class="cate">
										<a href="#">
											<span>VIRAL FILM</span>
										</a>
									</div>
									<div class="cate">
										<a href="#">
											<span>ON&OFFLINE EVENT</span>
										</a>
									</div>
									<div class="cate">
										<a href="#">
											<span>PROMOTION</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
<?
	$list_query		= "SELECT * FROM ".$_gl['portfolio_info_table']." WHERE 1";
	$list_result	= mysqli_query($my_db, $list_query);
	while ($list_data = mysqli_fetch_array($list_result))
	{
		$cover_image 	= str_replace("../../../","",$list_data['cover_image']);
?>                    
					<div class="work-box">
						<a href="javascript:void(0);" onclick="move_page('work_detail.php?idx=<?=$list_data['idx']?>');">
							<div class="inner">
								<div class="title-cate">
									<div class="push-line"></div>
									<span>
										digital campaign
									</span>
								</div>
								<div class="wrap-els">
									<div class="circle-zone">
										<div class="circle-img">
											<img src="<?=$cover_image?>" alt="">
										</div>
										<!-- <div class="line rt"></div>
										<div class="line rt"></div> -->
									</div>
									<div class="desc-zone">
										<div class="project">
											<div class="guide">
												<span>project</span>
											</div>
											<div class="name">
												<span><?=$list_data['project_name']?></span>
											</div>
										</div>
										<div class="client">
											<div class="guide">
												<span>client</span>
											</div>
											<div class="name">
												<span><?=$list_data['project_client']?></span>
											</div>
										</div>
									</div>
								</div>
								<div class="push-line" data-no="01"></div>
							</div>
						</a>
					</div>
<?
	}
?>					
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	var $body = $('body');
	var menuBtn = $('#nav');


	$(window).load(function() {
		// var path = location.pathname;
		// var pathName = path.split("/");
		// console.log(pathName[2].split(".")[0]);
		
		var pathName = location.pathname.split("/")[2].split(".")[0];
		$body.addClass(pathName);
		// TweenMax.set('.txt-layout', {opacity: 0});
		TweenMax.to('.txt-layout', 2, {opacity: 1});
		$('.category-box .bl').bind('transitionend', function() {
		});

		$("#header").fadeIn(600, function(){
			$("#nav").fadeIn(600, function(){
				$(".content-outer").css("visibility","visible");
				 TweenMax.from( $('.content-outer'), 0.5, {css:{opacity:0}});
			});
		});
        
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