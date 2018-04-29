<?php
	//after session out page will redirect to login page
	session_start();
	if ( !isset( $_SESSION[ "email" ] ) ) 
	{
		header( "Location:reg_login.php" );
	}
?>
<!doctype html>
<html>

	<br/><br/><br/><br/><br/><br/><br/>

	<head>
		<meta charset="utf-8">
		<title>C#</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>

	<body>
		
		<?php 	
			include('reg_head1.php');
		?>
	
		<div class="row text-center">
			
			<div class="col-md-3 col-sm-6 home-feature">
				<div class="thumbnail">
					<img src="images/csharp/1.png" alt="">
					<div class="caption">
						<a href="notes/csharp/1.pdf" target="_blank"><h3>About C# Programming Language</h3></a>
						<p>C# Programming Language, Prerequisite.</p>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 home-feature">
				<div class="thumbnail">
					<img src="images/csharp/2.png" alt="">
					<div class="caption">
						<a href="notes/csharp/2.pdf" target="_blank"><h3>What is C# ?</h3></a>
						<p>Different types of secured and robust applications that can be developed using C#.</p>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 home-feature">
				<div class="thumbnail">
					<img src="images/csharp/3.png" alt="">
					<div class="caption">
						<a href="notes/csharp/3.pdf" target="_blank"><h3>C++ vs C#</h3></a>
						<p>Differences between C++ and C# in a tabular form.</p>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 home-feature">
				<div class="thumbnail">
					<img src="images/csharp/4.png" alt="">
					<div class="caption">
						<a href="notes/csharp/4.pdf" target="_blank"><h3>JAVA vs C#</h3></a>
						<p>Differences between JAVA and C# in a tabular form.</p>
					</div>
				</div>
			</div>
		
		</div>
		<br/>
		<br/>
		<br/>
				
		<?php 	
			include('reg_foot.php');
		?>

	</body>
</html>