<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("보도자료 | 한국관광공사"); ?>

<?php

	$sql = "select * from community";
	$result = mysqli_query( $con, $sql ) or die (mysqli_error($con));

	$rowCnt = mysqli_affected_rows( $con );
//	echo "$rowCnt";*/
	$cnt = 0;


	$data = mysqli_query($con, "SELECT cno FROM community ORDER BY cno DESC");
	$num = mysqli_num_rows($data);
	//echo "$num"; //13

	$page = ($_GET['page'])?$_GET['page']:1;

	$list = 10;

	$block = 3;

	$pageNum = ceil($num/$list); // 총 페이지
	$blockNum = ceil($pageNum/$block); // 총 블록
	$nowBlock = ceil($page/$block); //

//1페이지가 가지고 있는 row 개수
	


	$s_page = ($nowBlock * $block) - 2;  // 3n-2 
	if ($s_page <= 1) {
		$s_page = 1;
	}
	$e_page = $nowBlock*$block; // 한 블록의 마지막페이징
	if ($pageNum <= $e_page) { // 한 블록의 마지막페이지보다 총 페이지 개수가 작을 때
		$e_page = $pageNum;
	}

	$s_point = ($page-1) * $list;

/*$reverOrder = "select * from community order by cno desc LIMIT $_point,$list";
$result2 = mysqli_query( $con, $reverOrder ) or die (mysqli_error($con));*/

$result2 = mysqli_query( $con, "SELECT * FROM community ORDER BY cno DESC LIMIT $s_point, $list");

?>

	<div class="subMain" id="main">
		<div class="contName cn1">
			<div class="container">
				<h2>Communication</h2>
			</div>
		</div>
		<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
		<div class="container">
			<div class="contBody">
				<div class="sub">
					<h3><span>정부 3.0</span>보도자료</h3>
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
					<h3>보도자료</h3>
					<ol>
						<li>홈</li>
						<li>한국관광공사</li>
						<li>보도자료</li>
					</ol>

					<h4>한국관광공사의 최신 보도자료를 제공해드립니다.
						<span>한국관광공사 보도자료저작물은 "공공누리"의 공공저작물 자유이용허락 표시제도에 따라
누구나 이용할 수 있습니다.</span><span class="nuri"><img src="./images/opentype01.gif" alt="공공누리 심볼"></span></h4>

					<form action="#" method="post" id="commu_form">
						<fieldset>
							<legend>보도자료테이블</legend>
							<p>

								<input type="button" value="검색" id="search_go">
								<input type="search" name="search" id="search" placeholder="검색어를 입력해보세요" title="검색어입력">
								<script>
									$(function() {
										$("#search_go").click(function() {



											$.ajax({
												url: "./inc/board_search.php",
												type: "get",
												data: {
													"now_search": $("#search").val()
												},
												dataType: "text",
												success: function(searchData) {
													$(".community .list tbody").html(searchData);
												},
												error: function() {
													alert("error: 관리자에게문의");
												}
											});



										});
									});
								</script>
							</p>
						</fieldset>
					</form>
					<div class="community table">
						<table class="list">
							<caption>지난 이벤트 리스트</caption>
							<colgroup>
								<col width="15%">
								<col width="*">
								<col width="25%">
								<col width="15%">
							</colgroup>
							<thead>
								<tr>
									<th scope="col" abbr="번호">No</th>
									<th scope="col" abbr="제목">제목</th>
									<th scope="col" abbr="등록일" class="bgn">등록일</th>
									<th scope="col" abbr="조회수" class="bgn">조회수</th>
								</tr>
							</thead>
							<tbody>
								<!--//또는 while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC); ) 이거 자체가 true임. true or null // 데이터 없으면 null을 던져줘서 알아서 나옴.-->
								<?php
							for ( $var = 0;  $var < $list ; $var++ )
							{	$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
							?>
									<tr>

										<?php
							 				/*$rowCnt-$var*/
							 				$num = mysqli_num_rows($result2); // 그페이지에서 목록 갯수를 뽑아준닷!
											if($num != $list) {
												$num = $list;
												
												$buyNum = $rowCnt-($num*($page-1));
												$Num = $buyNum - $var;
												
												if($Num <= 0 ){ 
													
												} else {?>

											<td>
												<?=$Num?>
											</td>

											<?php	 } 
											} else { ?>


												<td>
													<?=$rowCnt-$var?>
												</td>

												<?php } ?>

												<td>
													<a href="./community_detail.php?no=<?=$row['cno']?>">
														<?=$row['ctitle']?>
													</a>
												</td>
												<td>
													<?=$row['cdate']?>
												</td>

												<td>
													<?=$row['cview']?>
												</td>
									</tr>
									<?php } ?>
							</tbody>
						</table>

						<div class="pageNav">
							<a class="pr" href="<?=$PHP_SELF?>?page=<?=$s_page-1?>">이전</a>
							<?php
								for ($p=$s_page; $p<=$e_page; $p++) { ?>

								<a href="<?=$PHP_SELP?>?page=<?=$p?>">
									<?=$p?>
								</a>

							<?php } ?>
							<a class="ne" href="<?=$PHP_SELF?>?page=<?=$e_page+1?>">다음</a>
						</div>

					</div>
				</div>

			</div>

		</div>
	</div>

	<?php include_once "./footer.php"; ?>