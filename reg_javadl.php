<?php 
//after session out page will redirect to login page
session_start();
if(!isset($_SESSION["email"]))
{
header("Location:reg_login.php");	
}
?></br></br></br></br></br></br></br>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JAVA</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
<?php 	include('reg_head1.php');?>
<div class="text-center">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="imgnotes/java/1.png" alt="">
                        <div class="caption">
                        <a href="notes/java/1.pdf" target="_blank"><h3>What is JAVA ? </h3></a>
                            <p>Where it is used? Types of JAVA Applications, JAVA Platforms, Prerequisite.</p>    
                        </div>
                    </div>
                </div>
      
<div class=" text-center">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="imgnotes/java/2.png" alt="">
                        <div class="caption">
                        <a href="notes/java/2.pdf" target="_blank"><h3>History of JAVA</h3></a>
                            <p>James Gosling,Oak Tree, JAVA version history.</p>    
                        </div>
                    </div>
                </div>
<div class="text-center">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="imgnotes/java/3.jpg" alt="">
                        <div class="caption">
                        <a href="notes/java/3.pdf" target="_blank"><h3>Features of JAVA</h3></a>
                            <p>Simple, Object Oriented, Potable, Platform Independent,Secured, Robust, etc.</p>    
                        </div>
                    </div>
                </div>
                
<div class="row text-center">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="imgnotes/java/4.png" alt="">
                        <div class="caption">
                        <a href="notes/java/4.pdf" target="_blank"><h3>C++ vs JAVA</h3></a>
                            <p>Differences between C++ and JAVA in a tabular form.</p>    
                        </div>
                    </div>
                </div>
              </div></br></br></br>
<?php 	include('reg_foot.php');?>
</body>
</html>
