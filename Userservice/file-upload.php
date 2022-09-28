<?php
session_start();
include 'database.php';
if(isset($_POST['submit']))
{
	$extension=array('jpeg','jpg','png','gif');
	foreach ($_FILES['image']['tmp_name'] as $key => $value) {
		$filename=$_FILES['image']['name'][$key];
		$filename_tmp=$_FILES['image']['tmp_name'][$key];
		echo '<br>';
		$ext=pathinfo($filename,PATHINFO_EXTENSION);

		$finalimg='';
		if(in_array($ext,$extension))
		{
			if(!file_exists('../assets/upload-image/'.$filename))
			{
			move_uploaded_file($filename_tmp, '../assets/upload-image/'.$filename);
			$finalimg=$filename;
			}else
			{
				 $filename=str_replace('.','-',basename($filename,$ext));
				 $newfilename=$filename.time().".".$ext;
				 move_uploaded_file($filename_tmp, '../assets/upload-image/'.$newfilename);
				 $finalimg=$newfilename;
			}
			$creattime=date('Y-m-d h:i:s');
			//insert
			$insertqry="INSERT INTO `multiple-images`( `image_name`, `image_createtime`,`ikey`,`userid`) VALUES ('$finalimg','$creattime','".$_SESSION['id100']."','".$_COOKIE['usercookie']."')";
			mysqli_query($con,$insertqry);
			echo("<script> window.open('buy.php', '_self')</script>");
			
		}else
		{
			//display error
		}
	}
}
?>