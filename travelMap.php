<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("관광지도 | 한국관광공사"); ?>

<?php

echo '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATyKhEhiaV1PB7BZVp0VncLjY21YjzqWA" type="text/javascript"></script>';
echo '<script src="./script/gmaps.js"></script>';
echo '<script src="./script/map.js"></script>';

?>

	<div class="subMain" id="main">
		<div class="contName cn5">
			<div class="container">
				<h2>Korea Travel Map</h2>
			</div>
		</div>
		<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
		<div class="container">
			<div class="contBody">
				<div class="sub">
					<h3>여행정보</h3>
					<ul>
						<li><a href="./recommendTravel.php" title="추천여행명소 메뉴 바로가기">추천여행명소</a></li>
						<li><a href="./koreaInfo.php" title="전국관광안내소 메뉴 바로가기">전국관광안내소</a></li>
						<li><a href="./travelMap.php" title="대한민국 지도 보러가기">관광지도</a></li>
					</ul>
				</div>
				<div class="contArea">
					<h3>관광지도</h3>
					<ol>
						<li>홈</li>
						<li>여행정보</li>
						<li>관광지도</li>
					</ol>
					<form method="post" id="geocoding_form">
						<p class="locationSearch"><label for="address">★ 찾고 싶은 장소가 있으신가요?</label><input type="text" id="address" /><input type="submit" value="Search" /></p>
					</form>
					<div id="map1"></div>
				</div>
			</div>
		</div>
	</div>
	<!--        #main END-->
	<?php include_once "./footer.php"; ?>
