<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("가이드북 | 한국관광공사"); ?>
	<div class="subMain" id="main">
		<div class="contName cn4">
			<div class="container">
				<h2>Guide Book</h2>
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
					<h3>e-Book (가이드북)</h3>
					<ol>
						<li>홈</li>
						<li>고객참여</li>
						<li>e-Book</li>
					</ol>
					<h4>대한민국 관광 가이드북 안내</h4>

					<div class="category">
						<p class="desc">여행하는 도시별로 검색해보세요!</p>
						<select>
							<option value="default">도시선택</option>
							<option value="seoul">서울특별시</option>
							<option value="Busan">부산광역시</option>
							<option value="Daegu">대구광역시</option>
							<option value="Gwangju">광주광역시</option>
							<option value="Ulsan">울산광역시</option>
							<option value="Gyeonggi-do">경기도</option>
							<option value="Gangwon-do">강원도</option>
							<option value="Chungcheongbuk-do">충청북도</option>
							<option value="Chungcheongnam-do">충청남도</option>
							<option value="Jeollabuk-do">전라북도</option>
							<option value="Jeollanam-do">전라남도</option>
							<option value="Jeju-do">제주도</option>
						</select>
						<p><input type="button" value="검색" /></p>
						<p><input type="button" id="requireBtn" value="신청요청하기"/></p>
					</div>
					<div class="bookSelect">
						<ul class="seoul">
							<li>
								<a href="#"><img src="./images/getImage.jpeg" alt="" /></a>
							</li>
							<li>
								<a href="#"><img src="./images/getImage2.jpeg" alt="" /></a>
							</li>
							<li>
								<a href="#"><img src="./images/getImage3.jpeg" alt="" /></a>
							</li>
							<li>
								<a href="#"><img src="./images/getImage4.jpeg" alt="" /></a>
							</li>
							<li>
								<a href="#"><img src="./images/getImage5.jpeg" alt="" /></a>
							</li>
							<li>
								<a href="#"><img src="./images/getImage7.jpeg" alt="" /></a>
							</li>
							<li>
								<a href="#"><img src="./images/getImage8.jpeg" alt="" /></a>
							</li>
							<li>
								<a href="#"><img src="./images/getImage9.jpeg" alt="" /></a>
							</li>
							<li>
								<a href="#"><img src="./images/getImage10.jpeg" alt="" /></a>
							</li>
							<li>
								<a href="#"><img src="./images/getImage11.jpeg" alt="" /></a>
							</li>
							<li>
								<a href="#"><img src="./images/getImage12.jpeg" alt="" /></a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
<?php include_once "./footer.php"; ?>