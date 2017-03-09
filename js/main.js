/*
*
*	PC전용 JS 파일
*
*/

function move_page(url)
{
	$("body").fadeOut("slow",function(){
		location.href 	= url;		
	})
}