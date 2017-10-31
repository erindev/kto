<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("자연 | 한국관광공사"); ?>
<?php

	$all = "select * from nature";
	$result = mysqli_query($con, $all) or die (mysqli_error($con));
	$rowCnt = mysqli_affected_rows($con);
	$cnt = 0;

	$reverOrder = "select * from nature order by ano desc";

	$result = mysqli_query($con, $reverOrder) or die (mysqli_error($con));


	

	$page = ($_GET['page'])?$_GET['page']:1;

	$list = 5;

	$block = 3;

	$pageNum = ceil($rowCnt/$list); // 총 페이지
	$blockNum = ceil($pageNum/$block); // 총 블록
	$nowBlock = ceil($page/$block); // 1

//	echo "$pageNum" . "/" . "$blockNum" ."/". "$nowBlock";

	$s_page = ($nowBlock * $block) - 2; 
	if ($s_page <= 1) {
		$s_page = 1;
	}
	$e_page = $nowBlock*$block;
	if ($pageNum <= $e_page) {
		$e_page = $pageNum;
	}

	$s_point = ($page-1) * $list;


$result2 = mysqli_query( $con, "SELECT * FROM nature ORDER BY ano DESC LIMIT $s_point, $list");


?>

<div class="subMain" id="main">
	<div class="contName cn6">
		<div class="container">
			<h2>Nature Travel</h2>
		</div>
	</div>
	<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
	<div class="container">
		<div class="contBody">
			<div class="sub">
				<h3><span>대한민국</span>파헤치기</h3>
				<ul>
					<li><a href="./nature.php" title="자연 메뉴 바로가기">자연</a></li>
					<li><a href="./adventure.php" title="어드벤처 메뉴 바로가기">어드벤처</a></li>
					<li><a href="./food_stay.php" title="먹을거리 메뉴 바로가기">먹을거리</a></li>
					<li><a href="./food_stay.php" title="숙박 메뉴 바로가기">숙박</a></li>
				</ul>
			</div>
			<div class="contArea">
				<h3>자연</h3>
				<ol>
					<li>홈</li>
					<li>대한민국 파헤치기</li>
					<li>자연</li>
				</ol>
				<h4>전통음식부터 다양한 음식의 천국</h4>
				<p>2경중 하나인 강동·주전 몽돌해변은 보석처럼 반짝이는 몽돌과 하얗게 부서지는 파도가 어우러져 절경을 이루고 있다. 바닷가하면 흔히 속초, 강릉, 동해, 삼척을 잇는 강원도 쪽만 연상하지만 울산의 주전에서 감포로 이어지는 동해안도 이에 못지않은 사람들이 찾고 있는 곳이다. 특히 산과 바다를 끼고 이어지는 국도는 드라이브 코스로 으뜸이며 주변에 볼만한 곳들도 많아 겨</p>
			</div>
		</div>
	</div>
	<div class="koreaTravel">
		<div class="container">
			<div class="koreaTrain">
				<ul class="kt_cont">
					<li><img src="./images/kt5.jpg" alt="문수산 이미지" />
						<div class="ktc">
							<a href="#ctr1" title="첫번째배너이미지"></a>
							<h3>문수산</h3>
							<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시 울주군 청량면, 삼동면, 범서읍</h4>
							<span class="con_txt">울주군 청량면과 삼동면, 범서읍에 걸쳐 있는 문수산은 청량하고 신라때 문수보살이 산세가 청량하고 아름다워 여기에 와서 살았다는데서 처음에는 청량산으로 불렀다.이 산에는 전통사찰인 문수사가 있다. 신라 제27대 선덕여왕 15년(646)에 자장율사가 세웠다고 한다. 문수산이나 문수사는 불가의 문수보살의 이름을 딴 것이다. </span>
						</div>
					</li>
					<li><img src="./images/kt6.jpg" alt="영축산 이미지" />
						<div class="ktc">
							<a href="#ctr2" title="두번째배너이미지"></a>
							<h3>영축산(취서산)</h3>
							<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시 울주군 울주군 삼남면, 상북면/경남 양산시 하북면, 원동면</h4>
							<span class="con_txt">영축산은 울주군 삼남면, 상북면, 양산시 하북면과 원동면 경계에 위치하고 있다. 병풍처럼 둘러싸인 기암괴석과 노송, 영축산 정상에서 신불산 정상까지 이어지는 억새능선이 장관을 이루고 있다.  영축산은 불교의 발상국인 인도의 영취산에서 연유된 것으로 추측되며 이 산의 모습이 독수리 머리를 닮았다 하여 붙은 이름이다. 언양이나 신불산 쪽에서 거대한 바위봉을 바라보면 마치 큰 독수리가 동해로 날기 위해 머리를 조아리고 날개를 펴는 모습을 하고 있다. 영축산 아래에는 우리나라 삼보사찰 중의 하나인 통도사가 있어 대웅전과 금강계단, 사리탑, 국장생석표, 대광명전, 구룡신지, 일주문, 사천왕상 등의 유명한 역사유물을 간직하고 있다. 능선에 오르면 60여 만 평의 억새평원을 볼 수 있는데 이 억새평원을 가로지르는 긴 돌담이 단조성(丹鳥城)이다. 현재 이 돌담은 서북쪽으로는 많이 허물어졌으나 동남쪽으로는 옛 모습을 보존하고 있다.암행어사 박문수가 영남을 시찰하는 도중 이 산성에 올라 "산성의 험준함이 한명의 장부가 만 명의 적을 당해낼 수 있는 곳"이라고 말해 이곳이 천연의 요새임을 알려주고 있다. 하지만 임진왜란 당시 의병이 흘린 피가 얼마나 많았던지 피로 못을 이루었다는 이야기가 전해오고 있다. 지금도 이 지역 마을사람들은 백발등으로 쳐들어온 왜병을 원망하며 "원수로다 원수로다, 백발등이 원수로다"라는 노래를 부른다.</span>
						</div>
					</li>
					<li><img src="./images/kt7.jpg" alt="대운산 이미지" />
						<div class="ktc">
							<a href="#ctr3" title="세번째배너이미지"></a>
							<h3>대운산</h3>
							<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시 울주군 온양읍 / 경남 양산시 웅상읍</h4>
							<span class="con_txt">울주군 온양읍 운화리와 양산시 웅상읍 명곡리에 걸쳐 있는 산으로 낙동정맥의 최고봉이며 원효대사의 마지막 수도지로 알려져 있다. 경치가 빼어난 산은 아니지만 능선의 적당한 기복과 오르내림이 있어 산행하는 재미가 있다. 또한, 대운산 능선에서 정상까지 3Km가 넘는 등산로 양쪽에는 진달래와 억새가 군락을 이루고 있어 때를 맞춰 오른다면 꽃속에 파묻혀 길을 걷는 즐거움을 맛볼 수 있다. 이 산의 초명은 동국여지승람이나 오래된 읍지에 불광산으로 되어 있었으나 언제인가부터 대운산으로 불리워지고 있다.</span>
						</div>
					</li>
					<li><img src="./images/kt8.jpg" alt="천황산이미지" />
						<div class="ktc">
							<a href="#ctr4" title="네번째배너이미지"></a>
							<h3>천황산</h3>
							<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시 울주군 상북면 / 경남 밀양시 산내면, 단장면</h4>
							<span class="con_txt">천황산은 울주군 상북면과 밀양시 단장면, 산내면 경계에 있는 산이다. 영남알프스의 중앙에 위치하여 산 정상에 서면 영남알프스의 거대한 산줄기와 사자평 억새밭이 한눈에 들어온다. 산세가 아름다워 한반도의 영산, 또는 삼남의 금강으로 불린다.천황산 주봉은 사자봉이다. 정상 서쪽 바위 부분이 사자머리처럼 생겼다하여 붙여진 이름으로, 사자봉 아래 사자평에는 사자암이란 절이 있었다고 한다. 사자평은 신라 화랑들과 사명대사가 이끈 승병들이 훈련하던 곳으로 우리 민족의 씩씩한 기상이 넘치던 곳이다.해발 700~800m 고도에 펼쳐진 고산평원은 습기를 많이 머금은 지형적 요인과 오랜 벌목, 화전, 방목 등 인위적 요인이 겹쳐 국내 어디서도 보기 힘든 독특한 경관을 보여준다.북쪽 산비탈에 있는 밀양 얼음골은 여름날 피서객들이 즐겨 찾으며, 3월에 얼음이 얼기 시작하여 삼복더위를 지나 처서가 되면 바위틈새의 냉기가 점차 줄어드는 신비한 곳이다. </span>
						</div>
					</li>
				</ul>
				<div class="control">
					<ul>
						<li><a href="#" id="ctr4" title="첫번째 배너이미지와 내용 보기"><img src="./images/slide_btn_off.png" alt="첫번째 게시물 보러가기 인덱스 버튼"></a></li>
						<li><a href="#" id="ctr1" title="두번째 배너이미지와 내용 보기"><img src="./images/slide_btn_off.png" alt="두번째 게시물 보러가기 인덱스 버튼"></a></li>
						<li><a href="#" id="ctr2" title="세번째 배너이미지와 내용 보기"><img src="./images/slide_btn_off.png" alt="세번째 게시물 보러가기 인덱스 버튼"></a></li>
						<li><a href="#" id="ctr3" title="네번째 배너이미지와 내용 보기"><img src="./images/slide_btn_off.png" alt="네번째 게시물 보러가기 인덱스 버튼"></a></li>
					</ul>
					<span class="playing">
							<a href="#" title="banner1"><img src="./images/pause.png" alt="배너슬라이드 정지 버튼" /></a>
						</span>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="kt_category">
			<form action="#" method="post">
				<fieldset>
					<legend>맛집 항목</legend>
					<p class="nature">
						<input type="text" name="stay_search" placeholder="검색어를 입력해주세요" id="nature_search" />
						<input type="submit" value="검색" />
					</p>
				</fieldset>
			</form>

		</div>
		<ul class="order">
			<li><a href="#" title="리뷰순으로 정렬해서 보기">리뷰순<img src="./images/down.png" alt="삼각형"></a></li>
			<li><a href="#" title="추천순으로 정렬해서 보기">추천순<img src="./images/down.png" alt="삼각형"></a></li>
			<li><a href="#" title="이름순으로 정렬해서 보기">이름순<img src="./images/down.png" alt="삼각형"></a></li>
		</ul>

		<ul class="view">
		<?php
			for ( $var = 0; $var < $list ; $var++ ) {
			$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
			?>
			
				<?php
				$num = mysqli_num_rows($result2);
				//echo "$num";
				
				if($num != $list) { //리스트개수만큼없을때
					$num = $list;
					
					$buyNum = $rowCnt - ( $num*($page-1)); //현재 그 페이지 리스트 개수 // 3
					$Num = $buyNum - $var;
					
					if($Num <= 0 ){
						
					} else {?>
					<li>
					<p class="img"><a href="nature_detail.php?no=<?=$row['ano']?>" title="해당 글 자세히 보기"><img src="./inc/<?=$row['aimage']?>" alt="해당 포스터 이미지"/></a></p>

					<p class="tit">
						<a href="nature_detail.php?no=<?=$row['ano']?>" title="해당 글 자세히 보기">
							<?=$row['atitle']?><span><?=$row['acity']?></span></a>
					</p>
					<p class="detail">
						<a href="#" title="해당 글 자세히 보기">
							<?=$row['acont']?>
						</a>
					</p>
					<p class="etc">
						<span>사진공유수</span>
						<span>리뷰수</span>
						<span>추천수</span>
					</p>
			</li>
					
				<?php
					}
						
				
				} else {  //리스트개수만큼 있을때
					?> 
			<li>
					
					<p class="img"><a href="nature_detail.php?no=<?=$row['ano']?>" title="해당 글 자세히 보기"><img src="./inc/<?=$row['aimage']?>"/></a></p>

					<p class="tit">
						<a href="nature_detail.php?no=<?=$row['ano']?>" title="해당 글 자세히 보기">
							<?=$row['atitle']?><span><?=$row['acity']?></span></a>
					</p>
					<p class="detail">
						<a href="#" title="해당 글 자세히 보기">
							<?=$row['acont']?>
						</a>
					</p>
					<p class="etc">
						<span>사진공유수</span>
						<span>리뷰수</span>
						<span>추천수</span>
					</p>
						</li>
			
			<?php
				}
			}
			?>
			
			
	

		</ul>
		<div class="pageNav">
							<a class="pr" href="<?=$PHP_SELP?>?page=<?=$s_page-1?>">이전</a>
							<?php
					for ($p=$s_page; $p<=$e_page; $p++) {
?>

								<a href="<?=$PHP_SELP?>?page=<?=$p?>">
									<?=$p?>
								</a>

								<?php
}
?>
								<a class="ne" href="<?=$PHP_SELP?>?page=<?=$e_page+1?>">다음</a>
						</div>
	</div>

</div>
<!--        #main END-->
<?php include_once "./footer.php"; ?>