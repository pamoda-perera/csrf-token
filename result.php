<?php
	
	$username =  $_POST['username'];
	$password =  $_POST['password'];

	if($username == 'pamoda' && $password == 'pamoda'){
		require_once 'token.php';
		echo 'inside results';
		token::generateToken();
		header("Location:home.php");
	} else {
		header("Location:index.php?fail=1");
	} 

?>

