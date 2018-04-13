<?php
$dblink=mysqli_connect("localhost","root","","ukanlibrary");
$qry="select * from booklib";
$res=mysqli_query($dblink,$qry);
$row=mysqli_fetch_row($res);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
marquee {font-size:20px;
	     border: 5px solid #FF0;
	     background-color:red;
	    }
</style>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<?php 	include('reg_head.php');?>
<marquee><strong>10% discount for  early registrations...Hurry up !!!!</strong></marquee>
<div class="container" >
<div class="col-md-12 col-md-offset-0">
<div class="panel panel-primary" style="margin-top:30px;background-color:#9CF;">
<div class="panel-heading"><h3>Registration Form</h3></div>
<div class="panel-body">
<form action="#" method="post" enctype="multipart/form-data">
<b>First name:</b>
<div class="form-group">
<input type="text" class="form-control" placeholder="Kumar" name="FNM" />
</div>
<b>Last name:</b>
<div class="form-group">
<input type="text" class="form-control" placeholder="Anurag" name="LNM" />
</div>
<b>Email-id:</b>
<div class="form-group">
<input
type="email" class="form-control" placeholder="kan@gmail.com" name="UID" />
</div>
<div class="form-group">
<b>Date of Birth (DOB):<br/></b>
<input type="text" class="form-control" placeholder="yyyy-mm-dd" name="dob" />
</div>
<b>Password:</b>
<div class="form-group">
<input type="password" class="form-control" placeholder="don't use general words" name="PWD" />
</div>
<b>Confirm password:</b>
<div class="form-group">
<input type="password" class="form-control" placeholder="" name="CPWD" />
</div>
<?php 
if((@$_POST["PWD"])!=(@$_POST["CPWD"]))
{
	echo '<script>window.alert("Both passwords are not same");</script>';
}
?>
<div class="form-group">
<b>Phone number:<br/></b>
<input type="text" class="form-control" placeholder="9876543210" name="phone" />
</div>
<div class="form-group">
<b>Profile image:</b></br>(only jpg and png,less than 2mb)
<input type="file" name="file" id="fileToUpload">
</div>
<!--dropdown list for book category -->
<select name="op1">
<option value=""><b>---Select Gender---</b></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
</select>
</br>
</br>
<!--dropdown list for country -->
<select name="op2">
<option value=""><b>---Select Country---</b></option>
<option value="Australia">Australia</option>
<option value="USA">USA</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Nigeria">Nigeria</option>
<option value="Russia">Russia</option>
</select>
<br/><br/>
<div class="form-group">
<input type="submit" class="btn btn-success" value="Register" name="reg" />
</div>
<?php
//to check whether all these feilds are filled or not
if((@$_POST["reg"])=="Register")
{
 if(((@$_POST["PWD"])==NULL)||(($_POST["CPWD"])==NULL)||(($_POST["phone"])==NULL)||(($_POST["op1"])==NULL)||(($_POST["UID"])==NULL)||(($_POST["LNM"])==NULL)||(($_POST["FNM"])==NULL)||(($_POST["op2"])==NULL)||(($_POST["dob"])==NULL))
   { 
	echo '<script>window.alert("Any feild should not be left blank");</script>';
   }
else if((@$_POST["PWD"])==(@$_POST["CPWD"]))
   {if((@$_POST["UID"])==$row[2])
	{
	echo '<script>window.alert("Email-id already exists");</script>';
	}
	   else if((@$_POST["UID"])!=$row[2])
	{ //for inserting the record
      include('reg_insrtfunc.php');
	  insertrecord();
	  
	}
	
   }
}
?>
<div class="form-group">
<b>Already registered >></b>
<input type="submit" class="btn btn-danger" value="Login" name="login" />
</div>
</form>
</div>
<div class="container"></div></div>
<div class="clearfix"></div>
</div></div>
<?php 
//if login button is clicked then redirect it to the login page
if((@$_POST["login"])=="Login")
{
	header("Location:reg_login.php");
}
?>
<!--for including php file of footer -->
<?php 	include('reg_foot.php');?>
</body>
</html>