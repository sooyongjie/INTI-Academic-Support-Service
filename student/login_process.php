<?php
include("./func/func.php");

if (!empty($_POST["Login"])) {
	
	session_start();
	$email = $_POST["getEmail"];
	$password = $_POST["getPass"];
	
	$getUser = select("*", "user","WHERE username = '".$email."'");

	if($email == $getUser[0]['username'] && $password == $getUser[0]['password'])
	{
		//require_once ("home.php");
		$_SESSION["successMessage"] = "Welcome";
	}
	else if($email != $getUser[0]['username'] || $password != $getUser[0]['password'])
		$_SESSION["errorMessage"] = "Invalid Credentials";

	header("Location: ./index.php");
	exit();	
}	
?>