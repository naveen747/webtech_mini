<?php
	extract($_GET);
	$conn = mysqli_connect("localhost","root","");
	if(!$conn){
		die('connection failed');
	}
	mysqli_select_db($conn,"newspaperblog");
	
	//$query = "select fname,lname,Email,Password from users;";
	$query = "Select * from users;";
	$res = mysqli_query($conn,$query);
	var_dump($res);

	//$row = mysqli_fetch_array($res);
	while($row = mysqli_fetch_assoc($res)){
		if($row["uname"]==$uname && $row["pwd"]==$pwd){
			echo "<a href = 'xbox.html'></a>";
			exit;
		}
		}
	echo "invalid user";
	
?>
