<?php include_once "./inc/db_connect.php";
	session_cache_expire(10); 
	session_start();

?>


<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />
	<title>한국관광공사</title>
	<link href="./css/reset.css" type="text/css" rel="stylesheet" />
	<link href="./css/layout.css" type="text/css" rel="stylesheet" />
	<link href="./css/base.css" type="text/css" rel="stylesheet" />
	<link href="./css/main.css" type="text/css" rel="stylesheet" />
	<link href="./css/response.css" type="text/css" rel="stylesheet" />
	<link href="./css/subPage.css" type="text/css" rel="stylesheet" />
	<link href="./css/join.css" type="text/css" rel="stylesheet" />
	<link href="./css/login.css" type="text/css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!--[if lt IE 9]> <script src="./script/html5shiv.js"></script> <![endif]-->


</head>

<body>
	<div id="wrapper">
		<ul class="skip_nav">
			<li><a href="#gnb" title="주메뉴로 포커스가 이동됩니다">주메뉴</a></li>
			<li><a href="#main" title="본문으로 포커스가 이동됩니다.">본문바로가기</a></li>
		</ul>
		<div class="top">
			<a href="#" id="top">

				<img src="./images/top2.png" alt="위로가기버튼 링크" />
				<img src="./images/mouse.png" alt="마우스 클릭이미지">
			</a>
		</div>
		<header id="header">
			<h1 class="hidden">한국관광공사</h1>
			<nav class="navG gnbPc">
				<div class="container">
					<h1 class="logo"><a href="./index.php" title="한국관광공사 메인 페이지로 이동"><img src="./images/logo.jpg" alt="한국관광공사 로고이미지"></a></h1>
					<h2 class="hidden">메인메뉴(GNB)</h2>
					<p class="menuicon">
						<a href="#"><img src="./images/options.png" alt="메뉴열기" /></a>
					</p>
					<ul class="gnb gnbGeneral" id="gnb">
						<li class="span_ex"><a href="#" title="대한민국 파헤치기(메뉴1)"><span>대한민국</span><br />파헤치기</a>
							<ul class="subM one">
								<li><a href="./nature.php" title="자연 자세히 보러가기">자연</a></li>
								<li><a href="./adventure.php" title="어드벤처 자세히 보러가기">어드벤처</a></li>
								<li><a href="./food_stay.php" title="먹을거리/숙박 자세히 보러가기">먹을거리/숙박</a></li>
							</ul>
						</li>
						<li class="gnbM g2"><a href="#" title="여행정보(메뉴2)">여행정보</a>
							<ul class="subM two">
								<li><a href="./recommendTravel.php" title="추천여행명소 자세히 보러가기">추천여행명소</a></li>
								<li><a href="./koreaInfo.php" title="전국관광안내소 자세히 보러가기">전국관광안내소</a></li>
								<li><a href="./travelMap.php" title="대한민국 관광지도 보러가기">관광지도</a></li>
							</ul>
						</li>
						<li class="gnbM g3"><a href="#" title="커뮤니티(메뉴3)">커뮤니티</a>
							<ul class="subM three">
								<li><a href="./event.php" title="행사안내 자세히 보러가기">행사안내</a></li>
								<li><a href="./notice.php" title="공지사항 자세히 보러가기">공지사항</a></li>
								<li><a href="./hire.php" title="채용안내 자세히 보러가기">채용안내</a></li>
							</ul>
						</li>
						<li class="gnbM g4"><a href="#" title="고객참여(메뉴4)">고객참여</a>
							<ul class="subM four">
								<li><a href="./customerSound.php" title="고객소리함 자세히 보러가기">고객소리함</a></li>
								<li><a href="./photo.php" title="관광사진갤러리 자세히 보러가기">관광사진갤러리</a></li>
								<li><a href="./request.php" title="홍보물 신청 자세히 보러가기">홍보물 신청</a></li>
								<li><a href="./guideBook.php" title="e-Book 보러가기">e-Book</a></li>
							</ul>
						</li>
						<li class="span_ex"><a href="#" title="한국관광공사(메뉴5)"><span>정부 3.0</span><br />한국관광공사</a>
							<ul class="subM five">
