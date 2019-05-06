<?php
	include "init.php";

	$username = $_POST["username"];
	$pw = $_POST["pw"];

	if(login($username, $pw)){
		redirect("index-logado.php");
	}

	else if (redirect("index-logado.php?=Usuario ou senha incorretos"));

?>

