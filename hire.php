<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("채용안내 | 한국관광공사"); ?>

<?php

	$all = "select * from hire";
	$result = mysqli_query($con, $all) or die (mysqli_error($con));
	$rowCnt = mysqli_affected_rows($con);
	$cnt = 0;

	$reverOrder = "select * from hire order by hno desc";

	$result2 = mysqli_query($con, $reverOrder) or die (mysqli_error($con));
$page = ($_GET['page'])?$_GET['page']:1;

	$list = 10;

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


$result = mysqli_query( $con, "SELECT * FROM hire ORDER BY hno DESC LIMIT $s_point, $list");
	

?>

<div class="subMain" id="main">
	<div class="contName cn1">
		<div class="container">
			<h2>Hiring</h2>
		</div>
	</div>
	<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
	<div class="container">
		<div class="contBody">
			<div class="sub">
				<h3>커뮤니티</h3>
				<ul>
					<li><a href="./event.php" title="행사안내 메뉴 바로가기">행사안내</a></li>
               			<li><a href="./notice.php" title="공지사항 메뉴 바로가기">공지사항</a></li>
               			<li><a href="./hire.php" title="채용안내 메뉴 바로가기">채용안내</a></li>
				</ul>
			</div>
			<div class="contArea">
				<h3>채용안내</h3>
				<ol>
					<li>홈</li>
					<li>한국관광공사</li>
					<li>채용안내</li>
				</ol>

				<h4>한국관광공사 공채 채용 안내</h4>
				<p>한국관광공사는 다양한 인재와 기술을 바탕으로 세계인이 사랑하는 대한민국을 위해 노력합니다.
					<span>인재를 중시하고 키우는 기업문화, '기업이 곧 사람'이라는 신념을 바탕으로 모든 사람이 각자 고유한 역량과 잠재력을 가진 우수한 인재이며, 세상을 움직이는 원동력이라고 믿습니다.</span></p>
			</div>
		</div>
	</div>
	<div class="hire">
		<div class="container">
			<p>집중적으로 자신에게 동기를 부여하는 사람, 열정을 가진 사람을 채용하라.<span>
Do hire people who are enthusiastic, self-motivated, and passionate.</span> 단순히 일자리를 원하는 사람은 채용하지 마라.<span>
Don’t hire people who just want a job.</span></p>
			<ul>
				<li>
					<a href="#" title="지원/결과"><img src="./images/file1.png" alt="지원 아이콘"><b>지원하기/결과조회</b><span>새로운 지원서를 작성하거나 결과를 확인합니다</span></a>
				</li>
				<li class="mid">
					<a href="#" title="FAQ"><img src="./images/file3.png" alt="질문 아이콘"><b>FQA</b><span>자주 묻는 질문 및 궁금한 내용을 찾아보세요</span></a>
				</li>
				<li>
					<a href="#" title="Q&A"><img src="./images/file5.png" alt="질문 아이콘"><b>Q&A</b><span>채용과 관련된 문의사항을 질문하고 답변을 받아보세요</span></a>
				</li>
			</ul>
			<p class="cp2"></p>
		</div>
		
	</div>
	<div class="hr">
	<div class="container">
		<h4>채용공고</h4>
		<p>채용공고 및 안내를 확인해 보시기 바랍니다.</p>
		<table class="list">
			<caption>지난 이벤트 리스트</caption>
			<colgroup>
				<col width="5%">
				<col width="*">
				<col width="25%">
				<col width="10%">
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
			<?php
for ( $var = 0;  $var < $list ; $var++ )
				{	
	$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
?>
				
				
				<?php
				$num = mysqli_num_rows($result);
				//echo "$num";
				
				if($num != $list) { //리스트개수만큼없을때
					$num = $list;
					
					$buyNum = $rowCnt - ( $num*($page-1)); //현재 그 페이지 리스트 개수 // 3
					$Num = $buyNum - $var;
					
					if($Num <= 0 ){
						
					} else {?>
					<tr>
						<td><?=$rowCnt-$var?></td>
<td><a href="./hire_detail.php?no=<?=$row['hno']?>" title="해당 글 자세히보기">
<?=$row['htitle']?></a></td>
<td><?=$row['hdate']?></td>
<td><?=$row['hview']?></td>
					</tr>
					
				<?php
					}
						
				
				} else {  //리스트개수만큼 있을때
					?> 
			<li>
			<tr>
						<td><?=$rowCnt-$var?></td>
<td><a href="./hire_detail.php?no=<?=$row['hno']?>" title="해당 글 자세히보기">
<?=$row['htitle']?></a></td>
<td><?=$row['hdate']?></td>
<td><?=$row['hview']?></td>
					</tr>
			
			<?php
				}
			}
			?>
				
			</tbody>
		</table>
		
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
