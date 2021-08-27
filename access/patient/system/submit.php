<!-- Post doctor's data to Database -->
		<?php
		session_start();
		$rid = $_SESSION["RID"];
		$sid = $_SESSION["SID"];
		

		require_once 'dbConn.php';
			
			if(isset($_POST['btnEnd'])){
				
				$delete = "DELETE FROM priority_queue WHERE RID='$rid' or sessionId='$sid'";

				unset($_SESSION["SID"]);
				unset($_SESSION["TID"]);
				
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
				
				if(mysqli_query($conn,$delete)){
					header('location: ./index.php');
				}else {
					header('location: ./index.php');
				}
	
			}


		?>