<?php 
	include("config.php");
	include("head.php");
	$eid= $_GET["id"];

	$qry="DELETE from student where `id`='$eid'";
	mysql_query($qry,$con);
		if(!mysql_query($qry,$con))
		{
			die('could not error' . mysql_error());
		}
		else
		{
			header("location:view.php");
		}		
mysql_close($con);
?>