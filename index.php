<!DOCTYPE html>
<head>
	<title>WIRELESS PID ALARM</title>
</head>
    <style type="text/css">
		table,th,td {
			border:1px solid black;
			}
		tr {
			align:left;
			}
		#map {
			height: 300px;
			width: 70%;
			align: center;
			}

	</style>
		
<body>
	<img src="Capture.PNG">
	<H1>
		<script>
		<?php
		$myfile = fopen("s1.txt", "r") or die("Unable to open file!");
	     $dataa1=fread($myfile,filesize("s1.txt"));
		 fclose($myfile);
		?>
		<?php
		$myfile = fopen("s2.txt", "r") or die("Unable to open file!");
	     $dataa2=fread($myfile,filesize("s2.txt"));
		 fclose($myfile);
		?>
	    <?php
		$myfile = fopen("s3.txt", "r") or die("Unable to open file!");
	     $dataa3=fread($myfile,filesize("s3.txt"));
		 fclose($myfile);
		?>
						
		var data1 = <?php echo json_encode($dataa1); ?>;
			
		}
		</script>
			<center>
		WIRELESS PID ALARM
		</center>
	</H1>
	<center>
	
	
	<hr />
    <H3>
	<!--Google Maps <a href="" id="burl" >| Link |</a><br>-->
	
	
	PATIENT REQUEST: = <input type="text" value="<?php echo @$dataa1;?>"/><br/>
	PATIENT ROOM NO: = <input type="text" value="<?php echo @$dataa2;?>"/><br/>
	PATIENT BED NO: = <input type="text" value="<?php echo @$dataa3;?>"/><br/>
	
	
	
	</H3>
	<hr />
    <form action="action.php" method = "GET">
	ACCEPT: <input type = "submit" style="width:160px;" name = "b1" value="ON"/><br /><br />
	<input type = "submit" style="width:160px;" name = "b1" value="Refresh"/><br /><br />

    </form>
	</center>
	    
	<meta HTTP-EQUIV="Refresh" CONTENT="3">
</body>
</html>
