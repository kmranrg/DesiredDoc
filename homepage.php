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

  <head>
	  <meta charset="utf-8">
	  <title>Welcome</title>
	  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
	  
    <?php 
      include('includes/toolbar.php');
    ?>

	  <!--Slider Start -->

	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		
      <!-- Indicators -->
		  
      <ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  
      <div class="carousel-inner" role="listbox">
			  
        <div class="item active">
				  <img class="first-slide" src="images/homepage/sl1.jpg" alt="First slide" style="height:660px;width:1800px;">
				  <div class="container">
					  <div class="carousel-caption">
						  <h1><strong>Welcome to the Smart Way of Learning</strong></h1>
						  <p>
                <b>In this website you can get the notes of each topic of programming language in the form of PDF. </b>
						  </p>
						  <p>
                <a class="btn btn-lg btn-primary" href="reg.php" role="button">Sign up today</a>
						  </p>
					  </div>
				  </div>
			  </div>
			  
        <div class="item">
				  <img class="second-slide" src="images/homepage/sl2.jpg" alt="Second slide" style="height:660px;width:1800px;">
				  <div class="container">
					  <div class="carousel-caption">
						  <h1><b>We respect your convenience. Save the notes for offline reading.</b></h1>
						  <p>
                <b>Don't need to worry about you can also save the notes of each programming language for offline reading.</b>
						  </p>
						  <p>
                <a class="btn btn-lg btn-primary" href="reg.php" role="button">Sign up today</a>
						  </p>
					  </div>
				  </div>
			  </div>
			
        <div class="item">
				  <img class="third-slide" src="images/homepage/sl3.jpg" alt="Third slide" style="height:660px;width:1800px;">
				  <div class="container">
					  <div class="carousel-caption">
						  <h1><b>Don't need to be online everytime. Learn from the downloaded offline files</b></h1>
						  <p>
                <b>You can learn from your downloaded PDF files.</b>
						  </p>
					  	<p>
                <a class="btn btn-lg btn-primary" href="reg.php" role="button">Sign up today</a>
						  </p>
					  </div>
				  </div>
			  </div>
		  
      </div>

		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
	
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
	
	  </div>

	  <!--Slider End -->


	  <div class="container">
		  <h2 style="font-family:Verdana, Geneva, sans-serif"><b>CATEGORIES :</b></h2>
		  <br/>

		  <div class="col-md-3">
			  <img src="images/homepage/pl1.png" class="img-thumbnail img-circle"/>
			  <br/>
			  <br/>
			  <a href="c.php" class="btn btn-primary btn-block" style="background-color:#333">C Programming Language</a>
		  </div>

		  <div class="col-md-3">
			  <img src="images/homepage/pl2.png" class="img-thumbnail img-circle"/>
			  <br/>
			  <br/>
			  <a href="cpp.php" class="btn btn-primary btn-block" style="background-color:#333">C++ Programming Language</a>
		  </div>

		  <div class="col-md-3">
			  <img src="images/homepage/pl3.png" class="img-thumbnail img-circle"/>
			  <br/>
			  <br/>
			  <a href="csharp.php" class="btn btn-primary btn-block" style="background-color:#333">C# Programming Language</a>
		  </div>
		
      <div class="col-md-3">
			  <img src="images/homepage/pl4.png" class="img-thumbnail img-circle"/>
			  <br/>
			  <br/>
			  <a href="java.php" class="btn btn-primary btn-block" style="background-color:#333">JAVA Programming Language</a>
		  </div>
	
    </div>
	  <br/>
	  <br/>
	  <br/>
	
    <?php 
      include('includes/footer.php');
    ?>
      
  </body>
</html>