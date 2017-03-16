<?
/*
*
*	php function 
*
*/


// 상품 코드 테이블에서 새로운 상품코드 가져오기
function create_serial()
{
	PHPRandom::getString();
	return $data['goods_code'];
}

function highlight_navi($pg)
{
	$str_match 	= strpos($_SERVER["PHP_SELF"], $pg);

	if ($str_match === false)
		$flag 	= "";
	else
		$flag 	= "class='active'";

	return $flag;	
}

function highlight_m_navi($pg)
{
	$str_match 	= strpos($_SERVER["PHP_SELF"], $pg);

	if ($str_match === false)
		$flag 	= "";
	else
		$flag 	= "current";

	return $flag;	
}

function select_portfolio_info($idx)
{
	global $_gl;
	global $my_db;

	$query		= "SELECT * FROM ".$_gl['portfolio_info_table']." WHERE idx='".$idx."'";
	$result		= mysqli_query($my_db, $query);
	$data		= mysqli_fetch_array($result);

	return $data;
	
}
?>