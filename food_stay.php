<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("맛집/숙박 | 한국관광공사"); ?>
<?php

	$all = "select * from food";
	$result = mysqli_query($con, $all) or die (mysqli_error($con));
	
	$cnt = 0;

	$reverOrder = "select * from food order by fno desc";

	$result = mysqli_query($con, $reverOrder) or die (mysqli_error($con));
	$reverOrder_food="select * from food order by fno desc";
	
$rowCnt = mysqli_affected_rows($con);  // 6
	//echo "<script>alert($rowCnt);</script>";


$reverOrder_stay = "select * from stay order by sno desc";
	$result1 = mysqli_query($con, $reverOrder_stay) or die (mysqli_error($con));
	
$rowCnt2 = mysqli_affected_rows($con); //1
	//echo "<script>alert($rowCnt2);</script>";


	
//food
	

	$page = ($_GET['page'])?$_GET['page']:1;

	$list = 5;

	$block = 3;

	$pageNum = ceil($rowCnt/$list); // 총 페이지
	$pageNum2 = ceil($rowCnt2/$list);

	$blockNum = ceil($pageNum/$block); // 총 블록
	$blockNum2 = ceil($pageNum2/$block);

	$nowBlock = ceil($page/$block); // 1

	//echo "$pageNum" . "/" . "$blockNum" ."/". "$nowBlock";

	$s_page = ($nowBlock * $block) - 2; 
	if ($s_page <= 1) {
		$s_page = 1;
	}
	$e_page = $nowBlock*$block;
	if ($pageNum <= $e_page) {
		$e_page = $pageNum;
	}

	$e_page2 = $nowBlock*$block;
	if($pageNum2 <= $e_page2 ){
		$e_page2 = $pageNum2;
	}

	$s_point = ($page-1) * $list;


$result2 = mysqli_query( $con, "SELECT * FROM food ORDER BY fno DESC LIMIT $s_point, $list");



//stay


$result3 = mysqli_query( $con, "SELECT * FROM stay ORDER BY sno DESC LIMIT $s_point, $list");




