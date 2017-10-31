<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("보도자료 | 한국관광공사"); ?>
<?php

	$no = $_GET['no'];

	$title = $_POST['title'];
	 ##### admin 비밀번호여야지 통과

	$content = $_POST['content'];
	


	$all = "select userpass from kto_members where userid='admin'";
	$all_result = mysqli_query($con, $all);
	$all_row = mysqli_fetch_array($all_result, MYSQLI_ASSOC);

	if ( $_POST['pass'] == $all_row['userpass'] )
	{ 
//		if ( $date == "") {ccont='$content'
//				
//		$sql= "update event SET etitle='$title', econt='$content' where eno='$no'";
//		$result = mysqli_query($con, $sql) or die (mysqli_error($con));
//		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//		
//		echo "<script>alert('수정완료');</script>";
//		echo "<meta http-equiv='refresh' content='0; url=./event_detail.php?no=$no'/>";
//			
//		} else {
		
		
		$sql= "update nature SET atitle='$title', acont='$content', adate='now()' where ano='$no'";
		$result = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		echo "<script>alert('수정완료');</script>";
		echo "<meta http-equiv='refresh' content='0; url=./nature_detail.php?no=$no'/>";
//	}
}
	else { echo "<script>alert('비밀번호를 확인해주세요'); history.go(-1); </script>"; } ?>
	
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
						<li><a href="#">자연</a></li>
						<li><a href="#">액티비티</a></li>
						<li><a href="#">먹을거리</a></li>
						<li><a href="#">숙박</a></li>
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
							<div class="tc">
								<a href="#ctr1" title="첫번째배너이미지"></a>
								<h3>문수산</h3>
								<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시 울주군 청량면, 삼동면, 범서읍</h4>
								<span class="con_txt">울주군 청량면과 삼동면, 범서읍에 걸쳐 있는 문수산은 청량하고 신라때 문수보살이 산세가 청량하고 아름다워 여기에 와서 살았다는데서 처음에는 청량산으로 불렀다.이 산에는 전통사찰인 문수사가 있다. 신라 제27대 선덕여왕 15년(646)에 자장율사가 세웠다고 한다. 문수산이나 문수사는 불가의 문수보살의 이름을 딴 것이다. </span>
							</div>
						</li>
						<li><img src="./images/kt6.jpg" alt="영축산 이미지" />
							<div class="tc">
								<a href="#ctr2" title="두번째배너이미지"></a>
								<h3>영축산(취서산)</h3>
								<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시 울주군 울주군 삼남면, 상북면/경남 양산시 하북면, 원동면</h4>
								<span class="con_txt">영축산은 울주군 삼남면, 상북면, 양산시 하북면과 원동면 경계에 위치하고 있다. 병풍처럼 둘러싸인 기암괴석과 노송, 영축산 정상에서 신불산 정상까지 이어지는 억새능선이 장관을 이루고 있다.  영축산은 불교의 발상국인 인도의 영취산에서 연유된 것으로 추측되며 이 산의 모습이 독수리 머리를 닮았다 하여 붙은 이름이다. 언양이나 신불산 쪽에서 거대한 바위봉을 바라보면 마치 큰 독수리가 동해로 날기 위해 머리를 조아리고 날개를 펴는 모습을 하고 있다. 영축산 아래에는 우리나라 삼보사찰 중의 하나인 통도사가 있어 대웅전과 금강계단, 사리탑, 국장생석표, 대광명전, 구룡신지, 일주문, 사천왕상 등의 유명한 역사유물을 간직하고 있다. 능선에 오르면 60여 만 평의 억새평원을 볼 수 있는데 이 억새평원을 가로지르는 긴 돌담이 단조성(丹鳥城)이다. 현재 이 돌담은 서북쪽으로는 많이 허물어졌으나 동남쪽으로는 옛 모습을 보존하고 있다.암행어사 박문수가 영남을 시찰하는 도중 이 산성에 올라 "산성의 험준함이 한명의 장부가 만 명의 적을 당해낼 수 있는 곳"이라고 말해 이곳이 천연의 요새임을 알려주고 있다. 하지만 임진왜란 당시 의병이 흘린 피가 얼마나 많았던지 피로 못을 이루었다는 이야기가 전해오고 있다. 지금도 이 지역 마을사람들은 백발등으로 쳐들어온 왜병을 원망하며 "원수로다 원수로다, 백발등이 원수로다"라는 노래를 부른다.</span>
							</div>
						</li>
						<li><img src="./images/kt7.jpg" alt="대운산 이미지" />
							<div class="tc">
								<a href="#ctr3" title="세번째배너이미지"></a>
								<h3>대운산</h3>
								<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시 울주군 온양읍 / 경남 양산시 웅상읍</h4>
								<span class="con_txt">울주군 온양읍 운화리와 양산시 웅상읍 명곡리에 걸쳐 있는 산으로 낙동정맥의 최고봉이며 원효대사의 마지막 수도지로 알려져 있다. 경치가 빼어난 산은 아니지만 능선의 적당한 기복과 오르내림이 있어 산행하는 재미가 있다. 또한, 대운산 능선에서 정상까지 3Km가 넘는 등산로 양쪽에는 진달래와 억새가 군락을 이루고 있어 때를 맞춰 오른다면 꽃속에 파묻혀 길을 걷는 즐거움을 맛볼 수 있다. 이 산의 초명은 동국여지승람이나 오래된 읍지에 불광산으로 되어 있었으나 언제인가부터 대운산으로 불리워지고 있다.</span>
							</div>
						</li>
						<li><img src="./images/kt8.jpg" alt="천황산이미지" />
							<div class="tc">
								<a href="#ctr4" title="네번째배너이미지"></a>
								<h3>천황산</h3>
								<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시 울주군 상북면 / 경남 밀양시 산내면, 단장면</h4>
								<span class="con_txt">천황산은 울주군 상북면과 밀양시 단장면, 산내면 경계에 있는 산이다. 영남알프스의 중앙에 위치하여 산 정상에 서면 영남알프스의 거대한 산줄기와 사자평 억새밭이 한눈에 들어온다. 산세가 아름다워 한반도의 영산, 또는 삼남의 금강으로 불린다.천황산 주봉은 사자봉이다. 정상 서쪽 바위 부분이 사자머리처럼 생겼다하여 붙여진 이름으로, 사자봉 아래 사자평에는 사자암이란 절이 있었다고 한다. 사자평은 신라 화랑들과 사명대사가 이끈 승병들이 훈련하던 곳으로 우리 민족의 씩씩한 기상이 넘치던 곳이다.해발 700~800m 고도에 펼쳐진 고산평원은 습기를 많이 머금은 지형적 요인과 오랜 벌목, 화전, 방목 등 인위적 요인이 겹쳐 국내 어디서도 보기 힘든 독특한 경관을 보여준다.북쪽 산비탈에 있는 밀양 얼음골은 여름날 피서객들이 즐겨 찾으며, 3월에 얼음이 얼기 시작하여 삼복더위를 지나 처서가 되면 바위틈새의 냉기가 점차 줄어드는 신비한 곳이다. </span>
							</div>
						</li>
					</ul>
					<div class="control">
						<ul>
							<li>
								<a href="#" id="ctr4" title="첫번째 배너이미지와 내용 보기"></a>
							</li>
							<li>
								<a href="#" id="ctr1" title="두번째 배너이미지와 내용 보기">2</a>
							</li>
							<li>
								<a href="#" id="ctr2" title="세번째 배너이미지와 내용 보기">3</a>
							</li>
							<li>
								<a href="#" id="ctr3" title="네번째 배너이미지와 내용 보기">4</a>
							</li>
						</ul>
						<span class="playing">
							<a href="#" title="banner1"><img src="./images/pause.png" alt="배너슬라이드 정지 버튼" /></a>
						</span>
					</div>
				</div>
			</div>
		</div>
				<div class="container">
					<table class="list">
						<colgroup>
							<col width="30%" />
							<col width="*" />
						</colgroup>
						<thead>
							<th colspan="2">상세페이지</th>
						</thead>
						<tbody>
							<tr>
								<th scope="row">제목</th>
								<td>
									<?=$row['ftitle']?>
								</td>
							</tr>
							<tr>
								<th scope="row">내용</th>
								<td>
									<?=$row['fcont']?>
								</td>
							</tr>
							<tr>
								<th scope="row">조회수</th>
								<td>
									<?=$row['fview']?>
								</td>
								<?php
						$sql = "UPDATE food
								SET fview = fview+1
								WHERE fno='$detail'";
						$result = mysqli_query($con, $sql) or die (mysqli_error($con));
									
						mysqli_close($con);
					?>
							</tr>
						</tbody>

					</table>
					<ul class="boardsub">
						<li><a href="./food_stay.php">[목록보기]</a></li>
						<?php
					if ( $_SESSION['userid'] == "admin" ){ ?>
							<li><a href="./food_editform.php?no=<?=$detail?>">[수정하기]</a></li>
							<li><a href="./food_deleteform.php?no=<?=$detail?>">[삭제하기]</a></li>
					<?php } else if ( empty($_SESSION['userid']) ){?>
							
							<?php } ?>
					</ul>
				</div>
				</div>
				

<?php
include_once "./footer.php"; 
?>
