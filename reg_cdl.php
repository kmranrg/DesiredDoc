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
<title>C</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
<?php 	include('reg_head1.php');?>
<div class="text-center">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="imgnotes/c/1.png" alt="">
                        <div class="caption">
                        <a href="notes/c/1.pdf" target="_blank"><h3>What is C Language ?</h3></a>
                            <p>C, Why it is considered as the base for other programming languages ?, Prerequisite.</p>    
                        </div>
                    </div>
                </div>
      
<div class=" text-center">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="imgnotes/c/2.png" alt="">
                        <div class="caption">
                        <a href="notes/c/2.pdf" target="_blank"><h3>History of C Language</h3></a>
                            <p>Programming languages that were developed before C language.</p>    
                        </div>
                    </div>
                </div>
<div class="text-center">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="imgnotes/c/3.jpg" alt="">
                        <div class="caption">
                        <a href="notes/c/3.pdf" target="_blank"><h3>Features of C Language</h3></a>
                            <p>Simple, Machine Independent, Mid-level Language, Rich Library, Fast speed, etc.</p>    
                        </div>
                    </div>
                </div>
<div class="row text-center">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="imgnotes/c/4.png" alt="">
                        <div class="caption">
                        <a href="notes/c/4.pdf" target="_blank"><h3>How to  install C ?</h3></a>
                            <p>Step by step pictorial representation of installation of C.</p>    
                        </div>
                    </div>
                </div>
              </div></br></br></br>
<?php 	include('reg_foot.php');?>
</body>
</html>
