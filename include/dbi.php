<?
/*
*
*	php function
*
*/
//	$my_db = new mysqli("localhost", "root", "7alslqjxkdlwld@%*)1590", "miniver");
	//$my_db = new mysqli("localhost", "root", "miniver_2017", "miniver_home");
	$my_db = new mysqli("localhost", "minivertising", "alslqj~1", "minivertising");
	//$my_db = new mysqli("localhost", "miniver", "miniver_2016", "miniver_home");
	// $my_db = new mysqli("localhost", "miniver", "miniver_2016", "miniver_home");
	//$my_db = new mysqli("localhost", "root", "1234", "miniver_home");
	//$my_db = new mysqli("localhost", "miniver", "miniver_2016", "miniver_home");
	if (mysqli_connect_error()) {
		exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
?>
