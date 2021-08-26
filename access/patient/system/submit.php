<!-- Post doctor's data to Database -->
		<?php
		session_start();
		$rid = $_SESSION["RID"];
		$sid = $_SESSION["SID"];
		

		require_once 'dbConn.php';
			
			if(isset($_POST['btnEnd'])){
				
				$delete = "DELETE FROM priority_queue WHERE RID='$rid' or sessionId='$sid'";

				unset($_SESSION["RID"]);
				unset($_SESSION["SID"]);
				unset($_SESSION["TID"]);
				if(mysqli_query($conn,$delete)){
					header('location: index.php');
				}else {
					header('location: index.php');
				}
	
			}


		?>