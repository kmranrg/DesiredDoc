<?php
	$dblink = mysqli_connect( "localhost", "root", "", "desireddoc" );
	$qry = "select * from users";
	$res = mysqli_query( $dblink, $qry );
	$row = mysqli_fetch_row( $res );
?>

<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	</head>

	<body>

		<?php 	
			include('includes/header.php');
		?>

		<div class="container">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary" style="margin-top:30px;background-color:#eee;">
				
					<div class="panel-heading">
						<h3>Sign Up</h3>
					</div>
				
					<div class="panel-body">
						<form action="#" method="post" enctype="multipart/form-data">
						
							<div class="form-group">
								<input type="text" class="form-control" placeholder="First Name" name="FNM"/>
							</div>
						
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Last name" name="LNM"/>
							</div>
						
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email-id" name="UID"/>
							</div>

							<div class="form-group">
								<input type="text" class="form-control" placeholder="Date of Birth (yyyy-mm-dd)" name="dob"/>
							</div>

							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="PWD"/>
							</div>

							<div class="form-group">
								<input type="password" class="form-control" placeholder="Confirm password" name="CPWD"/>
							</div>

							<?php 
								if((@$_POST["PWD"])!=(@$_POST["CPWD"]))
								{
									echo '<script>window.alert("Both passwords are not same");</script>';
								}
							?>

							<div class="form-group">
								<input type="text" class="form-control" placeholder="Phone number" name="phone"/>
							</div>
							
							<b>Profile image:</b>
							<div class="form-group">
								<p>(only jpg and png,less than 2mb)</p>
								<input type="file" name="file" id="fileToUpload">
							</div>
						
							<!--dropdown list for book category -->
						
							<select name="op1">
								<option value="">
									<b>---Select Gender---</b>
								</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Others">Others</option>
							</select>
							<br/>
							<br/>

							<!--dropdown list for country -->
						
							<select name="op2">
								<option value="">
									<b>---Select Country---</b>
								</option>
								<option value="Australia">Australia</option>
								<option value="USA">USA</option>
								<option value="Iceland">Iceland</option>
								<option value="India">India</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Nigeria">Nigeria</option>
								<option value="Russia">Russia</option>
							</select>
							<br/>
							<br/>

							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Register" name="reg"/>
								&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
						
							<?php
								//to check whether all these feilds are filled or not
								if ( ( @$_POST[ "reg" ] ) == "Register" ) 
								{
									if ( ( ( @$_POST[ "PWD" ] ) == NULL ) || ( ( $_POST[ "CPWD" ] ) == NULL ) || ( ( $_POST[ "phone" ] ) == NULL ) || ( ( $_POST[ "op1" ] ) == NULL ) || ( ( $_POST[ "UID" ] ) == NULL ) || ( ( $_POST[ "LNM" ] ) == NULL ) || ( ( $_POST[ "FNM" ] ) == NULL ) || ( ( $_POST[ "op2" ] ) == NULL ) || ( ( $_POST[ "dob" ] ) == NULL ) ) 
									{
										echo '<script>window.alert("Any feild should not be left blank");</script>';
									} 
									else if ( ( @$_POST[ "PWD" ] ) == ( @$_POST[ "CPWD" ] ) ) 
									{
										if ( ( @$_POST[ "UID" ] ) == $row[ 2 ] ) 
										{
											echo '<script>window.alert("Email-id already exists");</script>';
										}	 
										else if ( ( @$_POST[ "UID" ] ) != $row[ 2 ] ) 
										{ 
											//for inserting the record
											include( 'includes/func_insertrecord.php' );
											insertrecord();
										}
									}
								}
							?>

								<b>Already registered >></b>
								<input type="submit" class="btn btn-danger" value="Login" name="login"/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	
		<?php 
			//if login button is clicked then redirect it to the login page
			if((@$_POST["login"])=="Login")
			{
				header("Location:login.php");
			}
		?>

		<?php 	
			include('includes/footer.php');
		?>
	</body>
</html>