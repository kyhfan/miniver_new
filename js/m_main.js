/*
*
*	MOBILE전용 JS 파일
*
*/

function move_page(url)
{
	$("body").fadeOut("slow",function(){
		location.href 	= url;
	});
}

function page_load()
{
	$(".header").fadeIn(300, function(){
		//$(".content-outer").css("visibility","visible");
		TweenMax.to($('.content-outer'), 0.65, {css:{opacity:1}});
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
			$(".cate").removeClass("active");
			$("."+param).addClass("active");
			$(".block-work-list").html(response);
		}
	});
}

$(document).on("click", ".sendIcon", function(){
	var company_name			= $("#company_name").val();
	var contact_name			= $("#contact_name").val();
	var contact_phone			= $("#contact_phone").val();
	var contact_email			= $("#contact_email").val();
	var contact_content			= $("#contact_content").val();

	if (company_name == "")
	{
		alert("브랜드/회사명을 입력해주세요.");
		$("#company_name").focus();
		return false;
	}

	if (contact_name == "")
	{
		alert("담당자 성함을 입력해주세요.");
		$("#contact_name").focus();
		return false;
	}

	if (contact_phone == "")
	{
		alert("연락처를 입력해주세요.");
		$("#contact_phone").focus();
		return false;
	}

	if (contact_email == "")
	{
		alert("E-mail을 입력해주세요.");
		$("#contact_email").focus();
		return false;
	}

	if (contact_content == "")
	{
		alert("의뢰 내용을 입력해주세요.");
		$("#contact_content").focus();
		return false;
	}

	$.ajax({
		type   : "POST",
		async  : false,
		url    : "../main_exec.php",
		data:{
			"exec"				: "insert_contact",
			"company_name"		: company_name,
			"contact_name"	    : contact_name,
			"contact_phone"	    : contact_phone,
			"contact_email"	    : contact_email,
			"contact_content"	: contact_content
		},
		success: function(response){
			if (response == "Y")
			{
                alert("정상적으로 등록되었습니다. 확인 후 빠른 시일내에 연락 드리겠습니다. 감사합니다.")
				location.reload();
			}else{
				alert("시스템에 문제가 있어 등록되지 않았습니다. 다시 등록 부탁드립니다.");
				location.reload();
			}
		}
	});

})
