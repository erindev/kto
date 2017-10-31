<?php
	include_once "./db_connect.php";

	$rname = $_POST['rname'];
$remail = $_POST['remail'];
$rphone = $_POST['rphone'];
$rpost = $_POST['post1'] . " - " . $_POST['post2'];
$raddress = $_POST['raddress'];
$rtitle = $_POST['rtitle'];
$rcont = $_POST['rcont'];

$userid = $_POST['userid'];


	$sql2 = "select * from kto_members";
	$result2 = mysqli_query($con ,$sql2) or die (mysqli_error($con));
	$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

$no = $_GET['no'];

if ( $_SESSION['userid'] == "admin" ){
	$rstatus = $_POST['rstatus'];
	echo $rstatus;
	$sql =  "update request set rstatus='$rstatus' where rno='$no'";
	
	$result = mysqli_query($con, $sql) or die (mysqli_error($con));

	if ( $result ) { echo "<script>alert('상태반영이 완료되었습니다.');</script>"; } //07
	
} else {
	
	$sql = "insert into request
			(rname, remail, rphone, rpost, raddress, rtitle, rcont,rdate,userid)
			values ('$rname','$remail','$rphone','$rpost','$raddress','$rtitle','$rcont',now(),'$userid')";
	
	$result = mysqli_query($con, $sql) or die (mysqli_error($con));

	if ( $result ) { echo "<script>alert('가이드북 신청이 완료되었습니다');</script>"; } //07
}


	$sqlno = "select * from request where 'rtitle'='$rtitle'";
	$result2 = mysqli_query($con, $sqlno);
	$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
	$tview = 0;
	$id = $row['rno'];

	

echo "<meta http-equiv='refresh' content='0; URL=../request.php'/>";
	
?>