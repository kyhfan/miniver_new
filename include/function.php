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
?>