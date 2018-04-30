<?php
	function deleterecord() 
	{
		$db = mysqli_connect( "localhost", "root", "", "desireddoc" );
		@$UID = $_SESSION[ "email" ];
		$res = mysqli_query( $db, "select * from users where email='" . $UID . "'" );
		$row = mysqli_fetch_row( $res );

		if ( isset( $_POST[ "del" ] ) ) 
		{
			$FNM = $_POST[ "FNM" ];
			$LNM = $_POST[ "LNM" ];
			$UID = $_POST[ "UID" ];
			$dob = $_POST[ "dob" ];
			$PWD = $_POST[ "PWD" ];
			$phone = $_POST[ "phone" ];
			$op1 = $_POST[ "op1" ];
			$op2 = $_POST[ "op2" ];
			$qry = "delete from users where email='" . $UID . "'";
			if ( mysqli_query( $db, $qry ) ) 
			{
				session_destroy();
				header( "Location:homepage.php" );
			} 
			else 
			{
				echo '<script>window.alert("Not Deleted");</script>';
			}
		}
	}

?>