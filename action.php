<?php
   if($_GET["s1"]){
	$myfile = fopen("s1.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $_GET["s1"]);
	echo fread($myfile,filesize("s1.txt"));
	fclose($myfile);
		echo "Submited";
	//exit();
	}
	//else
	if($_GET["s2"]){
	$myfile = fopen("s2.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $_GET["s2"]);
	echo fread($myfile,filesize("s2.txt"));
	fclose($myfile);
		echo "Submited";
	//exit();
	}
	if($_GET["s3"]){
	$myfile = fopen("s3.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $_GET["s3"]);
	echo fread($myfile,filesize("s3.txt"));
	fclose($myfile);
		echo "LG Submited";
	//exit();
	}
	if($_GET["s4"]){
	$myfile = fopen("s4.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $_GET["s4"]);
	echo fread($myfile,filesize("s4.txt"));
	fclose($myfile);
		echo "Submited";
	//exit();
	}
	if($_GET["b1"]){
	$myfile = fopen("b1.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $_GET["b1"]);
	echo fread($myfile,filesize("b1.txt"));
	fclose($myfile);
		echo "Submited";
	//exit();
	}
	header("Location: index.php");
	exit();
 ?>