<!--								<li><a href="./ceo.php" title="CEO 인사말 자세히 보러가기">CEO 인사말</a></li>-->
								<li><a href="./business_idea.php" title="경영이념 자세히 보러가기">경영이념</a></li>
								<!--<li><a href="./history.php" title="연혁 자세히 보러가기">연혁</a></li>-->
								<li><a href="./ci.php" title="CI 소개 보러가기">CI 소개</a></li>
								<li><a href="./community.php" title="보도자료 자세히 보러가기">보도자료</a></li>
								<li><a href="./visitKTO.php" title="찾아오시는 길 자세히 보러가기">찾아오시는 길</a></li>
							</ul>
						</li>
						<li class="search">
							<a href="#" title="검색기능" class="br_none"><img src="./images/search.png" alt="검색아이콘" /></a>
							<div class="searchLayer">
								<form action="#" name="menuSearch" method="post" id="searchForm" action="./searchResult.php">
									<fieldset>
										<legend>통합검색</legend>
										<p class="title"><strong>통합검색</strong></p>
										<p>
											<select>
                                    <option id="default">통합검색</option>
                                    <option id="menu">메뉴</option>
                                    <option id="news">뉴스</option>
                                    <option id="travel">여행</option>
                                    <option id="webpage">웹페이지</option>
                                    <option id="peer">직원/업무</option>
                                </select>
										</p>
										<p>
											<input type="text" placeholder="검색어를 입력하세요" />
										</p>
										<p>
											<input type="submit" value="검색하기" id="searchGo" />
										</p>
									</fieldset>
								</form>
								<ol class="bestRanking">
									<li class="title"><strong>인기검색어</strong></li>
									<li><a href="#" title=""><span>1</span>가이드북</a></li>
									<li><a href="#" title=""><span>2</span>전국지도</a></li>
									<li><a href="#" title=""><span>3</span>한국관광공사 위치</a></li>
									<li><a href="#" title=""><span>4</span>여행상담신청</a></li>
									<li><a href="#" title=""><span>5</span>한국관광공사 공채일정</a></li>
								</ol>
							</div>
						</li>
					</ul>
					
					<p class="search">
						<a href="#" title="검색기능" class="br_none"><img src="./images/search.png" alt="검색아이콘" /></a>
					</p>
				</div>
				<nav class="navG gnbMobile">
			<div class="bind">
			<h2 class="hidden">모바일버전메인메뉴(GNB)</h2>
				<ul>
						<li class="span_ex"><a href="#" title="대한민국 파헤치기(메뉴1)"><span>대한민국</span><br />파헤치기</a>
							<ul class="subM one">
								<li><a href="./nature.php" title="자연 자세히 보러가기">자연</a></li>
								<li><a href="./adventure.php" title="액티비티 자세히 보러가기">액티비티</a></li>
								<li><a href="./food_stay.php" title="먹을거리 자세히 보러가기">먹을거리</a></li>
								<li><a href="./food_stay.php" title="숙박 보러가기">숙박</a></li>
							</ul>
						</li>
						<li class="gnbM g2"><a href="#" title="여행정보(메뉴2)">여행정보</a>
							<ul class="subM two">
								<li><a href="./recommendTravel.php" title="추천여행일정 자세히 보러가기">추천여행일정</a></li>
								<li><a href="./koreaInfo.php" title="전국관광안내소 보러가기">전국관광안내소</a></li>
								<li><a href="./travelMap.php" title="대한민국 지도 보러가기">관광지도</a></li>
							</ul>
						</li>
						<li class="gnbM g3"><a href="#" title="커뮤니티(메뉴3)">커뮤니티</a>
							<ul class="subM three">
								<li><a href="./event.php" title="행사안내 자세히 보러가기">행사안내</a></li>
								<li><a href="./notice.php" title="공지사항 자세히 보러가기">공지사항</a></li>
								<li><a href="./hire.php" title="채용안내 자세히 보러가기">채용안내</a></li>
							</ul>
						</li>
						<li class="gnbM g4"><a href="#" title="고객참여(메뉴4)">고객참여</a>
							<ul class="subM four">
								<li><a href="./customerSound.php" title="고객소리함 자세히 보러가기">고객소리함</a></li>
								<li><a href="./photo.php" title="관광사진갤러리 자세히 보러가기">관광사진갤러리</a></li>
								<li><a href="./request.php" title="홍보물 신청 자세히 보러가기">홍보물 신청</a></li>
								<li><a href="./guideBook.php" title="e-Book 보러가기">e-Book</a></li>
							</ul>
						</li>
						<li class="span_ex"><a href="#" title="한국관광공사(메뉴5)"><span>정부 3.0</span><br />한국관광공사</a>
							<ul class="subM five">
