<?php 
	include("config.php");
	include("head.php");
	
	$name=$_POST['name'];
	$add=$_POST['address'];
	$city=$_POST['city'];
	$cont=$_POST['contact'];
	$email=$_POST['email'];
	$img=$_FILES['image']['name'];
	$remar=$_POST['remark'];
	if(($_FILES["image"]["type"]=="image/gif") || ($_FILES["image"]["type"]=="image/jpeg") 
	||($_FILES["image"]["type"]=="image/pjpeg") || ($_FILES["image"]["type"]=="image/jpg")&& ($_FILES["image"]["size"]<90000));
	{
		{
			$img=$_FILES["image"]["name"];
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);

	$sql= "INSERT INTO `student` (`name`,`address`,`city`,`contact`,`email`,`image`,`remark`) VALUES('$name','$add','$city','$cont','$email','$img','$remar')";
		if(!mysql_query($sql,$con))
		{
			die('could not error' . mysql_error());
		}
		else
		{
		  	header("location:view.php");
		}
	 }
}	
mysql_close($con);
	
?>