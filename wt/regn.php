<?php
	extract($_GET);
	$file = fopen("user.txt","w");
	fwrite($file,$uname.":".$pwd);
	fclose($file);
	//setcookie("color",$color,time()+3600); #setcookie statement comes before any output statement
	echo"user ".$uname." created successfully \n";
	echo "<a href = 'homepage.html'>Home Page </a>";


?>