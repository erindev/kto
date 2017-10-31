<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("이벤트 | 한국관광공사"); ?>
<?php

	$all = "select * from event";
	$result = mysqli_query($con, $all) or die (mysqli_error($con));
	$rowCnt = mysqli_affected_rows($con);
	$cnt = 0;

	$reverOrder = "select * from event order by eno desc";

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


$result = mysqli_query( $con, "SELECT * FROM event ORDER BY eno DESC LIMIT $s_point, $list");


?>
    <div class="subMain" id="main">
        <div class="contName cn2">
            <div class="container">
				<h2>Event</h2>
            </div>
        </div> <!--배경깔고 h3 오른쪽으로 글씨체 변경-->
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
					<h3>이벤트</h3>
					<ol>
						<li>홈</li>
						<li>고객참여</li>
						<li>이벤트</li>
					</ol>
               		<h4>진행중인 이벤트</h4>    
               		           		
               		<ul>
               		
               		<?php
				for ( $var = 0;  $var < 3 ; $var++ )
				{	$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
				 
		
				$num = mysqli_num_rows($result2);
				if($num != 3) { //리스트개수만큼없을때
					$num = 3;
					
					$buyNum = $rowCnt - ( $num*($page-1)); 
					$Num = $buyNum - $var;
					
					if($Num <= 0 ){
						
					} else {
						?>
					<li><a href="./event_detail.php?no=<?=$row['eno']?>">
               				<img src="./inc/<?=$row['eimage']?>" alt="이벤트 포스터 이미지"/>
               				<strong><?=$row['etitle']?></strong>
               				<span class="subTitle"><?=$row['esubcont']?></span>
               				<span class="txt"><?=$row['econt']?></span>
               				<span class="date">이벤트 기간 : <?=$row['edate']?></span>
						<span class="detail">자세히보기</span>
               			</a></li>
					
				<?php
					}
						
				
				} else {  //리스트개수만큼 있을때
					?> 
			<li><a href="./event_detail.php?no=<?=$row['eno']?>">
               				<img src="./inc/<?=$row['eimage']?>"/>
               				<strong><?=$row['etitle']?></strong>
               				<span class="subTitle"><?=$row['esubcont']?></span>
               				<span class="txt"><?=$row['econt']?></span>
               				<span class="date">이벤트 기간 : <?=$row['edate']?></span>
						<span class="detail">자세히보기</span>
               			</a></li>
			
			<?php
				}
			}
			?>
					</ul>
              			
					<h4>지난 이벤트</h4>
					<table class="list">
				<caption>지난 이벤트 리스트</caption>
				<colgroup>
					<col width="5%">
					<col width="*">
					<col width="20%">
				</colgroup>
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">제목</th>
						<th scope="col" class="bgn">이벤트 기간</th>
					</tr>
				</thead>
				<tbody>
					
					
					<?php
			for ( $var = 0; $var < $list ; $var++ ) {
			$row = mysqli_fetch_array($result3, MYSQLI_ASSOC);
			?>
			
				<?php
				$num = mysqli_num_rows($result3);
				//echo "$num";
				
				if($num != $list) { //리스트개수만큼없을때
					$num = $list;
					
					$buyNum = $rowCnt - ( $num*($page-1)); //현재 그 페이지 리스트 개수 // 3
					$Num = $buyNum - $var;
					
					if($Num <= 0 ){
						
					} else {?>
					<tr>
						<td><?=$rowCnt-$var?></td>
						
						<td><a href="./event_detail.php?no=<?=$row['eno']?>">
							<?=$row['etitle']?></a>
						</td>
						<td>
							<?=$row['edate']?>
						</td>
					</tr>
					
				<?php
					}
						
				
				} else {  //리스트개수만큼 있을때
					?> 
			<tr>
						<td><?=$rowCnt-$var?></td>
						
						<td><a href="./event_detail.php?no=<?=$row['eno']?>">
							<?=$row['etitle']?></a>
						</td>
						<td>
							<?=$row['edate']?>
						</td>
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
    </div>
<?php include_once "./footer.php"; ?>