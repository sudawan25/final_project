<?php
	$languageID=$_POST["language"];
	error_reporting(0);
	
	if($_FILES["file"]["name"]!="")
	{
		include "./make.php";
	}
	else
	{
		include("./c.php");
	}
?>
