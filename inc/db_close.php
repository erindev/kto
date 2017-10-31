<?php
	function db_close( $sql , $result, $con )
	{
		if ( $sql == "select"){
			mysqli_free_result( $result );
			mysqli_close($con);
		} else {
			mysqli_close($con);
		}
	}
?>