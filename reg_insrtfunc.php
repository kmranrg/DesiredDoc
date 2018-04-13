<?php
function  insertrecord()
{ $dt=mysqli_connect("localhost","root","","ukanlibrary");
  @$UID=$_GET["email"];
  $res=mysqli_query($dt,"select * from booklib where email='".$UID."'");
  $row=mysqli_fetch_row($res);
	
 if(isset($_POST["reg"]))
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
	$error=array();
	@$fileName=NULL;
	@$fileSize=$_FILES['file']['size'];
	@$fileType=$_FILES['file']['type'];
	@$filetmp=$_FILES['file']['tmp_name'];
    @$fileName = preg_replace("#[^a-z0-9.]#i", "", $fileName);
    //limit the file type
    $target_dir = "pimages/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "" ) 
{
 $error="Extension not Supported Please select only Jpg & png";
 echo '<script>window.alert("Sorry, only JPG, JPEG & PNG files are allowed");</script>';
}

	//limit the file size
	if($fileSize>1123000)
	{
		$error="Please select file less than 2mb";
		echo '<script>window.alert("Please select file less than 2mb");</script>';
	}
	//now  upload file
	if(empty($error))
	{   $fileName=$_FILES['file']['name'];
		move_uploaded_file($filetmp, "pimages/$fileName");
	}
}
   //end of file upload
   if(@$fileName!=NULL)
  {
   if($res=mysqli_query($dt,"insert into booklib values('".$FNM."','".$LNM."','".$UID."','".$dob."','".$PWD."','".$phone."','".$fileName."','".$op1."','".$op2."')"))
   { echo '<script>window.alert("Successfully registered");</script>';
   }
  }
  if(@$fileName==NULL)
  {   $ar=array("defpro.png");
  if($res=mysqli_query($dt,"insert into booklib values('".$FNM."','".$LNM."','".$UID."','".$dob."','".$PWD."','".$phone."','".$ar[0]."','".$op1."','".$op2."')"))
   { echo '<script>window.alert("Successfully registered");</script>';
   }
  }
  }

}
?>