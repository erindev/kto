<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("찾아오시는 길 | 한국관광공사"); ?>

<?php

echo '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATyKhEhiaV1PB7BZVp0VncLjY21YjzqWA" type="text/javascript"></script>';
echo '<script src="./script/gmaps.js"></script>';

echo '<script src="./script/map2.js"></script>';

?>



	<div class="subMain" id="main">
		<div class="contName cn1">
			<div class="container">
				<h2>The Way to Destination</h2>
			</div>
		</div>
		<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
		<div class="container">
			<div class="contBody">
				<div class="sub">
					<h3><span>정부 3.0</span>한국관광공사</h3>
					<ul>
<!--						<li><a href="#">CEO 인사말</a></li>-->
						<li><a href="./business_idea.php" title="경영이념 메뉴 바로가기">경영이념</a></li>
<!--						<li><a href="#">연혁</a></li>-->
						<li><a href="./ci.php" title="CI소개 메뉴 바로가기">CI 소개</a></li>
						<li><a href="./community.php" title="보도자료 메뉴 바로가기">보도자료</a></li>
<!--						<li><a href="#">정부 3.0</a></li>-->
						<li><a href="./visitKTO.php" title="찾아오시는길">찾아오시는 길</a></li>
					</ul>
				</div>
				<div class="contArea">
					<h3>찾아오시는 길</h3>
					<ol>
						<li>홈</li>
						<li>한국관광공사</li>
						<li>찾아오시는 길</li>
					</ol>
					<h4>본사</h4>
					<div id="map2"></div>
					<!--<h4>국내지사</h4>
					<div class="한반도"></div>-->
				</div>
			</div>
		</div>
	</div>
	<!--        #main END-->
	<?php include_once "./footer.php"; ?>
