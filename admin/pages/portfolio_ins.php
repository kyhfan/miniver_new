<?
	include_once "header.php";

  $serial_code  = PHPRandom::getString();
?>
<link href="../../lib/filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
<link href="../../lib/filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
<body>

<div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">홈페이지 관리자</a>
    </div>
  <!-- /.navbar-header -->

<?
	include_once "top_navi.php";
	include_once "side_navi.php";
?>
</div>
<!-- /.navbar-static-side -->
  </nav>

  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">포트폴리오 등록</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
      <!-- /.panel-heading -->
      <!-- <button type="button" class="btn btn-outline btn-primary btn-lg" id="add_category_btn">카테고리 추가</button>
      <button type="button" class="btn btn-outline btn-success btn-lg" id="list_category_btn">카테고리 목록</button> -->
      <input type="hidden" id="serial_code" value="<?=$serial_code?>">
      <div class="panel-body">
        <div class="panel-body">
          <div class="table-responsive" id="add_goods">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th colspan="2" style="background:#dde">표시 설정</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>템플릿 선택</td>
                  <td colspan="2">
                    <input type="radio" name="template_gubun" value="web" checked> 웹
                    <input type="radio" name="template_gubun" value="tablet" > 태블릿
                    <input type="radio" name="template_gubun" value="video"> 영상
                  </td>
                </tr>
                <tr>
                  <td>웹사이트 이미지 사용여부</td>
                  <td colspan="2">
                    <input type="radio" name="webYN" value="Y" checked> 사용함
                    <input type="radio" name="webYN" value="N"> 사용안함
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 업체명</td>
                  <td colspan="2">
                    <input class="form-control" id="project_company_name" style="width:100%">
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 명</td>
                  <td colspan="2">
                    <input class="form-control" id="project_name" style="width:100%">
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 커버 이미지</td>
                  <td colspan="2">
                    <form action="../../lib/filer/php/upload.php" id="img_frm10" method="post" enctype="multipart/form-data">
                      <input type="file" name="files[]" id="filer_input10" >
                      <!-- <input type="submit" value="Submit"> -->
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 대표 이미지</td>
                  <td colspan="2">
                    <form action="../../lib/filer/php/upload.php" id="img_frm1" method="post" enctype="multipart/form-data">
                      <input type="file" name="files[]" id="filer_input1" >
                      <!-- <input type="submit" value="Submit"> -->
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 중간 이미지1</td>
                  <td colspan="2">
                    <form action="../../lib/filer/php/upload.php" id="img_frm2" method="post" enctype="multipart/form-data">
                      <input type="file" name="files[]" id="filer_input2">
                      <!-- <input type="submit" value="Submit"> -->
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 중간 이미지2</td>
                  <td colspan="2">
                    <form action="../../lib/filer/php/upload.php" id="img_frm3" method="post" enctype="multipart/form-data">
                      <input type="file" name="files[]" id="filer_input3">
                      <!-- <input type="submit" value="Submit"> -->
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 중간 이미지3</td>
                  <td colspan="2">
                    <form action="../../lib/filer/php/upload.php" id="img_frm4" method="post" enctype="multipart/form-data">
                      <input type="file" name="files[]" id="filer_input4">
                      <!-- <input type="submit" value="Submit"> -->
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 웹 이미지1</td>
                  <td colspan="2">
                    <form action="../../lib/filer/php/upload.php" id="img_frm5" method="post" enctype="multipart/form-data">
                      <input type="file" name="files[]" id="filer_input5">
                      <!-- <input type="submit" value="Submit"> -->
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 웹 이미지2</td>
                  <td colspan="2">
                    <form action="../../lib/filer/php/upload.php" id="img_frm6" method="post" enctype="multipart/form-data">
                      <input type="file" name="files[]" id="filer_input6">
                      <!-- <input type="submit" value="Submit"> -->
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 웹 이미지3</td>
                  <td colspan="2">
                    <form action="../../lib/filer/php/upload.php" id="img_frm7" method="post" enctype="multipart/form-data">
                      <input type="file" name="files[]" id="filer_input7">
                      <!-- <input type="submit" value="Submit"> -->
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 웹 이미지4</td>
                  <td colspan="2">
                    <form action="../../lib/filer/php/upload.php" id="img_frm8" method="post" enctype="multipart/form-data">
                      <input type="file" name="files[]" id="filer_input8">
                      <!-- <input type="submit" value="Submit"> -->
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>프로젝트 웹 이미지5</td>
                  <td colspan="2">
                    <form action="../../lib/filer/php/upload.php" id="img_frm9" method="post" enctype="multipart/form-data">
                      <input type="file" name="files[]" id="filer_input9">
                      <!-- <input type="submit" value="Submit"> -->
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>Category</td>
                  <td colspan="2">
                    <input class="form-control" id="project_category" style="width:100%">
                  </td>
                </tr>
                <tr>
                  <td>Client</td>
                  <td colspan="2">
                    <input class="form-control" id="project_client" style="width:100%">
                  </td>
                </tr>
                <tr>
                  <td>BRAND ISSUE</td>
                  <td colspan="2">
                    <input class="form-control" id="project_brand_issue" style="width:100%">
                  </td>
                </tr>
                <tr>
                  <td>CREATIVE</td>
                  <td colspan="2">
                    <input class="form-control" id="project_creative" style="width:100%">
                  </td>
                </tr>
              </tbody>
            </table>
            <button type="button" class="btn btn-danger btn-lg btn-block" id="submit_btn">등 록</button>
          </div>
        </div>
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?
	include_once "lib.php";
?>
	<!-- DataTables JavaScript -->
	<script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	<script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>

	<script src="../../lib/filer/js/jquery.filer.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	});

  for (var i=1; i<=10; i++)
  {
    $('#filer_input'+i).filer({
      showThumbs: true,
      templates: {
        box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
        item: '<li class="jFiler-item">\
              <div class="jFiler-item-container">\
                <div class="jFiler-item-inner">\
                  <div class="jFiler-item-thumb">\
                    <div class="jFiler-item-status"></div>\
                    <div class="jFiler-item-info">\
                      <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                      <span class="jFiler-item-others">{{fi-size2}}</span>\
                    </div>\
                    {{fi-image}}\
                  </div>\
                  <div class="jFiler-item-assets jFiler-row">\
                    <ul class="list-inline pull-left"></ul>\
                    <ul class="list-inline pull-right">\
                      <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                    </ul>\
                  </div>\
                </div>\
              </div>\
            </li>',
        itemAppend: '<li class="jFiler-item">\
                <div class="jFiler-item-container">\
                  <div class="jFiler-item-inner">\
                    <div class="jFiler-item-thumb">\
                      <div class="jFiler-item-status"></div>\
                      <div class="jFiler-item-info">\
                        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                        <span class="jFiler-item-others">{{fi-size2}}</span>\
                      </div>\
                      {{fi-image}}\
                    </div>\
                    <div class="jFiler-item-assets jFiler-row">\
                      <ul class="list-inline pull-left">\
                        <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
                      </ul>\
                      <ul class="list-inline pull-right">\
                        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                      </ul>\
                    </div>\
                  </div>\
                </div>\
              </li>',
        itemAppendToEnd: false,
        removeConfirmation: true,
        _selectors: {
          list: '.jFiler-items-list',
          item: '.jFiler-item',
          remove: '.jFiler-item-trash-action'
        }
      },
      addMore: false
    });
  }
	</script>

</body>

</html>
