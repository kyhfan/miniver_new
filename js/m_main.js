/*
*
*	MOBILE전용 JS 파일
*
*/

function move_page(url)
{
	$("body").fadeOut("slow",function(){
		location.href 	= url;		
	})
}

function page_load()
{
	$(".header").fadeIn(300, function(){
		//$(".content-outer").css("visibility","visible");
		sort_work('all');		
		TweenMax.to( $('.content-outer'), 0.65, {css:{opacity:1}});
	});
	
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
			$(".block-work-list").html(response);
		}
	});
}
