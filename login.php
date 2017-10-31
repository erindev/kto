<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("로그인 | 한국관광공사"); ?>
<section id="main">
	<div class="container">
		<h3 class="login">로그인</h3>
		<p class="desc">VisitKorea 홈페이지에 오신 것을 환영합니다. 로그인 하시면 회원님을 위한 더 많은 서비스를 경험하실 수 있습니다.</p>
		<form action="./inc/login_process.php" method="post" id="loginForm">
			<fieldset>
				<legend>로그인</legend>
				<p><input type="text" placeholder="아이디" id="userid" name="userid" /></p>
				<p><input type="password" placeholder="비밀번호" id="userpass" name="userpass" /></p>
				<p class="chb"><input type="checkbox" id="saveid" name="saveid" /><label for="saveid">아이디 저장</label></p>
				<p class="loginbtn"><input type="submit" value="로그인" id="login" name="login" /><span class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true" onlogin="checkLoginState();" ></span></p>
				
				
<!--
				<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
				</fb:login-button>
-->
				<script>
					function statusChangeCallback(response) {
						console.log('statusChangeCallback');
						console.log(response);
						// response 객체는 현재 로그인 상태를 나타내는 정보를 보여준다.
						// 앱에서 현재의 로그인 상태에 따라 동작하면 된다.
						// FB.getLoginStatus().의 레퍼런스에서 더 자세한 내용이 참조 가능하다.
						if (response.status === 'connected') {
							// 페이스북을 통해서 로그인이 되어있다.
							testAPI();
						} else if (response.status === 'not_authorized') {
							// 페이스북에는 로그인 했으나, 앱에는 로그인이 되어있지 않다.
							document.getElementById('status').innerHTML = 'Please log ' + 'into this app.';
						} else {
							// 페이스북에 로그인이 되어있지 않다. 따라서, 앱에 로그인이 되어있는지 여부가 불확실하다.
							document.getElementById('status').innerHTML = 'Please log ' + 'into Facebook.';
						}
					}
					// 이 함수는 누군가가 로그인 버튼에 대한 처리가 끝났을 때 호출된다.
					// onlogin 핸들러를 아래와 같이 첨부하면 된다.

					function checkLoginState() {
						FB.getLoginStatus(function(response) {
							statusChangeCallback(response);
						});
					}

					window.fbAsyncInit = function() {
						FB.init({
							appId: '107492893264148',
							cookie: true,
							xfbml: true,
							version: 'v2.8'
						});
						FB.AppEvents.logPageView();
					};

					(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) {
							return;
						}
						js = d.createElement(s);
						js.id = id;
						js.src = "//connect.facebook.net/en_US/sdk.js";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));

					// 로그인이 성공한 다음에는 간단한 그래프API를 호출한다.
					// 이 호출은 statusChangeCallback()에서 이루어진다.
					function testAPI() {
						console.log('Welcome! Fetching your information.... ');
						FB.api('/me', function(response) {
							console.log(JSON.stringify(response));
						});


						FB.api('/me', function(response) {
							console.log('Successful login for: ' + response.name);
							/*document.getElementById('status').innerHTML = */
							alert(response.name + '님, 페이스북 계정으로 로그인 되었습니다!');
							window.location.href='http://yjkang3530.dothome.co.kr/KTO/index.php';
							
						});
					}
					
					

				</script>
				
				<p>
					<input type="button" value="아이디 찾기" id="findid" name="findid" />
					<input type="button" value="비밀번호 찾기" id="findpass" name="findpass" />
				</p>
				<p class="joinP">
					<label for="join">아직 VisitKorea 회원이 아니세요?</label><input type="button" value="회원가입" id="join" name="join" />
				</p>
			</fieldset>
			<ul>
				<li>
					<a href="http://korean.visitkorea.or.kr/kor/goodstay3/index.jsp" title="굿스테이 홈페이지 바로가기" target="_blank"><img src="./images/brnGoodStay.gif" alt="굿스테이홈페이지 바로가기아이콘"/>굿스테이</a>
				</li>
				<li>
					<a href="https://jungmungolf.visitkorea.or.kr/j_golf/kor/gr_main.jsp" title="중문 골프장 홈페이지 바로가기" target="_blank"><img src="./images/brnJoongGolf.gif" alt="중문골프장 홈페이지 바로가기 아이콘"/>중문골프장</a>
				</li>
				<li>
					<a href="http://hanok.visitkorea.or.kr/kor/hanok/index.do" title="한옥스테이 홈페이지 바로가기" target="_blank"><img src="./images/brnKoreaHouse.gif" alt="한옥스테이 홈페이지 바로가기 아이콘"/>한옥스테이</a>
				</li>
				<li>
					<a href="http://k-mice.visitkorea.or.kr/" title="K-MICE 홈페이지 바로가기" target="_blank"><img src="./images/brnKMICE.gif" alt="K-MICE 홈페이지 바로가기 아이콘"/>K-MICE</a>
				</li>
				<li>
					<a href="http://korean.visitkorea.or.kr/kor/tt/pr_gallery/new_photo_gallery/main/main.jsp" title="온라인사진갤러리 홈페이지 바로가기" target="_blank"><img src="./images/brnPhotoGallery.gif" alt="온라인사진갤러리 홈페이지 바로가기 아이콘"/>온라인사진갤러리</a>
				</li>
				<li>
					<a href="http://korean.visitkorea.or.kr/kor/bz15/access/brfree/brfree_main.jsp" title="무장애여행 홈페이지 바로가기" target="_blank"><img src="./images/brnAccess.gif" alt="무장애여행 홈페이지 바로가기 아이콘"/>무장애여행</a>
				</li>
			</ul>
		</form>

		<div class="login_description">
			<ul>
				<li>회원가입/로그인 문의 ICT전략팀 서비스데스크 033)738-3860 [온라인 원격지원]</li>
				<li>관광안내 문의 1330 (일반전화, 공중전화) , 02) 1330 (휴대폰)</li>
			</ul>
			<ol>
				<li>
					<p>한 번에 검색하세요</p><span>
    우리나라 전국의 관광지, 문화시설,숙박,
    음식점, 레포츠, 쇼핑, 교통등의 국내
    관광정보를 한번에 검색하세요</span></li>
				<li>
					<p>빠르고 신속합니다.</p><span>우리나라 전국에서 진행되는 문화행사
    등의 정보를 보다 정확하게, 보다 빨리
    제공해 드립니다.</span></li>
				<li>
					<p>믿을 수 있습니다.</p><span>믿을 수 있는 여행사와 연계되어 원스톱
    예약이 가능합니다. 여행자료와 상품을
    따로 찾는 번거로움이 없습니다.</span></li>
				<li>
					<p>여행 정보가 가득합니다.</p><span>구석구석 답사단의 다양한 여행기는
    유용한 참고 자료로 활용될 수
    있습니다.</span></li>
			</ol>
		</div>
	</div>
</section>
<!--        #main END-->
<?php include_once "./footer.php"; ?>
