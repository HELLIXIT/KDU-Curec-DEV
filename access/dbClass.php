<?php
	require_once './d_b_connect.php';

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
					header('location: ../');
				}
				echo $LID;
				$sql2 = "INSERT INTO member(FID, Name, NIC, Gender, Age, Bloodtype, Location_lat, Location_lan, City, phone, LID, MOID) VALUES ('$familyID', '$name', '$nic', '$gender', '$age', '$bloodgroup', '$Location_lat', '$Location_lan', '$hometown', '$contactnumber', '$LID', '$MOID')";
				if(mysqli_query($conn,$sql2)){
					header('location: ../signin.html');
				}else{
					$error = mysqli_error($conn);
					header('location: ../');
				}
			}
		}
	}catch(Exception $e){
			header('location: ../');
	}

?>
