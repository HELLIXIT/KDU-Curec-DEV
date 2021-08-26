<?php
	require_once './d_b_connect.php';
	
	require_once("./PHP/vendor/autoload.php");

    use OpenTok\OpenTok;

    $apiKey = "46665872";
    $apiSecret = "1072db3cd6bc2e0a6d194a98d4a3995857944cb4";

    $opentok = new OpenTok($apiKey, $apiSecret);

	function create_user($nic,$password){
		require_once './d_b_connect.php';
        $hashed = password_hash($password, PASSWORD_BCRYPT);
		$sql = "INSERT INTO login(Username, Password) VALUES ('$nic', '$hashed')";
		
		if(mysqli_query($conn,$sql)){
            $last_id = $conn->lastInsertId();
            return $last_id;		
		}else{
			$error = mysqli_error($conn);
			header('location: ../');
		}	
		
        
    }
	
	try{
		if(isset($_POST['signup']))
		{
			$name=$_POST['name'];
			$contactnumber=$_POST['contactnumber'];
			$bloodgroup=$_POST['bloodgroup'];
			$hometown=$_POST['hometown'];
			$mohoffice=$_POST['mohoffice'];
			$nic=$_POST['nic'];
			$password=$_POST['password'];
			$confpassword=$_POST['confpassword'];
			
			$familyID = "0"; //global familyID
			$gender = "gender";
			$age = "age";
			$Location_lat = "Location_lat";
			$Location_lan = "Location_lan";
			$MOID = 1;
			$LID = 0;
			
			if($password==$confpassword){
				//$LID = create_user($nic,$password);
				$hashed = password_hash($password, PASSWORD_BCRYPT);
				$sql = "INSERT INTO login(Username, Password) VALUES ('$nic', '$hashed')";
				
				if(mysqli_query($conn,$sql)){
					$LID = $conn->insert_id;	
				}else{
					$error = mysqli_error($conn);
					header('location: ../signup.html');
				}
				echo $LID;
				$sql2 = "INSERT INTO member(FID, Name, NIC, Gender, Age, Bloodtype, Location_lat, Location_lan, City, phone, LID, MOID) VALUES ('$familyID', '$name', '$nic', '$gender', '$age', '$bloodgroup', '$Location_lat', '$Location_lan', '$hometown', '$contactnumber', '$LID', '$MOID')";
				if(mysqli_query($conn,$sql2)){
					header('location: ../signin.html');
				}else{
					$error = mysqli_error($conn);
					header('location: ../signup.html');
				}
			}
		}
	}catch(Exception $e){
			header('location: ../signup.html');
	}

	try{
		if(isset($_POST['signin']))
		{
			$nic=$_POST['nic'];
			$password=$_POST['password'];
			
			$result = $conn->query("SELECT MID, Name, NIC, Gender, Age, Bloodtype, City, phone FROM member WHERE NIC='$nic'");
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$mid = $row['MID']; 
					$namesaved = $row['Name']; 
					$nicsaved = $row['NIC'];  
					$gendersaved = $row['Gender'];  
					$agesaved = $row['Age'];  
					$bloodtypesaved = $row['Bloodtype'];  
					$citysaved = $row['City']; 
					$phonesaved = $row['phone']; 
				}
			}
			$result = $conn->query("SELECT Username, Password FROM login WHERE Username='$nic'");
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$usernamesaved = $row['Username'];
					$passsaved = $row['Password'];
				}
			}
			
			if(password_verify($password, $passsaved)){
				session_start();
				$_SESSION["mid"] = $mid;
				$_SESSION["namesaved"] = $namesaved;
				$_SESSION["nicsaved"] = $nicsaved;
				$_SESSION["gendersaved"] = $gendersaved;
				$_SESSION["agesaved"] = $agesaved;
				$_SESSION["bloodtypesaved"] = $bloodtypesaved;
				$_SESSION["citysaved"] = $citysaved;
				$_SESSION["phonesaved"] = $phonesaved;
				$_SESSION["loggedInPat"] = "loggedInPat";
				header('location: ./patient/system/');
			}else{
				header('location: ../signin.html');
			}
				
		}else{
			//header('location: ../signin.html');
		}
	}catch(Exception $e){
		header('location: ../signin.html');
	}
	
	try{
		if(isset($_POST['assess']))
		{
			session_start();
			
			$fever=$_POST['fever'];
			$cough=$_POST['cough'];
			$sorethroat=$_POST['sorethroat'];
			$cold=$_POST['cold'];
			$difficultyinbreathing=$_POST['difficultyinbreathing'];
			$bodyaches=$_POST['bodyaches'];
			$lossofsmell=$_POST['lossofsmell'];
			$diarrhoea=$_POST['diarrhoea'];
			$urineoutput=$_POST['urineoutput'];
			
			$travelabroad=$_POST['travelabroad'];
			$traveldate=$_POST['traveldate'];
			$covid19patient=$_POST['covid19patient'];
			$comefromabroad=$_POST['comefromabroad'];
			$livinginriskarea=$_POST['livinginriskarea'];
			$directedquarantinecamp=$_POST['directedquarantinecamp'];
			$employedinquarantinecamp=$_POST['employedinquarantinecamp'];
			
			$heartdisease=$_POST['heartdisease'];
			$bloodpressure=$_POST['bloodpressure'];
			$diabetes=$_POST['diabetes'];
			$lungdisease=$_POST['lungdisease'];
			$otherdiseases=$_POST['otherdiseases'];
			
			$calldoctor = true;
			$MID = $_SESSION["mid"];
			$SID = 0;
			$RID = "";
			$priority = 0;
			
			$sql = "INSERT INTO record(MID, SID, fever, cough, soreThroat, difficultBreathe, bodyArchPain, cold, lossOfSmell, diarrhoea, urineOutput, ArriveFromAbroad, dateifYes, contactSuspect, personAbroad, personHighrisk, personQuarantine, personWorkQuarantine, heartDiseace, bloodPressure, Diabetes, LungDisease, OtherDisease, priority) VALUES ('$MID','$SID','$fever','$cough','$sorethroat','$difficultyinbreathing','$bodyaches','$cold','$lossofsmell','$diarrhoea','$urineoutput','$travelabroad',$traveldate,'$covid19patient', '$comefromabroad','$livinginriskarea','$directedquarantinecamp','$employedinquarantinecamp','$heartdisease','$bloodpressure','$diabetes','$lungdisease', '$otherdiseases', '$priority')";
			if(mysqli_query($conn,$sql)){
				$RID = $conn->insert_id;	
			}else{
				$error = mysqli_error($conn);
				header('location: ../selfassesment.html');
			}
			
			if(isset($calldoctor)){

				$session = $opentok->createSession();
				$sessionId = $session->getSessionId();
				$token1 = $opentok->generateToken($sessionId);
				$token2 = $opentok->generateToken($sessionId);

				$myObj = new \stdClass();
				$myObj->SessionId = $sessionId;
				$myObj->TokenId1 = $token1;

				$myJSON = json_encode($myObj);
				
				$sql = "INSERT INTO priority_queue(RID, priority, status, sessionId, docToken) VALUES ('$RID','$priority',1,'$sessionId','$token2')";
				echo $myJSON;
				if(mysqli_query($conn,$sql)){
					$_SESSION["sessionId"] = $sessionId;
					$_SESSION["RID"] = $RID;
					$_SESSION["token1"] = $token1;
					$_SESSION["priority"] = $priority;
					
					header('location: ./patient/system/contact.php');
				}else{
					$error = mysqli_error($conn);
					header('location: ../selfassesment.html');
				}
	
				

			}
			
			
		}
	}catch(Exception $e){
		header('location: ../signin.html');
	}
?>
