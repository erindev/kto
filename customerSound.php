<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("고객소리함 | 한국관광공사"); ?>
<?php 
	session_cache_expire(10); 
	session_start();

	$userid = $_SESSION['userid'];

	$infosql = "select * from kto_members where userid='$userid'";
	$inforesult = mysqli_query($con, $infosql) or die (mysqli_error($con));
	$inforow = mysqli_fetch_array($inforesult, MYSQLI_ASSOC);
?>
<div class="subMain" id="main">
	<div class="contName cn3">
		<div class="container">
			<h2>Voice of Customer</h2>
		</div>
	</div>
	<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
	<div class="container">
		<div class="contBody">
			<div class="sub">
				<h3>고객참여</h3>
				<ul>
					<li><a href="./customerSound.php" title="고각소리함 메뉴 바로가기">고객소리함</a></li>
					<li><a href="./photo.php" title="관광사진갤러리 메뉴 바로가기">관광사진갤러리</a></li>
					<li><a href="./request.php" title="홍보물신청 메뉴 바로가기">홍보물신청</a></li>
					<li><a href="./guideBook.php" title="e-Book 메뉴 바로가기">e-Book</a></li>
				</ul>
			</div>
			<div class="contArea">
				<h3>고객소리함</h3>
				<ol>
					<li>홈</li>
					<li>고객참여</li>
					<li>고객소리함</li>
				</ol>
				<form name="writeForm" id="writeForm" method="post" action="./inc/customer_process.php">
					<fieldset>
						<legend>고객소리폼</legend>
						<input type="hidden" name="mode" value="REGIST">

						<h4>개인정보의 수집 및 이용 동의</h4>
						<textarea readonly>수집하는 개인정보 항목
						1. 회사는 서비스 제공을 위해 필요한 최소한의 범위 내에서 개인정보를 수집하고 있습니다.
						수집항목
						- 성명, 전화번호(휴대폰번호), 이메일
						2. 인터넷 서비스 이용과정에서 아래 개인정보 항목이 자동으로 생성되어 수집될 수 있습니다.
						- 접속 IP 정보, 서비스 이용기록, 접속 로그, 쿠키, MAC주소
						개인정보 수집 목적
						회사는 다음과 같은 이유로 개인정보를 수집합니다.
						- 사용자 문의 대응
						- 제안·불만·AS처리 등의 민원처리
						- 공지사항 전달
						- 시장조사, 마케팅 또는 광고
						- 접속빈도 파악 및 서비스 이용 통계 수집 등 사용자 서비스 이용 분석을 통한 안정적 서비스 운영 및 품질 향상
						개인정보 보유기간
						정보주체 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다.
						단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.
						1. 웹사이트에서 수집하는 항목
						- 보유 항목 : 성명, 전화번호(휴대폰번호), 이메일
						- 보유 기간 : 1년 (단, 마케팅 또는 광고 목적으로 정보주체의 동의를 받은 경우 동의철회 시까지)
						- 보유 이유 : 사용자 식별, 사용자 문의, 제안, 불만, AS처리 등의 민원처리
						2. 웹사이트 이용과정에서 자동 생성되어 수집될 수 있는 항목
						- 보유 항목 : 접속 IP 정보, 서비스 이용기록, 접속 로그, 쿠키, MAC주소
						- 보유 기간 : 3개월 이하
						- 보유 이유 : 접속빈도 파악 및 서비스 이용 통계 수집
						개인정보 수집 동의 거부 권리
						회사는 보다 원활한 서비스 제공을 위하여 이벤트 등 필요한 경우에 한해 기본 정보 이외의 추가정보를 수집하고 있으며, 추가 정보는 서비스 제공 시 활용되는 정보로, 제공을 원하지 않을 경우 수집하지 않으며, 미동의로 인해 이용 상의 불이익도 발생하지 않습니다.
						</textarea>
						<p class="agreepart">
							<span>개인정보의 취급위탁에 동의 하십니까?</span>
							<input type="radio" name="agree1" value="Y" id="agree1_1" /><label for="agree1_1">동의합니다.</label>
							<input type="radio" name="agree1" value="N" checked id="agree1_2" /><label for="agree1_2">동의하지 않습니다.</label>
						</p>

						<h4>개인정보의 취급위탁 동의</h4>
						<textarea readonly>수집하는 개인정보 항목
						1. 회사는 서비스 제공을 위해 필요한 최소한의 범위 내에서 개인정보를 수집하고 있습니다.
						수집항목
						- 성명, 전화번호(휴대폰번호), 이메일
						2. 인터넷 서비스 이용과정에서 아래 개인정보 항목이 자동으로 생성되어 수집될 수 있습니다.
						- 접속 IP 정보, 서비스 이용기록, 접속 로그, 쿠키, MAC주소
						개인정보 수집 목적
						회사는 다음과 같은 이유로 개인정보를 수집합니다.
						- 사용자 문의 대응
						- 제안·불만·AS처리 등의 민원처리
						- 공지사항 전달
						- 시장조사, 마케팅 또는 광고
						- 접속빈도 파악 및 서비스 이용 통계 수집 등 사용자 서비스 이용 분석을 통한 안정적 서비스 운영 및 품질 향상
						개인정보 보유기간
						정보주체 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다.
						단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.
						1. 웹사이트에서 수집하는 항목
						- 보유 항목 : 성명, 전화번호(휴대폰번호), 이메일
						- 보유 기간 : 1년 (단, 마케팅 또는 광고 목적으로 정보주체의 동의를 받은 경우 동의철회 시까지)
						- 보유 이유 : 사용자 식별, 사용자 문의, 제안, 불만, AS처리 등의 민원처리
						2. 웹사이트 이용과정에서 자동 생성되어 수집될 수 있는 항목
						- 보유 항목 : 접속 IP 정보, 서비스 이용기록, 접속 로그, 쿠키, MAC주소
						- 보유 기간 : 3개월 이하
						- 보유 이유 : 접속빈도 파악 및 서비스 이용 통계 수집
						개인정보 수집 동의 거부 권리
						회사는 보다 원활한 서비스 제공을 위하여 이벤트 등 필요한 경우에 한해 기본 정보 이외의 추가정보를 수집하고 있으며, 추가 정보는 서비스 제공 시 활용되는 정보로, 제공을 원하지 않을 경우 수집하지 않으며, 미동의로 인해 이용 상의 불이익도 발생하지 않습니다.
						</textarea>
						<p class="agreepart">
							<span>개인정보의 취급위탁에 동의 하십니까?</span>
							<input type="radio" name="agree2" value="Y" id="agree2_1" /><label for="agree2_1">동의합니다.</label>
							<input type="radio" name="agree2" value="N" checked id="agree2_2" /><label for="agree2_2">동의하지 않습니다.</label>
						</p>

						<span class="star">'<strong class="must">*</strong>' 표시항목은 필수입력 사항입니다.</span>
						<table class="form">
							<caption>시설사용 및 예약문의 폼</caption>
							<colgroup>
								<col width="25%">
								<col width="*">
							</colgroup>
							<tr>
								<th scope="row"><strong class="must">*</strong> 구분</th>
								<td>
									<input type="radio" name="type" value="문의사항" id="divide1"><label for="divide1">문의 사항</label>
									<input type="radio" name="type" value="건의사항" id="divide2"><label for="divide2">건의 사항</label>
									<input type="radio" name="type" value="칭찬하기" id="divide3"><label for="divide3">칭찬 하기</label>
									<input type="radio" name="type" value="불만사항" id="divide4"><label for="divide4">불만 사항</label>
									<input type="radio" name="type" value="기타" id="divide5"><label for="divide5">기타</label>
								</td>
							</tr>

							<?php
									if ( empty($_SESSION['userid']) ){ ?>
								<tr>
									<th scope="row"><strong class="must">*</strong> <label for="uname">성명</label></th>
									<td>
										<p class="ip"><input type="text" name="uname" id="uname" maxlength="10" title="성명 입력" class="txt"></p>
									</td>
								</tr>
								<tr>
									<th scope="row"><strong class="must">*</strong> <label for="email">이메일</label></th>
									<td>
										<p class="ip"><input type="email" name="email" id="email" maxlength="30" title="이메일 입력" placeholder="ex) 123abc@hyosung.com" class="txt"></p>
										<p style="margin:6px 0 0;font-size:11px;color:#a60000;">* 문의하신 답변내용은 입력하신 고객님의 메일로 통보되오니 메일주소를 바르게 입력하여 주시기 바랍니다</p>
									</td>
								</tr>
								<?php
																	 } else { 
										

							?>
									<tr>
										<th scope="row"><strong class="must">*</strong> <label for="uname">성명</label></th>
										<td>
											<p class="ip"><input type="text" name="uname" id="uname" maxlength="10" class="txt" value='<?=$inforow['username']?>' readonly></p>
										</td>
									</tr>
									<tr>
										<th scope="row"><strong class="must">*</strong> <label for="email">이메일</label></th>
										<td>
											<p class="ip"><input type="email" name="email" id="email" maxlength="30" title="이메일 입력" value='<?=$inforow["useremail"]?>' class="txt" readonly></p>
											<p style="margin:6px 0 0;font-size:11px;color:#a60000;">* 문의하신 답변내용은 입력하신 고객님의 메일로 통보되오니 메일주소를 바르게 입력하여 주시기 바랍니다</p>
										</td>
									</tr>
									<?php } ?>

									<!-- // -->
									<tr>
										<th scope="row"><strong class="must">*</strong><label for="tel"> 전화번호</label></th>
										<td>
											<p class="ip"><input type="text" name="tel" id="tel" maxlength="11" title="전화번호 입력" placeholder="ex)0101231234 (숫자만 입력가능)" class="txt"></p>
										</td>
									</tr>
									<tr>
										<th scope="row"><strong class="must">*</strong> <label for="title">제목</label></th>
										<td>
											<p class="ip"><input type="text" name="title" id="title" maxlength="50" title="제목 입력" class="txt"></p>
										</td>
									</tr>
									<tr>
										<th scope="row"><strong class="must">*</strong><label for="content"> 내용</label></th>
										<td>
											<p class="ip"><textarea rows="30" cols="5" name="content" id="content" style="height:230px"></textarea></p>
										</td>
									</tr>
						</table>

						<p><input type="submit" value="문의하기" /></p>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once "./footer.php"; ?>
