<?php
	session_start();
	try{
		if(isset($_POST['unset'])){
			unset($_SESSION["fever"]);
			unset($_SESSION["cough"]);
			unset($_SESSION["sorethroat"]);
			unset($_SESSION["cold"]);
			unset($_SESSION["difficultyinbreathing"]);
			unset($_SESSION["bodyaches"]);
			unset($_SESSION["lossofsmell"]);
			unset($_SESSION["diarrhoea"]);
			unset($_SESSION["urineoutput"]);
			
			unset($_SESSION["travelabroad"]);
			unset($_SESSION["traveldate"]);
			unset($_SESSION["covid19patient"]);
			unset($_SESSION["comefromabroad"]);
			unset($_SESSION["livinginriskarea"]);
			unset($_SESSION["directedquarantinecamp"]);
			unset($_SESSION["employedinquarantinecamp"]);
			
			unset($_SESSION["heartdisease"]);
			unset($_SESSION["bloodpressure"]);
			unset($_SESSION["diabetes"]);
			unset($_SESSION["lungdisease"]);
			unset($_SESSION["otherdiseases"]);
			
			unset($_SESSION["RID"]);
			unset($_SESSION["priority"]);
			
			header('location: ./index.php');
		}else{
			header('location: ./index.php');
		}
	}catch(Exception $e){}
	

?>