<!--							<li><a href="./ceo.php" title="CEO 인사말 자세히 보러가기">CEO 인사말</a></li>-->
								<li><a href="./business_idea.php" title="경영 이념 자세히 보러가기">경영이념</a></li>
<!--								<li><a href="./history.php" title="연혁 자세히 보러가기">연혁</a></li>-->
								<li><a href="./history.php" title="CI 소개 보러가기">CI 소개</a></li>
								<li><a href="./community.php" title="보도자료 자세히 보러가기">보도자료</a></li>
								<li><a href="./visitKTO.php" title="찾아오시는 길 자세히 보러가기">찾아오시는 길</a></li>
							</ul>
						</li>
						<li class="search">
							<a href="#" title="검색기능" class="br_none"><img src="./images/search.png" alt="검색아이콘" /></a>
						</li>
					</ul>
					</div>
			</nav>
			</nav>
			
			<section class="lnb">
				<h2 class="hidden">LNB</h2>
				<div class="container">
					<section class="info in1">
						<h2 class="hidden">관련홈페이지(lnb1)</h2>
						<ul>
							<li><a href="http://korean.visitkorea.or.kr/kor/bz15/addOn/main/publish/index.jsp" title="대한민국 구석구석 홈페이지 바로가기-새창열림-" target="_blank">대한민국구석구석 <img src="./images/foreign.png" alt="대한민국 구석구석 홈페이지 바로가기 아이콘" /></a></li>
							<li><a href="http://www.gocamping.or.kr/" title="고캠핑 홈페이지 바로가기-새창열림-" target="_blank">고캠핑 <img src="./images/foreign.png" alt="고캠핑 홈페이지 바로가기 아이콘"/></a></li>
							<li class="br_none"><a href="http://www.koreatrails.or.kr/" title="걷기여행길 홈페이지 바로가기-새창열림-" target="_blank">걷기여행길 <img src="./images/foreign.png" alt="걷기여행길 홈페이지 바로가기 아이콘"/></a></li>
						</ul>
					</section>
					<section class="info in2">
						<h2 class="hidden">유틸리티(lnb2)</h2>
						<ul>
							<?php
					//1.로그인 세션이 없다면 login과 join로 넘기기
					if ( empty($_SESSION['userid'] ) ){ ?>
								<li>
									<a href="./login.php" title="로그인"><img src="./images/login.png" alt="로 그인아이콘" /> 로그인</a>
								</li>
								<li>
									<a href="./joining.php" title="회원가입"><img src="./images/user.png" alt="회원가입 아이콘" /> 회원가입</a>
								</li>
								<?php
					} else if ( !empty($_SESSION['userid']) || $userId ) { ?>
									<li><span style="color:#ff0099"><?=$_SESSION['userid']?></span>님 환영합니다.<li></li>
							<li>	<a href="./inc/logout.php" title="로그아웃페이지 바로가기" style="color:#f00">logout </a></li>
									<?php	} ?>
										<li>
											<a href="./sitemap.php" title="사이트맵"><img src="./images/sitemap.png" alt="사이트맵 아이콘" /> 사이트맵</a>
										</li>
										<li class="br_none">
											<form action="#" method="get">
												<fieldset>
													<legend class="hidden">홈페이지 기본 언어 설정</legend>
													<select name="Language">
                                        <option value="한국어">한국어</option>
                                        <option value="English">English</option>
                                        <option value="日本語">日本語</option>
                                        <option value="简体中文">简体中文</option>
                                        <option value="繁體中文">繁體中文</option>
                                    </select>
												</fieldset>
											</form>
										</li>
						</ul>
					</section>
				</div>
			</section>
		</header>
