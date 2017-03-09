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

function sort_work(param)
{
	
	$.ajax({
		type   : "POST",
		async  : false,
		url    : "ajax_work.php",
		data:{
			"sort_work"					: param
		},
		success: function(response){
			$(".wrap-work").html(response);
		}
	});
}