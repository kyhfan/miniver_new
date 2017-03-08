/*
*
*	PC전용 JS 파일
*
*/

function move_page(url)
{
	$("body").fadeOut("fast",function(){
		location.href 	= url;		
	})
}