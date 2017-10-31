<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("공지사항 | 한국관광공사"); ?>
<?php

	$all = "select * from notice";
	$result = mysqli_query($con, $all) or die (mysqli_error($con));
	$rowCnt = mysqli_affected_rows($con);
	$cnt = 0;

	$reverOrder = "select * from notice order by tno desc";

	$result2 = mysqli_query($con, $reverOrder) or die (mysqli_error($con));
$result3 = mysqli_query($con, $reverOrder) or die (mysqli_error($con));


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


$result = mysqli_query( $con, "SELECT * FROM notice ORDER BY tno DESC LIMIT $s_point, $list");
	

?>
	<div class="subMain" id="main">
		<div class="contName cn1">
			<div class="container">
				<h2>Notice</h2>
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
					<h3>공지사항</h3>
					<ol>
						<li>홈</li>
						<li>커뮤니티</li>
						<li>공지사항</li>
					</ol>

					<h4>한국관광공사 소식</h4>
					<p>2경중 하나인 강동·주전 몽돌해변은 보석처럼 반짝이는 몽돌과 하얗게 부서지는 파도가 어우러져 절경을 이루고 있다. 바닷가하면 흔히 속초, 강릉, 동해, 삼척을 잇는 강원도 쪽만 연상하지만 울산의 주전에서 감포로 이어지는 동해안도 이에 못지않은 사람들이 찾고 있는 곳이다. 특히 산과 바다를 끼고 이어지는 국도는 드라이브 코스로 으뜸이며 주변에 볼만한 곳들도 많아 겨</p>
					<div class="board">
			<dl>
				<dt><a href="#"><img src="./images/tile.png" alt="타일뷰로 게시글 보기"></a></dt>
				<dd class="tile">
					<ol>
					
					<?php
			for ( $var = 0; $var < $list ; $var++ ) {
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				$timage = "./inc/" . $row['timage'];
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
					<li style="background-image:url('<?=$timage?>')">
						<a href="notice_detail.php?no=<?=$row['tno']?>" >
							<span class="count"><?=$rowCnt-$var?></span>
							<b><?=$row['ttitle']?></b>
							<span class="date"><?=$row['tdate']?></span>
						</a>
			</li>
					
				<?php
					}
						
				
				} else {  //리스트개수만큼 있을때
					?> 
			<li style="background-image:url("<?php echo $timage; ?>")">
						<a href="notice_detail.php?no=<?=$row['tno']?>" >
							<span class="count"><?=$rowCnt-$var?></span>
							<b><?=$row['ttitle']?></b>
							<span class="date"><?=$row['tdate']?></span>
						</a></li>
			
			<?php
				}
			}
			?>
			
						
					</ol>
				</dd>
				<dt class="viewleft"><a href="#"><img src="./images/board.png" alt="목록뷰로 게시글 보기"></a></dt>
				<dd>
					<table class="list">
			<caption>공지사항 목록뷰</caption>
			<colgroup>
				<col width="5%">
				<col width="*%">
				<col width="25%">
				<col width="5%">
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
			for ( $var = 0; $var < $list ; $var++ ) {
			$row = mysqli_fetch_array($result3, MYSQLI_ASSOC);
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
					<tr>
					<td><?=$rowCnt-$var?></td>
					<td class="tit">
					
						<a href="notice_detail.php?no=<?=$row['tno'];?>" ><?=$row['ttitle'];?></a></td>
					<td><?=$row['tdate'];?></td>
					<td><?=$row['tview'];?></td>
				</tr>
					
				<?php
					}
						
				
				} else {  //리스트개수만큼 있을때
					?> 
			<tr>
					<td><?=$rowCnt-$var?></td>
					<td class="tit">
					
						<a href="notice_detail.php?no=<?=$row['tno'];?>" ><?=$row['ttitle'];?></a></td>
					<td><?=$row['tdate'];?></td>
					<td><?=$row['tview'];?></td>
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
				</dd>
				
			</dl>
		</div>
				</div>
			</div>
			
		</div>
		
	</div>
		<!--        #main END-->
<?php include_once "./footer.php"; ?>