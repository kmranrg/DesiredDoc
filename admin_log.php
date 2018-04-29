<?php
	session_start();
	if ( !isset( $_SESSION[ "s" ] ) ) 
	{
		header( "Location:login.php" );
	}
?>

<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	</head>

	<body>
		
		<?php 	
			include('header.php');
			include('signout_button.php');
		?>
		<br/>

		<h3>
			<b>Records</b>
		</h3>
		<br/>
	
		<?php
			//for printing the rows of the table
			$dblink = mysqli_connect( "localhost", "root", "", "desireddoc" );
			$qry = "select * from users";
			$res = mysqli_query( $dblink, $qry );
			$i = 1;
			echo '<table width="100%" border="2">
  			<tr>
    			<th scope="col">Record No.</th>
    			<th scope="col">First Name</th>
    			<th scope="col">Last Name</th>
    			<th scope="col">E-mail Id</th>
    			<th scope="col">Date of Birth</th>
    			<th scope="col">Password</th>
    			<th scope="col">Phone No.</th>
				<th scope="col">Profile Image</th>
    			<th scope="col">Gender</th>
    			<th scope="col">Country</th>
    			<th scope="col">Update Profile</th>
  			</tr>';
			while ( $row = mysqli_fetch_row( $res ) ) 
			{
				echo 
				'<tr>
    				<td>' . $i . '</td>
    				<td>' . $row[ 0 ] . '</td>
    				<td>' . $row[ 1 ] . '</td>
    				<td>' . $row[ 2 ] . '</td>
    				<td>' . $row[ 3 ] . '</td>
    				<td>' . $row[ 4 ] . '</td>
    				<td>' . $row[ 5 ] . '</td>
    				<td>' . $row[ 6 ] . '</td>
    				<td>' . $row[ 7 ] . '</td>
					<td>' . $row[ 8 ] . '</td>
    				<td><a href="update_profile.php?email=' . $row[ 2 ] . '">Edit</a></td>
  				</tr>';
				$i++;
			}
			echo '</table>';
		?>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>

		<?php 	
			include('footer.php');
		?>
	</body>
</html>