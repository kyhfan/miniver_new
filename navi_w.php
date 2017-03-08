		<div id="nav">
			<div class="wrap-btn">
				<div class="hamburger">
					<div class="nav-line"></div>
					<div class="nav-line"></div>
					<div class="nav-line"></div>
				</div>
				<div class="cross">
					<div class="nav-line"></div>
					<div class="nav-line"></div>
				</div>
			</div>
			<div class="wrap-menu">
				<ul class="clearfix">
					<li <?=highlight_navi("about");?>>
						<a href="javascript:void(0)" onclick="move_page('about.php');">
							<span class="about"></span>
						</a>
					</li>
					<li <?=highlight_navi("work");?>>
						<a href="javascript:void(0)" onclick="move_page('work_list.php');">
							<span class="work"></span>
						</a>
					</li>
					<li <?=highlight_navi("news");?>>
						<a href="javascript:void(0)" onclick="move_page('news.php');">
							<span class="news"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
