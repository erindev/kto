<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("홍보물신청 | 한국관광공사"); ?>

<?php

	$all = "select * from request";
	$result = mysqli_query($con, $all) or die (mysqli_error($con));
	$rowCnt = mysqli_affected_rows($con);
	$cnt = 0;

	$reverOrder = "select * from request order by rno desc";

	$result = mysqli_query($con, $reverOrder) or die (mysqli_error($con));


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


$result2 = mysqli_query( $con, "SELECT * FROM request ORDER BY rno DESC LIMIT $s_point, $list");

	

?>

	<div class="subMain" id="main">
		<div class="contName cn4">
			<div class="container">
				<h2>
Application for promotional materials</h2>
			</div>
		</div>
		<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
		<div class="container">
			<div class="contBody">
				<div class="sub">
					<h3>고객참여</h3>
					<ul>
						<li><a href="./customerSound.php" title="고각소리함 메뉴 바로가기">고객소리함</a></li>
					<li><a href="./photo.php" title="관광사진갤러리 메뉴 바로가기">관광사진갤러리</a></li>
					<li><a href="./request.php" title="홍보물신청 메뉴 바로가기">홍보물신청</a></li>
					<li><a href="./guideBook.php" title="e-Book 메뉴 바로가기">e-Book</a></li>
					</ul>
				</div>
				<div class="contArea">
					<h3>홍보물 신청</h3>
					<ol>
						<li>홈</li>
						<li>고객참여</li>
						<li>홍보물 신청</li>
					</ol>
					<h4>대한민국 관광 가이드북(홍보물) 신청하기</h4>

					<div class="require">
						<span class="star">'<strong class="must">*</strong>' 표시항목은 필수입력 사항입니다.</span>
						<form action="./inc/request_process.php" method="post">
						<table class="form guide" >

							<caption>대한민국 관광 가이드북 신청</caption>
							<colgroup>
								<col width="25%">
								<col width="*">
							</colgroup>
							<tr>
								<th scope="row"><strong class="must">*</strong> <label for="userid">아이디</label></th>
								<td>
									<p class="ip"><input type="text" name="userid" id="userid" maxlength="10" class="txt" value="<?=$_SESSION['userid']?>"></p>
								</td>
							</tr>
							<tr>
								<th scope="row"><strong class="must">*</strong> <label for="rname">성명</label></th>
								<td>
									<p class="ip"><input type="text" name="rname" id="rname" maxlength="10" title="성명 입력" class="txt"></p>
								</td>
							</tr>
							<tr>
								<th scope="row"><strong class="must">*</strong> <label for="remail">이메일</label></th>
								<td>
									<p class="ip"><input type="email" name="remail" id="remail" maxlength="30" title="이메일 입력" placeholder="ex) kto@kto.co.kr" class="txt"></p>
									<p style="margin:6px 0 0;font-size:11px;color:#a60000;">* 문의하신 답변내용은 입력하신 고객님의 메일로 통보되오니 메일주소를 바르게 입력하여 주시기 바랍니다</p>
								</td>
							</tr>
							<!-- // -->
							<tr>
								<th scope="row"><strong class="must">*</strong><label for="rphone"> 연락처</label></th>
								<td>
									<p class="ip"><input type="text" name="rphone" id="rphone" maxlength="11" title="연락처 입력" placeholder="ex)0101231234 (숫자만 입력가능)" class="txt"></p>
								</td>
							</tr>
							<tr>
								<th scope="row"><strong class="must">*</strong><label> 주소</label></th>
								<td>
									<p>
										<label for="post1">우편번호</label>
										<input type="text" id="post1" name="post1" /> - <input type="text" id="post2" name="post2" />
										<input type="button" id="postcode" value="우편번호검색" />
									</p>
									<p>
										<label for="raddress">상세주소</label>
										<input type="text" id="raddress" name="raddress" />
									</p>
								</td>
							</tr>
							<tr>
								<th scope="row"><strong class="must">*</strong> <label for="rtitle">제목</label></th>
								<td>
									<p class="ip"><input type="text" name="rtitle" id="rtitle" maxlength="50" title="제목 입력" class="txt"></p>
								</td>
							</tr>
							<tr>
								<th scope="row"><strong class="must">*</strong><label for="rcont"> 내용</label></th>
								<td>
									<p class="ip"><textarea id="rcont" name="rcont"></textarea></p>
								</td>
							</tr>
							
								
								
						</table>
						<p class="submitP">
						<input type="submit" value="신청하기"></p>
						</form>
					</div>

					<h4>대한민국 관광 가이드북 신청</h4>
					<table class="list guide">
						<caption>지난 이벤트 리스트</caption>
						<colgroup>
							<col width="15%">
							<col width="*">
							<col width="15%">
							<col width="10%">
							<col width="15%">
						</colgroup>
						<thead>
							<tr>
								<th scope="col" abbr="번호">No</th>
								<th scope="col" abbr="제목">제목</th>
								<th scope="col" abbr="작성자" class="write">작성자</th>
								<th scope="col" abbr="작성일" class="writeDate">작성일</th>
								<th scope="col" abbr="진행상태" class="status">상 태</th>

							</tr>
						</thead>
						<tbody>
			<?php
			for ( $var = 0; $var < $list ; $var++ ) {
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
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
						<th scope="row"><?=$rowCnt-$var?></th>
						<td class="tit"><a href="./request_detail.php?no=<?=$row['rno']?>"><?=$row['rtitle']?></a></td>
						<td><?=$row['rname']?></td>
						<td><?=$row['rdate']?></td>
						<td><?=$row['rstatus']?></td>
					</tr>
						
				<?php
					}
						
				
				} else {  //리스트개수만큼 있을때
					?> 
			
					<tr>
						<th scope="row"><?=$row['rno']?></th>
						<td class="tit"><a href="./request_detail.php?no=<?=$row['rno']?>"><?=$row['rtitle']?></a></td>
						<td><?=$row['rname']?></td>
						<td><?=$row['rdate']?></td>
						<td><?=$row['rstatus']?></td>
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
		<!--        #main END-->
<?php include_once "./footer.php"; ?>
