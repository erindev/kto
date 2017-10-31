<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>관리자페이지</title>

	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="./css/admin.css" rel="stylesheet">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div id="wrapper">
		<header id="header"></header>
		<div class="main">
			<div class="container-fluid">
				<div class="container">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">보도자료</a></li>
						<li><a data-toggle="tab" href="#menu1">이벤트</a></li>
						<li><a data-toggle="tab" href="#menu2">먹을거리</a></li>
						<li><a data-toggle="tab" href="#menu3">숙소</a></li>
						<li><a data-toggle="tab" href="#menu4">채용</a></li>
						<li><a data-toggle="tab" href="#menu5">자연</a></li>
						<li><a data-toggle="tab" href="#menu6">공지사항</a></li>
						<li><a data-toggle="tab" href="#menu7">어드벤처</a></li>
					</ul>

					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">

							<div class="form_main">
							<h4 class="heading"><strong>보도자료</strong> community <span></span></h4>
							<div class="form">
							<form action="./inc/community_process.php" method="post">
							
								<fieldset>
									<legend>보도자료</legend>
									<p>
										<label for="ctitle">제목</label>
										<input type="text" id="ctitle" name="ctitle">
									</p>
									<p>
										<label for="ccont">내용</label>
										<textarea name="ccont" id="ccont"></textarea>
									</p>
									<p>
										<input type="submit">
									</p>
								</fieldset>
							</form>
							</div>
							</div>
						</div>
						<div id="menu1" class="tab-pane fade">
							<div class="form_main">
							<h4 class="heading"><strong>이벤트</strong> event <span></span></h4>
							<div class="form">
							<form action="./inc/event_process.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<legend>이벤트</legend>
									<p>
										<label for="etitle">제목</label>
										<input type="text" id="etitle" name="etitle">
									</p>
									<p>
										<label for="esubcont">서브내용</label>
										<textarea name="esubcont" id="esubcont"></textarea>
									</p>
									<p>
										<label for="econt">내용</label>
										<textarea name="econt" id="econt"></textarea>
									</p>
									<p>
										<label for="edate">기간</label>
										<input type="text" class="txt_3" name="edate1" id="edate">
										~ <input type="text" class="txt_3" name="edate2" id="edate2">
									</p>
									<p>
										<label for="fileToUpload">사진업로드</label>
										<input type="file" name="fileToUpload" id="fileToUpload file_event">
									</p>
									<p>
										<input type="submit">
									</p>
								</fieldset>
							</form>
								</div>
							</div>
						</div>
						<div id="menu2" class="tab-pane fade">
							<div class="form_main">
							<h4 class="heading"><strong>먹을거리</strong> Food <span></span></h4>
							<div class="form">
							<form action="./inc/food_process.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<legend>먹을거리</legend>
									<p>
										<label for="ftitle">제목</label>
										<input type="text" id="ftitle" name="ftitle">
									</p>
									<p>
										<label for="fcity">도시</label>
										<select name="fcity" id="fcity">
											<option value="전체">전체</option>
											<option value="서울">서울</option>
											<option value="부산">부산</option>
											<option value="대구">대구</option>
											<option value="인천">인천</option>
											<option value="광주">광주</option>
											<option value="대전">대전</option>
											<option value="울산">울산</option>
											<option value="세종">세종</option>
											<option value="경기">경기</option>
											<option value="강원">강원</option>
											<option value="충청도">충청도</option>
											<option value="전라도">전라도</option>
											<option value="경상도">경상도</option>
											<option value="제주도">제주도</option>
										</select>
									</p>
									<p>
										<label for="fcont">내용</label>
										<textarea id="fcont" name="fcont"></textarea>
									</p>
									<p>
										<label for="fileToUpload">이미지업로드</label>
										<input type="file" name="fileToUpload" id="fileToUpload file_food">
									</p>
									<p>
										<label for="fpart">분류</label>
										<select id="fpart" name="fpart">
											<option value="전체">전체</option>
											<option value="전통음식">전통음식</option>
											<option value="향토음식">향토음식</option>
											<option value="한식">한식</option>
											<option value="일식">일식</option>
											<option value="양식">양식</option>
											<option value="음식특화거리">음식특화거리</option>
										</select>
									</p>
									<p>
										<input type="submit">
									</p>
								</fieldset>
							</form>
								</div>
							</div>
						</div>
						<div id="menu3" class="tab-pane fade">
							<div class="form_main">
							<h4 class="heading"><strong>숙소</strong> Stay <span></span></h4>
							<div class="form">
							<form action="./inc/stay_process.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<legend>숙소</legend>
									<p>
										<label for="stitle">제목</label>
										<input type="text" name="stitle" id="stitle">
									</p>
									<p>
										<label for="scity">도시</label>
										<select name="scity" id="scity">
											<option value="전체">전체</option>
											<option value="서울">서울</option>
											<option value="부산">부산</option>
											<option value="대구">대구</option>
											<option value="인천">인천</option>
											<option value="광주">광주</option>
											<option value="대전">대전</option>
											<option value="울산">울산</option>
											<option value="세종">세종</option>
											<option value="경기">경기</option>
											<option value="강원">강원</option>
											<option value="충청도">충청도</option>
											<option value="전라도">전라도</option>
											<option value="경상도">경상도</option>
											<option value="제주도">제주도</option>
										</select>
									</p>
									<p>
										<label for="scont">내용</label>
										<textarea id="scont" name="scont"></textarea>
									</p>
									<p>
										<label for="fileToUpload">이미지업로드</label>
										<input type="file" name="fileToUpload" id="fileToUpload file_stay">
									</p>
									<p>
										<label for="spart">분류</label>
										<select id="spart" name="spart">
											<option value="전체">전체</option>
											<option value="호텔">호텔</option>
											<option value="리조트">리조트</option>
											<option value="여관">여관</option>
											<option value="펜션">펜션</option>
											<option value="게스트하우스">게스트하우스</option>
										</select>
									</p>
									<p>
										<input type="submit">
									</p>
								</fieldset>
							</form>
								</div>
							</div>
						</div>
						<div id="menu4" class="tab-pane fade">
							<div class="form_main">
							<h4 class="heading"><strong>채용</strong> Hiring <span></span></h4>
							<div class="form">
							<form action="./inc/hire_process.php" method="post">
								<fieldset>
									<legend>채용</legend>
									<p>
										<label for="htitle">제목</label>
										<input type="text" id="htitle" name="htitle">
									</p>
									<p>
										<label for="hcont">내용</label>
										<textarea id="hcont" name="hcont"></textarea>
									</p>
									<p>
										<label for="hdate">기간</label>
										<input type="text" class="txt_3" name="hdate1" id="hdate">
										~ <input type="text" class="txt_3" name="hdate2" id="hdate2">
									</p>
									<p>
										<input type="submit">
									</p>
								</fieldset>
							</form>
								</div>
							</div>
						</div>
						<div id="menu5" class="tab-pane fade">
							<div class="form_main">
							<h4 class="heading"><strong>자연</strong> Nature <span></span></h4>
							<div class="form">
							<form action="./inc/nature_process.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<legend>자연</legend>
									<p>
										<label for="atitle">제목</label>
										<input type="text" id="atitle" name="atitle">
									</p>
									<p>
										<label for="acont">내용</label>
										<textarea name="acont" id="acont"></textarea>
									</p>
									<p>
										<label for="acity">도시</label>
										<select name="acity" id="acity">
											<option value="전체">전체</option>
											<option value="서울">서울</option>
											<option value="부산">부산</option>
											<option value="대구">대구</option>
											<option value="인천">인천</option>
											<option value="광주">광주</option>
											<option value="대전">대전</option>
											<option value="울산">울산</option>
											<option value="세종">세종</option>
											<option value="경기">경기</option>
											<option value="강원">강원</option>
											<option value="충청도">충청도</option>
											<option value="전라도">전라도</option>
											<option value="경상도">경상도</option>
											<option value="제주도">제주도</option>
										</select>
									</p>
									<p>
										<label for="fileToUpload">사진업로드</label>
										<input type="file" name="fileToUpload" id="fileToUpload file_nature">
									</p>
									<p>
										<input type="submit">
									</p>
								</fieldset>
							</form>
								</div>
							</div>
						</div>
						<div id="menu6" class="tab-pane fade">
							<div class="form_main">
							<h4 class="heading"><strong>공지사항</strong> Notice <span></span></h4>
							<div class="form">
							<form action="./inc/notice_process.php" method="post"
							enctype="multipart/form-data">
								<fieldset>
									<legend>공지사항</legend>
									<p>
										<label for="ttitle">제목</label>
										<input type="text" id="ttitle" name="ttitle">
									</p>
									<p>
										<label for="tcont">내용</label>
										<textarea name="tcont" id="tcont"></textarea>
									</p>
									<p>
										<label for="tdate">기간</label>
										<input type="text" name="tdate1" id="tdate" class="txt_3">
										~ <input type="text" name="tdate2" id="tdate" class="txt_3">
									</p>
									<p>
										<label for="fileToUpload">사진업로드</label>
										<input type="file" name="fileToUpload" id="fileToUpload file_notice">
									</p>
									<p>
										<input type="submit">
									</p>
								</fieldset>
							</form>
								</div>
							</div>
						</div>
						<div id="menu7" class="tab-pane fade">
							<div class="form_main">
							<h4 class="heading"><strong>어드벤처</strong> Adventure <span></span></h4>
							<div class="form">
							<form action="./inc/adventure_process.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<legend>어드벤처</legend>
									<p>
										<label for="vtitle">제목</label>
										<input type="text" id="vtitle" name="vtitle">
									</p>
									<p>
										<label for="vcont">내용</label>
										<textarea name="vcont" id="vcont"></textarea>
									</p>
									<p>
										<label for="vcity">도시</label>
										<select name="vcity" id="vcity">
											<option value="전체">전체</option>
											<option value="서울">서울</option>
											<option value="부산">부산</option>
											<option value="대구">대구</option>
											<option value="인천">인천</option>
											<option value="광주">광주</option>
											<option value="대전">대전</option>
											<option value="울산">울산</option>
											<option value="세종">세종</option>
											<option value="경기">경기</option>
											<option value="강원">강원</option>
											<option value="충청도">충청도</option>
											<option value="전라도">전라도</option>
											<option value="경상도">경상도</option>
											<option value="제주도">제주도</option>
										</select>
									</p>
									<p>
										<label for="fileToUpload">사진업로드</label>
										<input type="file" name="fileToUpload" id="fileToUpload file_adv">
									</p>
									<p>
										<input type="submit">
									</p>
								</fieldset>
							</form>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<footer id="footer"></footer>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>\

</body>

</html>
