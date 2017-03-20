<?
	include_once "config.php";

    $sort   = $_REQUEST['sort_work'];
?>
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
									<div class="cate <? if($sort == "all") echo "active"; ?>">
										<a href="javascript:void(0)" onclick="sort_work('all')">
											<span>all</span>
										</a>
									</div>
									<div class="cate <? if($sort == "digital") echo "active"; ?>">
										<a href="javascript:void(0)" onclick="sort_work('digital')">
											<span>DIGITAL CAMPAIGN</span>
										</a>
									</div>
									<div class="cate <? if($sort == "viral") echo "active"; ?>">
										<a href="javascript:void(0)" onclick="sort_work('viral')">
											<span>VIRAL FILM</span>
										</a>
									</div>
									<div class="cate <? if($sort == "event") echo "active"; ?>">
										<a href="javascript:void(0)" onclick="sort_work('event')">
											<span>ON&OFFLINE EVENT</span>
										</a>
									</div>
									<div class="cate <? if($sort == "promotion") echo "active"; ?>">
										<a href="javascript:void(0)" onclick="sort_work('promotion')">
											<span>PROMOTION</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
<?
    if ($sort == "all")
	    $list_query		= "SELECT * FROM ".$_gl['portfolio_info_table']." WHERE 1 AND showYN='Y' ORDER BY order_num ASC";
    else
	    $list_query		= "SELECT * FROM ".$_gl['portfolio_info_table']." WHERE 1 AND showYN='Y' AND project_category LIKE '%".$sort."%' ORDER BY order_num ASC";

	$list_result	= mysqli_query($my_db, $list_query);
    $i =1;
	while ($list_data = mysqli_fetch_array($list_result))
	{
		$cover_image 	= str_replace("../../../","",$list_data['cover_image']);

        $work_cnt   = strlen($i);
        if ($work_cnt < 2)
            $work_num = "0".$i;
        else
            $work_num = $i;
?>
					<div class="work-box">
						<a href="javascript:void(0);" onclick="move_page('work_detail.php?idx=<?=$list_data['idx']?>');">
							<div class="inner">
								<div class="title-cate">
									<div class="push-line"></div>
									<span>
										<?=$list_data['project_category']?>
									</span>
								</div>
								<div class="wrap-els">
									<div class="circle-zone">
										<div class="circle-img scale">
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
								<div class="push-line" data-no="<?=$work_num?>"></div>
							</div>
						</a>
					</div>
<?
        $i++;
	}
?>
