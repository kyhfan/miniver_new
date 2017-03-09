<?
/*
*
*	php function 
*
*/
	$my_db = new mysqli("localhost", "root", "miniver_2017", "miniver_home");
	//$my_db = new mysqli("localhost", "minivertising", "alslqj~1", "minivertising");
	if (mysqli_connect_error()) {
		exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
?>
