/*
*
*	관리자 JS 파일
*
*/
// 베스트 상품 정보 insert
$(document).on("click", "#submit_btn", function(){
	var template_gubun			= $(':radio[name="template_gubun"]:checked').val();
	var webYN					= $(':radio[name="webYN"]:checked').val();
	var project_company_name	= $("#project_company_name").val();
	var project_name			= $("#project_name").val();
	var project_category		= $("#project_category").val();
	var project_client			= $("#project_client").val();
	var project_brand_issue		= $("#project_brand_issue").val();
	var project_creative		= $("#project_creative").val();
	var filer_input1			= $("#filer_input1").val();
	var filer_input2			= $("#filer_input2").val();
	var filer_input3			= $("#filer_input3").val();
	var filer_input4			= $("#filer_input4").val();
	var filer_input5			= $("#filer_input5").val();
	var filer_input6			= $("#filer_input6").val();
	var filer_input7			= $("#filer_input7").val();
	var filer_input8			= $("#filer_input8").val();
	var filer_input9			= $("#filer_input9").val();
	var serial_code				= $("#serial_code").val();

	if (project_company_name == "")
	{
		alert("프로젝트 업체명을 입력해주세요.");
		$("#project_company_name").focus();
		return false;
	}

	if (project_name == "")
	{
		alert("프로젝트 명을 입력해주세요.");
		$("#project_name").focus();
		return false;
	}

	if (project_category == "")
	{
		alert("프로젝트 카테고리를 입력해주세요.");
		$("#project_category").focus();
		return false;
	}

	if (project_client == "")
	{
		alert("프로젝트 클라이언트를 입력해주세요.");
		$("#project_client").focus();
		return false;
	}

	if (project_brand_issue == "")
	{
		alert("프로젝트 브랜드 이슈를 입력해주세요.");
		$("#project_brand_issue").focus();
		return false;
	}

	if (project_creative == "")
	{
		alert("프로젝트 CREATIVE를 입력해주세요.");
		$("#project_creative").focus();
		return false;
	}

	if (filer_input1 == "")
	{
		alert("프로젝트 대표 이미지를 선택해 주세요.");
		return false;
	}

	if (filer_input2 == "")
	{
		alert("프로젝트 중간 이미지를 선택해 주세요.");
		return false;
	}

	if (filer_input3 == "")
	{
		alert("프로젝트 중간 이미지를 선택해 주세요.");
		return false;
	}

	if (filer_input4 == "")
	{
		alert("프로젝트 중간 이미지를 선택해 주세요.");
		return false;
	}

	if (filer_input5 == "")
	{
		alert("프로젝트 웹 이미지를 선택해 주세요.");
		return false;
	}

	if (filer_input6 == "")
	{
		alert("프로젝트 웹 이미지를 선택해 주세요.");
		return false;
	}

	if (filer_input7 == "")
	{
		alert("프로젝트 웹 이미지를 선택해 주세요.");
		return false;
	}

	if (filer_input8 == "")
	{
		alert("프로젝트 웹 이미지를 선택해 주세요.");
		return false;
	}

	if (filer_input9 == "")
	{
		alert("프로젝트 웹 이미지를 선택해 주세요.");
		return false;
	}

	$.ajax({
		type   : "POST",
		async  : false,
		url    : "admin_exec.php",
		data:{
			"exec"					: "insert_portfolio_info",
			"template_gubun"		: template_gubun,
			"webYN"					: webYN,
			"project_company_name"	: project_company_name,
			"project_name"			: project_name,
			"project_category"		: project_category,
			"project_client"		: project_client,
			"project_brand_issue"	: project_brand_issue,
			"project_creative"		: project_creative,
			"serial_code"			: serial_code
		},
		success: function(response){
			if (response == "N")
			{
				alert("다시 시도해 주세요.");
				location.reload();
			}else{
				img_submit(1, serial_code);
				img_submit(2, serial_code);
				img_submit(3, serial_code);
				img_submit(4, serial_code);
				img_submit(5, serial_code);
				img_submit(6, serial_code);
				img_submit(7, serial_code);
				img_submit(8, serial_code);
				img_submit(9, serial_code);

				alert("포트폴리오가 등록 되었습니다!");
				location.reload();
			}
		}
	});
});

function img_submit(num, serial)
{
	var frm = $('#img_frm'+num);
	var stringData = frm.serialize();
	frm.ajaxSubmit({
		type: 'post',
		url: '../../lib/filer/php/upload.php?ig=portfolio&num='+num+'&serial='+serial,
		data: stringData,
		success:function(msg){
			//alert('상품이 등록 되었습니다');
			//self.location.reload();
		}
	}); // end ajaxSubmit
}

// 전체 상품 리스트 생성
function show_portfolio_list(id)
{
	$.ajax({
		type   : "POST",
		async  : false,
		url    : "admin_exec.php",
		data:{
			"exec"		: "show_portfolio_list",
			"target"	: id
		},
		success: function(response){
			$("#"+id).html(response);
		}
	});
}

