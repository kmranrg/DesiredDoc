<?php
	//after session out page will redirect to login page
	session_start();
	if ( !isset( $_SESSION[ "email" ] ) ) {
		header( "Location:login.php" );
	}
?>

<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Contact Us</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<style>

			input {
				padding: 14px 70px;
				font-size: 15px;
				margin-bottom: 30px;
			}
		
			#subscribe {
				border: none;
				background-color: #26211f;
				color: white;
				font-size: 16px;
				margin: 4px -4px;
				padding: 16px 40px;
			}
		</style>
	</head>

	<body>

		<?php 
			include('toolbar.php');
		?>
		<br/>
		<br/>
		<br/>
		<br/>

		<div class="container">
			<h2 style="font-family:Verdana, Geneva, sans-serif">
				<b>DEVELOPER</b>
			</h2>
			<br/>

			<div class="col-md-3">
				<img src="images/contact_us/1.jpg" class="img-thumbnail img-circle"/>
				<br/>
				<br/>
			</div>
		</div>

		<div class="container">
			<h3>
				<p>
					I am Kumar Anurag. I am studying in Guru Gobind Singh Indraprastha University (GGSIPU) commonly known as IP University. I am from B.Tech. Computer Science Branch. I am from New Delhi. I also develops apps for mobile devices. I am cheif developer of ukan.
				</p>
			</h3>
		
			<h3>
				<p>
					This Desired Doc Website is a Learning Website, at which anybody who wishes to learn can learn the programming languages like C, C++, C#, JAVA, etc. Desired Doc is a product of ukan.
				</p>
			</h3>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>

			<h3 style="font-family:Georgia, 'Times New Roman', Times, serif">
				<b>
					ukansuccess@gmail.com
					<br/><br/>
					<a href="notes/disclaimer.pdf" class="btn btn-primary" style="background-color:#333" target="_blank">Disclaimer</a>
				</b>
			</h3>
		</div>
		<br/>
		<br/>
		<br/>

		<div>
			<center>
				<h2> Subscribe to our newsletter </h2>
				<form action="#" method="post" enctype="multipart/form-data">
					<input type="email" name="subs">
					<input type="submit" value="Subscribe" id="subscribe" name="subsc">
				</form>
			</center>
		</div>
	
		<?php 
			if(@$_POST["subsc"]=="Subscribe" && @$_POST["subs"]!=NULL)
			{
  				$dt=mysqli_connect("localhost","root","","desireddoc");
  				@$sub=$_POST["subs"];
  				if($res=mysqli_query($dt,"insert into subscribe values('".$sub."')"))
 				{
  					echo '<script>window.alert("Successfully subscribed");</script>';
 				}
			}
		?>

		<?php 
			include('footer.php');
		?>
	</body>
</html>