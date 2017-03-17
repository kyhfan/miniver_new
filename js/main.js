/*
*
*	PC전용 JS 파일
*
*/

function move_page(url)
{
	$("body").fadeOut(300,function(){
		location.href 	= url;
	});
}

function page_load(pagecheck)
{
	$("#header").fadeIn(150, function(){
		$("#nav").fadeIn(100, function(){
			if(pagecheck)
				sort_work('all');

			TweenMax.to( $('.content-outer'), 0.35, {css:{opacity:1}});
		});
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
			$(".wrap-work").html(response);
			// TweenMax.fromTo($(".scale"), 0.7, {scale: 1.8}, {scale: 1});
		}
	});
}
