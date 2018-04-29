<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>

	<body>

		<?php 
			include('reg_head.php');
		?>

		<div class="container">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary" style="margin-top:50px; margin-bottom:150px; background-color:#9CF;">
				
					<div class="panel-heading">
						<h4>Login</h4>
					</div>

					<div class="panel-body">
						<form action="#" method="post">

							<div class="form-group">
								<input type="email" class="form-control" placeholder="Enter email-id" name="UID"/>
							</div>

							<div class="form-group">
								<input type="password" class="form-control" placeholder="Enter password" name="PWD"/>
							</div>

							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Sign-in" name="login"/>
							
								<?php
									@$UID = $_POST[ "UID" ];
									@$PWD = $_POST[ "PWD" ];
									if ( isset( $_POST[ "login" ] ) ) 
									{
										$dblink = mysqli_connect( "localhost", "root", "", "desireddoc" );
										$qry = "select * from users where email='" . $UID . "' and pass='" . $PWD . "'";
										$res = mysqli_query( $dblink, $qry );
										@$row = mysqli_fetch_row( $res );
										if ( count( $row ) > 0 ) 
										{
											session_start();
											$_SESSION[ "email" ] = $row[ 2 ];
											header( "Location:reg_welcome.php" );
										} 
										else 
										{
											echo '<script>window.alert("Either username or password is incorrect (or not filled)");</script>';
										}
									}
								?>

								<input type="submit" class="btn btn-primary" value="Sign-up" name="reg"/>
							
								<!--for providing the space b/w sign-up and admin login button -->
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
							
								<input type="submit" class="btn btn-danger" value="Admin Login" name="adm"/>

							</div>

							<?php
								if ( isset( $_POST[ "adm" ] ) ) 
								{
									if ( @$_POST[ "UID" ] == "kmranrg@gmail.com" && $_POST[ "PWD" ] == 100 ) 
									{
										session_start();
										$_SESSION[ "s" ] = "admin";
										header( "Location:reg_adminlog.php" );
									} 
									else 
									{
										echo '<script>window.alert("Either username or password is incorrect (or not filled)");</script>';
									}
								}
							?>

						</form>
					</div>
				</div>
			</div>
		</div>

		<?php 
			if((@$_POST["reg"])=="Sign-up")
			{
				header("Location:reg.php");
			}
		?>

		<?php 
			include('reg_foot.php'); 
		?>

	</body>
</html>