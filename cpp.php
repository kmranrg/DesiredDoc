<?php
	//after session out page will redirect to login page
	session_start();
	if ( !isset( $_SESSION[ "email" ] ) ) 
	{
		header( "Location:login.php" );
	}
?>
<!doctype html>
<html>
	
	<br/><br/><br/><br/><br/><br/><br/>

	<head>
		<meta charset="utf-8">
		<title>C++</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	</head>

	<body>
		
		<?php 	
			include('includes/toolbar.php');
		?>

		<div class="row text-center">
			
			<div class="col-md-3 col-sm-6 home-feature">
				<div class="thumbnail">
					<img src="images/cpp/a1.png" alt="">
					<div class="caption">
						<a href="notes/cpp/1.pdf" target="_blank"><h3>About C++ Programming Language</h3></a>
						<p>C++ Programming Language, Prerequisite.</p>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 home-feature">
				<div class="thumbnail">
					<img src="images/cpp/2.png" alt="">
					<div class="caption">
						<a href="notes/cpp/2.pdf" target="_blank"><h3>What is C++ ?</h3></a>
						<p>Object Oriented Programming, Standard Libraries, Usage of C++.</p>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 home-feature">
				<div class="thumbnail">
					<img src="images/cpp/3.png" alt="">
					<div class="caption">
						<a href="notes/cpp/3.pdf" target="_blank"><h3>C vs C++</h3></a>
						<p>Differences between C and C++ in a tabular form.</p>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 home-feature">
				<div class="thumbnail">
					<img src="images/cpp/4.png" alt="">
					<div class="caption">
						<a href="notes/cpp/4.pdf" target="_blank"><h3>C++ History</h3></a>
						<p>Programming languages that were developed before C++ language.</p>
					</div>
				</div>
			</div>

		</div>
		</br>
		</br>
		</br>
				
		<?php 	
			include('includes/footer.php');
		?>

	</body>
</html>