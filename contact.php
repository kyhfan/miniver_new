		<div class="layer-contact">
			<div class="area-close" id="contactCloser">
				<div class="line left"></div>
				<div class="line right"></div>
			</div>
			<div class="inner clearfix">
				<div class="block-desc">
					<div class="top">
						<div class="title">
							<img src="./images/contact_us_title.png" alt="CONTACT US">
						</div>
						<div class="sub">
							<p>
								귀사의 브랜드로 좋은 캠페인을 만드는 일 만큼은<br>
								결코 양보할 수 없는 미니버타이징의 가치입니다
							</p>
						</div>
					</div>
					<div class="bottom">
						<div class="address">
							<p>
								<b>MINIVERTISING Corp.</b><br>
								OFFICE.  2F 931-9, Bangbae-dong, Seocho-gu Seoul<br>
								서울시 서초구 방배동 931-9, 2층<br>
								TEL. 02 532 2475,   FAX. 02 532 2493<br>
								FB.  <a class="contact-fb" href="http://www.facebook.com/minivertising" target="_blank">www.facebook.com/minivertising</a>
							</p>
							<div class="changeIcon">
								<a href="javascript:void(0)">
									<span class="map">MAP</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="block-send">
					<div class="row">
						<input type="text" id="company_name" placeholder="브랜드 / 회사명">
					</div>
					<div class="row">
						<input type="text" id="contact_name" placeholder="담당자 성함">
					</div>
					<div class="row">
						<input type="text" id="contact_phone" placeholder="연락처">
					</div>
					<div class="row last">
						<input type="text" id="contact_email" placeholder="E-mail">
					</div>
					<div class="text-box">
						<textarea name="name" id="contact_content" rows="8" cols="80" placeholder="의뢰 내용"></textarea>
					</div>
					<div class="sendIcon">
						<a href="javascript:void(0)">
							<span>SEND</span>
						</a>
					</div>
				</div>
				<div class="block-map">
					<div class="map" id="map">
						<iframe src="https://a.tiles.mapbox.com/v4/minivertising.jkhj9560/attribution,zoompan.html?access_token=pk.eyJ1IjoibWluaXZlcnRpc2luZyIsImEiOiJCNXFCN25FIn0.dDiascoSjcN1uN3v77RlNw#17/37.48462/126.99073" id="gmap_iframe" width="499px" height="283px" frameborder="0"></iframe>
					</div>
					<div class="desc">
						<p>
							- 지하철 7호선 내방역 4번 출구 (도보 10분 소요)
						</p>
						<p>
							- 2호선 방배역 3번 출구 (도보 12분 소요)
						</p>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript">
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
			url    : "./main_exec.php",
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

	});

</script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-93879621-1', 'auto');
	ga('send', 'pageview');
</script>
