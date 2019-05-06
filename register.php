<?php

	include "init.php";

	$username = $_POST["username"];
	$email = $_POST["email"];
	$name = $_POST["name"];
	$pw = $_POST["pw"];
	$pw2 = $_POST["pw2"];

if ($pw != $pw2){
	redirect("reg_login.php? Senhas não podem ser diferentes");
}

add_user($username, $email, md5($pw), $name);
redirect("reg_login.php? Usuario cadastrado");

?>

