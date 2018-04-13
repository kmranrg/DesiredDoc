<?php
function  deleterecord()
{ $dt=mysqli_connect("localhost","root","","ukanlibrary");
  @$UID=$_SESSION["email"];
  $res=mysqli_query($db,"select * from booklib where email='".$UID."'");
  $row=mysqli_fetch_row($res);
	
 if(isset($_POST["del"]))
{
 $FNM=$_POST["FNM"];
 $LNM=$_POST["LNM"];
 $UID=$_POST["UID"];
 $dob=$_POST["dob"];
 $PWD=$_POST["PWD"];
 $phone=$_POST["phone"];
 $op1=$_POST["op1"];
 $op2=$_POST["op2"];
 $qry="delete from booklib where email='".$UID."'";
 if(mysqli_query($dt,$qry))
 { 
  session_destroy();
  header("Location:reg_welcome.php");
 }
 else
 {
  echo '<script>window.alert("Not Deleted");</script>';
 }
}

}
?>