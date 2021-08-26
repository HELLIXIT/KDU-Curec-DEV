<?php
	session_start();
	if(isset($_SESSION["loggedInPat"])){
		header("location: ../../selfassesment.html");
	}else{
		header("location: ../../signin.html");
	}
?>