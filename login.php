<?php
	$username=$_POST["username"];
	$password=$_POST["password"];
	if($username == "admin" && $password == "12345"){
		echo true;
	}else{
		echo false;
	}
?>