<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("어드벤처 | 한국관광공사"); ?>

<?php

	$all = "select * from adventure";
	$result = mysqli_query($con, $all) or die (mysqli_error($con));
	$rowCnt = mysqli_affected_rows($con);
	$cnt = 0;

	$reverOrder = "select * from adventure order by vno desc";

	$result = mysqli_query($con, $reverOrder) or die (mysqli_error($con));


$rowCnt = mysqli_affected_rows($con); // 게시물 전체 갯수


	

	$page = ($_GET['page'])?$_GET['page']:1;

	$list = 5;

	$block = 3;

	$pageNum = ceil($rowCnt/$list); // 총 페이지
	$blockNum = ceil($pageNum/$block); // 총 블록
	$nowBlock = ceil($page/$block); // 1


	$s_page = ($nowBlock * $block) - 2; 
	if ($s_page <= 1) {
		$s_page = 1;
	}
	$e_page = $nowBlock*$block;
	if ($pageNum <= $e_page) {
		$e_page = $pageNum;
	}

	$s_point = ($page-1) * $list;


$result2 = mysqli_query( $con, "SELECT * FROM adventure ORDER BY vno DESC LIMIT $s_point, $list");


?>

	<div class="subMain" id="main">
		<div class="contName cn1">
			<div class="container">
				<h2>Advenure Travel</h2>
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
					<h3>어드벤처</h3>
					<ol>
						<li>홈</li>
						<li>대한민국 파헤치기</li>
						<li>어드벤처</li>
					</ol>

					<h4>이달의 추천여행</h4>
					<p>2경중 하나인 강동·주전 몽돌해변은 보석처럼 반짝이는 몽돌과 하얗게 부서지는 파도가 어우러져 절경을 이루고 있다. 바닷가하면 흔히 속초, 강릉, 동해, 삼척을 잇는 강원도 쪽만 연상하지만 울산의 주전에서 감포로 이어지는 동해안도 이에 못지않은 사람들이 찾고 있는 곳이다. 특히 산과 바다를 끼고 이어지는 국도는 드라이브 코스로 으뜸이며 주변에 볼만한 곳들도 많아 겨</p>
				</div>
			</div>
		</div>
		<div class="monthTravel adventure">
			<div class="monthView adventure">
				<div class="container">
					<dl>
						<dt>2017<span>年</span><span class="tit">대한민국의 축제!</span></dt>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=01">1<span>Jan.</span></a></dd>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=02">2<span>Feb.</span></a></dd>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=03">3<span>Mar.</span></a></dd>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=04">4<span>Apr.</span></a></dd>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=05">5<span>May.</span></a></dd>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=06">6<span>Jun.</span></a></dd>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=07">7<span>Jul.</span></a></dd>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=08">8<span>Aug.</span></a></dd>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=09" class="on">9<span>Sep.</span></a></dd>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=10">10<span>Otc.</span></a></dd>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=11">11<span>Nov.</span></a></dd>
						<dd><a href="/index.ulsan?menuCd=DOM_000000101001000000&amp;cate=12">12<span>Dec.</span></a></dd>
					</dl>
				</div>
			</div>
			<div class="container">
				<div class="monthTrain">
					<ul class="monthTrainBody">
						<li>
							<a href="#" title=""></a>
						</li>
						<li>
							<a href="#" title=""></a>
						</li>
						<li>
							<a href="#" title=""></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="rec_goods">
			<div class="container">
				<h4>月의 대한민국, <span>모험</span> 하실 준비되셨나요?</h4>
				<div class="kt_category adventure">
				<dl>
					<dt class="hidden">어드벤처항목</dt>
					<dd class="food">
						<form action="#" method="post">
							<fieldset>
								<legend>모험 항목</legend>
								<p class="city">
									<span><img src="./images/indication.png" alt="위치이미지">지역</span>
									<input type="radio" id="all" name="all" checked="checked"/>
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
								<p>
									<span><img src="./images/search2.png" alt="검색이미지">검색</span>
									<input type="text" name="food_search" id="food_search" />
									<input type="submit" value="검색" />
								</p>
							</fieldset>
						</form>
					</dd>
				</dl>
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
					<p class="img"><a href="adventure_detail.php_detail.php?no=<?=$row['vno']?>" title="해당 글 자세히 보기"><img src="./inc/<?=$row['vimage']?>" alt="어드벤처 게시물"/></a></p>

					<p class="tit">
						<a href="adventure_detail.php?no=<?=$row['vno']?>" title="해당 글 자세히 보기">
							<?=$row['vtitle']?><span><?=$row['vcity']?></span></a>
					</p>
					<p class="detail">
						<a href="#" title="해당 글 자세히 보기">
							<?=$row['vcont']?>
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
					<p class="img"><a href="adventure_detail.php_detail.php?no=<?=$row['vno']?>" title="해당 글 자세히 보기"><img src="./inc/<?=$row['vimage']?>"/></a></p>

					<p class="tit">
						<a href="adventure_detail.php?no=<?=$row['vno']?>" title="해당 글 자세히 보기">
							<?=$row['vtitle']?><span><?=$row['vcity']?></span></a>
					</p>
					<p class="detail">
						<a href="#" title="해당 글 자세히 보기">
							<?=$row['vcont']?>
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
	</div>
<?php include_once "./footer.php"; ?>