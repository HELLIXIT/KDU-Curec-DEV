<?php
	session_start();
	if(!isset($_SESSION["loggedInPat"])){
		header("location: ../");
	}
?>