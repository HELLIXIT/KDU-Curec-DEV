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
			
			
			$MID = $_SESSION["mid"];
			$SID = 0;
			$RID = "";
			$priority = 1;
			
			$sql = "INSERT INTO record(MID, SID, fever, cough, soreThroat, difficultBreathe, bodyArchPain, cold, lossOfSmell, diarrhoea, urineOutput, ArriveFromAbroad, dateifYes, contactSuspect, personAbroad, personHighrisk, personQuarantine, personWorkQuarantine, heartDiseace, bloodPressure, Diabetes, LungDisease, OtherDisease, priority) VALUES ('$MID','$SID','$fever','$cough','$sorethroat','$difficultyinbreathing','$bodyaches','$cold','$lossofsmell','$diarrhoea','$urineoutput','$travelabroad',$traveldate,'$covid19patient', '$comefromabroad','$livinginriskarea','$directedquarantinecamp','$employedinquarantinecamp','$heartdisease','$bloodpressure','$diabetes','$lungdisease', '$otherdiseases', '$priority')";
			if(mysqli_query($conn,$sql)){
				$RID = $conn->insert_id;	
			}else{
				$error = mysqli_error($conn);
				header('location: ../selfassesment.html');
			}
			
			//priority algo - begin
			$totpoints = 0;
			
			//Level 1
			if($difficultyinbreathing=='Yes')
				{$totpoints = $totpoints + 10;}
		
			if($fever=='Yes' || $lossofsmell=='Yes' || $urineoutput=='Reduced')
				{$totpoints = $totpoints + 5;}
			
			if($sorethroat=='Yes' || $cough=='Yes')
				{$totpoints = $totpoints + 2;}
			
			if($bodyaches=='Yes')
				{$totpoints = $totpoints + 1;}
			
			//Level 2
			if($travelabroad=='Yes' || $covid19patient=='Yes' || $directedquarantinecamp=='Yes')
				{$totpoints = $totpoints + 10;}
			
			if($employedinquarantinecamp=='Yes' || $livinginriskarea=='Yes' || $comefromabroad=='Yes')
				{$totpoints = $totpoints + 5;}	
			
			//Level 3
			if($heartdisease=='Yes' || $bloodpressure=='Yes' || $diabetes=='Yes' || $lungdisease=='Yes' || $otherdiseases=='Yes')
				{$totpoints = $totpoints + 10;}
			
			
			//Assess
			if ($totpoints > 30) {
				$priority = "4";
			} else if ($totpoints > 20) {
				$priority = "3";
			} else if ($totpoints > 10) {
				$priority = "2";
			} else {
				$priority = "1";
			}
			
			//Posting dada for sessions if patient needed to call
			$_SESSION["fever"] = $fever;
			$_SESSION["cough"] = $cough;
			$_SESSION["sorethroat"] = $sorethroat;
			$_SESSION["cold"] = $cold;
			$_SESSION["difficultyinbreathing"] = $difficultyinbreathing;
			$_SESSION["bodyaches"] = $bodyaches;
			$_SESSION["lossofsmell"] = $lossofsmell;
			$_SESSION["diarrhoea"] = $diarrhoea;
			$_SESSION["urineoutput"] = $urineoutput;
			
			$_SESSION["travelabroad"] = $travelabroad;
			$_SESSION["traveldate"] = $traveldate;
			$_SESSION["covid19patient"] = $covid19patient;
			$_SESSION["comefromabroad"] = $comefromabroad;
			$_SESSION["livinginriskarea"] = $livinginriskarea;
			$_SESSION["directedquarantinecamp"] = $directedquarantinecamp;
			$_SESSION["employedinquarantinecamp"] = $employedinquarantinecamp;
			
			$_SESSION["heartdisease"] = $heartdisease;
			$_SESSION["bloodpressure"] = $bloodpressure;
			$_SESSION["diabetes"] = $diabetes;
			$_SESSION["lungdisease"] = $lungdisease;
			$_SESSION["otherdiseases"] = $otherdiseases;
			
			$_SESSION["RID"] = $RID;
			$_SESSION["priority"] = $priority;
			
			//priority algo - end
			
			header('location: ./patient/system/results.php');
			
			//Moved to allow patient to select call doctor or not
			/*$calldoctor = true;
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
			}*/
			
			
		}
	}catch(Exception $e){
		header('location: ../signin.html');
	}
	
	
	try{
		if(isset($_POST['calldoctor']))
		{
			session_start();
			
			$fever=$_SESSION["fever"];
			$cough=$_SESSION["cough"];
			$sorethroat=$_SESSION["sorethroat"];
			$cold=$_SESSION["cold"];
			$difficultyinbreathing=$_SESSION["difficultyinbreathing"];
			$bodyaches=$_SESSION["bodyaches"];
			$lossofsmell=$_SESSION["lossofsmell"];
			$diarrhoea=$_SESSION["diarrhoea"];
			$urineoutput=$_SESSION["urineoutput"];
			
			$travelabroad=$_SESSION["travelabroad"];
			$traveldate=$_SESSION["traveldate"];
			$covid19patient=$_SESSION["covid19patient"];
			$comefromabroad=$_SESSION["comefromabroad"];
			$livinginriskarea=$_SESSION["livinginriskarea"];
			$directedquarantinecamp=$_SESSION["directedquarantinecamp"];
			$employedinquarantinecamp=$_SESSION["employedinquarantinecamp"];
			
			$heartdisease=$_SESSION["heartdisease"];
			$bloodpressure=$_SESSION["bloodpressure"];
			$diabetes=$_SESSION["diabetes"];
			$lungdisease=$_SESSION["lungdisease"];
			$otherdiseases=$_SESSION["otherdiseases"];
			
			$calldoctor = false;
			$MID = $_SESSION["mid"];
			$SID = 0;
			$RID = $_SESSION["RID"];
			$priority = $_SESSION["priority"];
			
			$calldoctor = true;
			
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
