<?
	include_once "../config.php";

    $sort   = $_REQUEST['sort_work'];

    if ($sort == "all")
	    $list_query		= "SELECT * FROM ".$_gl['portfolio_info_table']." WHERE 1 AND showYN='Y' ORDER BY order_num ASC";
    else
	    $list_query		= "SELECT * FROM ".$_gl['portfolio_info_table']." WHERE 1 AND showYN='Y' AND project_category LIKE '%".$sort."%' ORDER BY order_num ASC";

	$list_result	= mysqli_query($my_db, $list_query);
    $i =1;
	while ($list_data = mysqli_fetch_array($list_result))
	{
		$cover_image 	= str_replace("../../../","../",$list_data['m_cover_image']);
        $work_cnt   = strlen($i);
        if ($work_cnt < 2)
            $work_num = "0".$i;
        else
            $work_num = $i;

        if ($i == 1)
            $in_view    = "in-view";
        else
            $in_view    = "";
?>
					<a href="javascript:void(0);" onclick="move_page('work_detail.php?idx=<?=$list_data['idx']?>');">
                        <div class="work-block <?=$in_view?>">
                            <div class="circle-thumb">
                                <div class="thumbnail">
                                    <div class="img">
                                        <img src="<?=$cover_image?>" alt="">
                                    </div>
                                </div>
                                <div class="wrap-category">
                                    <div class="push-line"></div>
                                    <div class="cate-name">
                                        <span><?=$list_data['project_category']?></span>
                                    </div>
                                </div>
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
                                <div class="wrap-product-number" data-no="<?=$work_num?>">
                                    <div class="push-line"></div>
                                </div>
                            </div>
                        </div>
                    </a>
<?
        $i++;
	}
?>