?>
	<div class="subMain" id="main">
		<div class="contName cn6">
			<div class="container">
				<h2>Food Travel</h2>
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
					<h3>먹을거리</h3>
					<ol>
						<li>홈</li>
						<li>대한민국 파헤치기</li>
						<li>먹을거리</li>
						<li>숙박</li>
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
						<li><img src="./images/kt1.jpg" alt="봉계 한우불고기 특구 이미지" />
							<div class="ktc">
								<a href="#ctr1" title="첫번째배너이미지"></a>
								<h3>봉계 한우불고기특구</h3>
								<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시 울주군 두동면 계명로 120일원(봉계)</h4>
								<span class="con_txt">울주군 언양, 봉계는 인근 영남알프스의 1천미터 이상 고봉들과 기름진 평야의 지리적 특성으로 인해 예로부터 축산업이 발달한 곳으로서, 졸깃하면서 육질이 부드러운 순수 한우암소 고기의 전통적인 맛을 보존하고 있는 곳이다.'한국 유일의 한우불고기특구'는 영양축적 상태가 가장 좋고 부드러운 육질을 유지하는 3~4년생 순수한우암소, 1등급이상 고급부위만을 제공하고 있다.</span>
							</div>
						</li>
						<li><img src="./images/kt2.jpg" alt="언양 한우 불고기 특구 이미지" />
							<div class="ktc">
								<a href="#ctr2" title="두번째배너이미지"></a>
								<h3>언양 한우 불고기 특구</h3>
								<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시 울주군 울주군 언양읍 방천6길 22 일원(언양)</h4>
								<span class="con_txt">울주군 언양, 봉계는 인근 영남알프스의 1천미터 이상 고봉들과 기름진 평야의 지리적 특성으로 인해 예로부터 축산업이 발달한 곳으로서, 졸깃하면서 육질이 부드러운 순수 한우암소 고기의 전통적인 맛을 보존하고 있는 곳이다.'한국 유일의 한우불고기특구'는 영양축적 상태가 가장 좋고 부드러운 육질을 유지하는 3~4년생 순수한우암소, 1등급이상 고급부위만을 제공하고 있다.</span>
							</div>
						</li>
						<li><img src="./images/kt3.jpg" alt="장생포고래마을 음식특화거리 이미지" />
							<div class="ktc">
								<a href="#ctr3" title="세번째배너이미지"></a>
								<h3>장생포고래마을 음식특화거리</h3>
								<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시남구 장생포고래로 244 일원</h4>
								<span class="con_txt">제사상에도 오른다는 고래? 얼마나 알고 계신가요?영양학적으로도 훌륭한 고래고기는 경상도 지역에서는 예로부터 아주 유명한 별미 중의 하나 입니다. 고래고기는 대부분은 살이 빨갛고 다소 특이한 냄새가 있습니다. 이 냄새는 혈액으로부터 유래하며 신선도가 떨어짐에 따라서 강해지며, 꼬리살은 지방이 많아, 고래고기 중에서 가장 맛이 있다고 합니다. 꼬리날개는 꼬리살의 한 부분으로 자색이고 지방이 많은 것이 특징입니다.고래 고기는 식용 또는 기름을 채취할 목적으로 이용되고 있습니다. 식용이 되는 것은 수염고래와 이빨고래가 있는데 이빨 고래는 빛깔이 나쁘고 왁스 질 때문에 식감이 떨어집니다. 수염고래는 표피 하부의 지방 육과 다시 그 하부의 적색 육으로 되어있으며 이들의 일부가 식용이 됩니다. 또한 흉부로부터 복부에 걸친 부분에서 빛깔이 엷은 표피에 덮여진 지방 육의 주름이 있습니다. 고래의 조직과 육상포유류를 비교하면 고래의 경우 지방 육을 구성하는 진피 층과 피하 지방층 사이에 명백한 구별이 없고. 요컨대 진피 층에도 지방이 많이 함유되고 있습니다. 또한 고기 중의 혈색소의 함량이 많기 때문에 축육보다 한층 선홍색을 띄우고 있습니다. 쇠고기에 비하여 지방이 적고 비타민류가 많으며 지방산조성도 고도불포화지방산의 비율이 높다고 합니다.</span>
							</div>
						</li>
						<li><img src="./images/kt4.jpg" alt="병영막창골목이미지" />
							<div class="ktc">
								<a href="#ctr4" title="네번째배너이미지"></a>
								<h3>병영막창골목</h3>
								<h4><img src="./images/ktloc.png" alt="위치이미지" />울산광역시 중구 곽남1길 30 일원</h4>
								<span class="con_txt">제사상에도 오른다는 고래? 얼마나 알고 계신가요?영양학적으로도 훌륭한 고래고기는 경상도 지역에서는 예로부터 아주 유명한 별미 중의 하나 입니다. 고래고기는 대부분은 살이 빨갛고 다소 특이한 냄새가 있습니다. 이 냄새는 혈액으로부터 유래하며 신선도가 떨어짐에 따라서 강해지며, 꼬리살은 지방이 많아, 고래고기 중에서 가장 맛이 있다고 합니다. 꼬리날개는 꼬리살의 한 부분으로 자색이고 지방이 많은 것이 특징입니다.고래 고기는 식용 또는 기름을 채취할 목적으로 이용되고 있습니다. 식용이 되는 것은 수염고래와 이빨고래가 있는데 이빨 고래는 빛깔이 나쁘고 왁스 질 때문에 식감이 떨어집니다. 수염고래는 표피 하부의 지방 육과 다시 그 하부의 적색 육으로 되어있으며 이들의 일부가 식용이 됩니다. 또한 흉부로부터 복부에 걸친 부분에서 빛깔이 엷은 표피에 덮여진 지방 육의 주름이 있습니다. 고래의 조직과 육상포유류를 비교하면 고래의 경우 지방 육을 구성하는 진피 층과 피하 지방층 사이에 명백한 구별이 없고. 요컨대 진피 층에도 지방이 많이 함유되고 있습니다. 또한 고기 중의 혈색소의 함량이 많기 때문에 축육보다 한층 선홍색을 띄우고 있습니다. 쇠고기에 비하여 지방이 적고 비타민류가 많으며 지방산조성도 고도불포화지방산의 비율이 높다고 합니다.</span>
							</div>
						</li>
					</ul>
					<div class="control">
						<ul>
							<li><a href="#" id="ctr4" title="첫번째 배너이미지와 내용 보기"><img src="./images/slide_btn_off.png" alt="첫번째 내용 연결 인덱스"></a></li>
						<li><a href="#" id="ctr1" title="두번째 배너이미지와 내용 보기"><img src="./images/slide_btn_off.png" alt="두번째 내용 연결 인덱스"</a></li>
						<li><a href="#" id="ctr2" title="세번째 배너이미지와 내용 보기"><img src="./images/slide_btn_off.png" alt="세번째 내용 연결 인덱스"></a></li>
						<li><a href="#" id="ctr3" title="네번째 배너이미지와 내용 보기"><img src="./images/slide_btn_off.png" alt="네번째 내용 연결 인덱스"></a>
						</ul>
						<span class="playing">
							<a href="#" title="banner1"><img src="./images/pause.png" alt="배너슬라이드 정지 버튼" /></a>
						</span>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="kt_category">
					<dl class="kc1">
						<dt><a href="#" title="맛집으로 찾기">맛집</a></dt>
						<dd class="food">
							<form action="#" method="post">
								<fieldset>
									<legend>맛집 항목</legend>
									<p class="kt_m0">
										<span><img src="./images/indication.png" alt="위치이미지">지역</span>
										<input type="radio" id="all" name="all" checked="checked" />
										<label for="all">전체</label>
										<input type="radio" id="su" name="su" />
										<label for="su">서울</label>
										<input type="radio" id="bs" name="bs" />
										<label for="bs">부산</label>
										<input type="radio" id="dg" name="dg" />
										<label for="dg">대구</label>
										<input type="radio" id="ic" name="ic" />
										<label for="ic">인천</label>
										<input type="radio" id="kj" name="kj" />
										<label for="kj">광주</label>
										<input type="radio" id="dj" name="dj" />
										<label for="dj">대전</label>
										<input type="radio" id="us" name="us" />
										<label for="us">울산</label>
										<input type="radio" id="sj" name="sj" />
										<label for="sj">세종</label>
										<input type="radio" id="kg" name="kg" />
										<label for="kg">경기</label>
										<input type="radio" id="kw" name="kw" />
										<label for="kw">강원</label>
										<input type="radio" id="cc" name="cc" />
										<label for="cc">충청도</label>
										<input type="radio" id="jr" name="jr" />
										<label for="jr">전라도</label>
										<input type="radio" id="ks" name="ks" />
										<label for="ks">경상도</label>
										<input type="radio" id="jj" name="jj" />
										<label for="jj">제주도</label>
									</p>
									<p class="kt_m">
										<span><img src="./images/meat.png" alt="구분이미지">구분</span>
										<input type="radio" id="all2" checked="checked">
										<label for="all2">전체</label>
										<input type="radio" id="transition">
										<label for="transition">전통음식</label>
										<input type="radio" id="homefood">
										<label for="homefood">향토음식</label>
										<input type="radio" id="korea">
										<label for="korea">한식</label>
										<input type="radio" id="japan">
										<label for="japan">일식</label>
										<input type="radio" id="western">
										<label for="western">양식</label>
										<input type="radio" id="foodstreet">
										<label for="foodstreet">음식특화거리</label>

									</p>
									<p>
										<span><img src="./images/search2.png" alt="검색이미지">검색</span>
										<input type="text" name="food_search" id="food_search" />
										<input type="submit" value="검색" />
									</p>
								</fieldset>
							</form>
							<ul class="order">
								<li><a href="#" title="리뷰순으로 정렬해서 보기">리뷰순<img src="./images/down.png" alt="삼각형"></a></li>
								<li><a href="#" title="추천순으로 정렬해서 보기">추천순<img src="./images/down.png" alt="삼각형"></a></li>
								<li><a href="#" title="이름순으로 정렬해서 보기">이름순<img src="./images/down.png" alt="삼각형"></a></li>
							</ul>
							<ul class="view">
								<?php
				 	
				for ( $var = 0;  $var < $rowCnt ; $var++ )
				{	
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
										<p class="img"><a href="food_detail.php?no=<?=$row['fno']?>" title="해당 글 자세히 보기"><img src="./inc/<?=$row['fimage']?>" alt="해당 게시물 이미지"/></a></p>

										<p class="tit">
											<a href="food_detail.php?no=<?=$row['fno']?>" title="해당 글 자세히 보기">
												<?=$row['ftitle']?><span><?=$row['fcity']?></span></a>
										</p>
										<p class="detail">
											<a href="#" title="해당 글 자세히 보기">
												<?=$row['fcont']?>
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
										<p class="img"><a href="food_detail.php?no=<?=$row['fno']?>" title="해당 글 자세히 보기"><img src="./inc/<?=$row['fimage']?>"  alt="해당 게시물 이미지"/></a></p>

										<p class="tit">
											<a href="food_detail.php?no=<?=$row['fno']?>" title="해당 글 자세히 보기">
												<?=$row['ftitle']?><span><?=$row['fcity']?></span></a>
										</p>
										<p class="detail">
											<a href="#" title="해당 글 자세히 보기">
												<?=$row['fcont']?>
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
						</dd>
					</dl>
					<dl class="kc2">
						<dt><a href="#" title="숙박으로 찾기">숙박</a></dt>
						<dd class="stay">
							<form action="#" method="post">
								<fieldset>
									<legend>숙박 항목</legend>
									<p class="kt_m0">
										<span><img src="./images/indication.png" alt="위치이미지">지역</span>
										<input type="radio" id="all3" name="all" checked="checked" />
										<label for="all3">전체</label>
										<input type="radio" id="su2" name="su" />
										<label for="su2">서울</label>
										<input type="radio" id="bs2" name="bs" />
										<label for="bs2">부산</label>
										<input type="radio" id="dg2" name="dg" />
										<label for="dg2">대구</label>
										<input type="radio" id="ic2" name="ic" />
										<label for="ic2">인천</label>
										<input type="radio" id="kj2" name="kj" />
										<label for="kj2">광주</label>
										<input type="radio" id="dj2" name="dj" />
										<label for="dj2">대전</label>
										<input type="radio" id="us2" name="us" />
										<label for="us2">울산</label>
										<input type="radio" id="sj2" name="sj" />
										<label for="sj2">세종</label>
										<input type="radio" id="kg2" name="kg" />
										<label for="kg2">경기</label>
										<input type="radio" id="kw2" name="kw" />
										<label for="kw2">강원</label>
										<input type="radio" id="cc2" name="cc" />
										<label for="cc2">충청도</label>
										<input type="radio" id="jr2" name="jr" />
										<label for="jr2">전라도</label>
										<input type="radio" id="ks2" name="ks" />
										<label for="ks2">경상도</label>
										<input type="radio" id="jj2" name="jj" />
										<label for="jj2">제주도</label>
									</p>
									<p class="kt_m">
										<span><img src="./images/meat.png" alt="구분이미지">구분</span>
										<input type="radio" id="all4" checked="checked">
										<label for="all4">전체</label>
										<input type="radio" id="hotel">
										<label for="hotel">호텔</label>
										<input type="radio" id="kingstay">
										<label for="kingstay">우수숙박업소</label>
										<input type="radio" id="koreahome">
										<label for="koreahome">한옥스테이</label>
										<input type="radio" id="guesthouse">
										<label for="guesthouse">게스트하우스</label>
										<input type="radio" id="nature">
										<label for="nature">휴양림/야영장</label>

									</p>
									<p>
										<span><img src="./images/search2.png" alt="검색이미지">검색</span>
										<input type="text" name="food_search" id="food_search" />
										<input type="submit" value="검색" />
									</p>
								</fieldset>
							</form>
							<ul class="order">
								<li><a href="#" title="리뷰순으로 정렬해서 보기">리뷰순<img src="./images/down.png" alt="삼각형"></a></li>
								<li><a href="#" title="추천순으로 정렬해서 보기">추천순<img src="./images/down.png" alt="삼각형"></a></li>
								<li><a href="#" title="이름순으로 정렬해서 보기">이름순<img src="./images/down.png" alt="삼각형"></a></li>
							</ul>
							<ul class="view">
								<?php
				for ( $var = 0;  $var < $rowCnt2 ; $var++ )
				{	
				 
				 $row = mysqli_fetch_array($result3, MYSQLI_ASSOC);
				?>
								
								<?php
				$num = mysqli_num_rows($result3);
				
				
				if($num != $list) { //리스트개수만큼없을때
					$num = $list;
					
					$buyNum = $rowCnt - ( $num*($page-1)); //현재 그 페이지 리스트 개수 // 3
					$Num = $buyNum - $var;
					
					if($Num <= 0 ){
						
					} else {?>
					<li>
										<p class="img"><a href="stay_detail.php?no=<?=$row['sno']?>" title="해당 글 자세히 보기"><img src="./inc/<?=$row['simage']?>"  alt="해당 게시물 이미지"/></a></p>

										<p class="tit">
											<a href="food_detail.php?no=<?=$row['sno']?>" title="해당 글 자세히 보기">
												<?=$row['stitle']?><span><?=$row['scity']?></span></a>
										</p>
										<p class="detail">
											<a href="#" title="해당 글 자세히 보기">
												<?=$row['scont']?>
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
					

										<p class="img"><a href="stay_detail.php?no=<?=$row['sno']?>" title="해당 글 자세히 보기"><img src="./inc/<?=$row['simage']?>"  alt="해당 게시물 이미지"/></a></p>

										<p class="tit">
											<a href="food_detail.php?no=<?=$row['sno']?>" title="해당 글 자세히 보기">
												<?=$row['stitle']?><span><?=$row['scity']?></span></a>
										</p>
										<p class="detail">
											<a href="#" title="해당 글 자세히 보기">
												<?=$row['scont']?>
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
					for ($p=$s_page; $p<=$e_page2; $p++) {
?>

								<a href="<?=$PHP_SELP?>?page=<?=$p?>">
									<?=$p?>
								</a>

								<?php
}
?>
								<a class="ne" href="<?=$PHP_SELP?>?page=<?=$e_page2+1?>">다음</a>
						</div>
						</dd>
					</dl>
				</div>

			</div>
		</div>

	</div>
	<?php include_once "./footer.php"; ?>
