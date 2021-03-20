<?php
include('../db_connect.php');

if (!empty($_POST["SignIn"])) {
	
	session_start();
	$email = $_POST['getEmail'];
	$password = $_POST['getPass'];
	
	$getUser = select("*", "users","WHERE Email = '".$email."'");

	if($email == $getUser[0]['Email'] && $password == $getUser[0]['Password'])
	{
		$_SESSION["userType"] = $getUser[0]["usertype"];
		$_SESSION["userName"] = $getUser[0]["username"];
		$_SESSION["userId"] = $getUser[0]["id"];
		$_SESSION["email"] = $getUser[0]["Email"];
	}
	else if($email != $getUser[0]['Email'] || $password != $getUser[0]['Password'])
		$_SESSION["errorMessage"] = "Invalid Credentials";

	header("Location: ./index.php");
	exit();	
}	
?>