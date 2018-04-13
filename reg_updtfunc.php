<?php
function  updaterecord()
{ $dt=mysqli_connect("localhost","root","","ukanlibrary");
  @$UID=$_GET["email"];
  $res=mysqli_query($dt,"select * from booklib where email='".$UID."'");
  $row=mysqli_fetch_row($res);
  	
 if(isset($_POST["updt"]))
{
 $FNM=$_POST["FNM"];
 $LNM=$_POST["LNM"];
 $UID=$_POST["UID"];
 $dob=$_POST["dob"];
 $PWD=$_POST["PWD"];
 $phone=$_POST["phone"];
 $op1=$_POST["op1"];
 $op2=$_POST["op2"];
 //file upload
 if(isset($_FILES['file']))
{
	@$error=array();
	@$fileName=NULL;
	@$fileSize=$_FILES['file']['size'];
	@$fileType=$_FILES['file']['type'];
	@$filetmp=$_FILES['file']['tmp_name'];
    @$fileName = preg_replace("#[^a-z0-9.]#i", "", $fileName);
	//limit the file type
$target_dir = "pimages/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) 
{
 $error="Extension not Supported Please select only Jpg & png ";
 echo '<script>window.alert("Sorry, only JPG, JPEG & PNG files are allowed");</script>';
}
	//limit the file size
	if ($fileSize > 1123000) 
	{$error="Please select file less than 2mb";
     echo '<script>window.alert("Please select file less than 2mb");</script>';
    }
	//now upload file
    if(empty($error))
	{   @$fileName=$_FILES['file']['name'];
		move_uploaded_file($filetmp, "pimages/$fileName");
	}
}
 //end of file upload
 if(@$fileName==NULL)
 {  
    $qry="update booklib set fname='".$FNM."',lname='".$LNM."',dob='".$dob."',pass='".$PWD."',phno='".$phone."',pimage='".$row[6]."',gen='".$op1."',cntry='".$op2."' where email='".$UID."'";
   if(mysqli_query($dt,$qry))
    { 
      header("Location:reg_adminlog.php");
    } 
 }
 if(@$fileName!=NULL)
 {  $qry="update booklib set fname='".$FNM."',lname='".$LNM."',dob='".$dob."',pass='".$PWD."',phno='".$phone."',pimage='".$fileName."',gen='".$op1."',cntry='".$op2."' where email='".$UID."'";
	if(mysqli_query($dt,$qry))
    { 
      header("Location:reg_adminlog.php");
    } 
 }
 else
 {
  echo '<script>window.alert("Record not updated");</script>';
 }
}
  
}
?>