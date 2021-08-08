<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['user_type'] = $row['user_type'];
            	$user_type = $_SESSION['user_type'];
if($user_type == "administrator"){
	
	header("Location: /imaun-hosptail/controlpanel/admin/adminpage.php");
	

}

if($user_type == "contact"){
	
	header("Location: /imaun-hosptail/controlpanel/admin/contact_us.php");
	
}
if($user_type == "training"){

	header("Location: /imaun-hosptail/controlpanel/admin/adminata.php");
	// echo "mm";

}
if($user_type == "personal"){
	
	header("Location: /imaun-hosptail/controlpanel/admin/adminpersonalexper.php");
	

}
if($user_type == "internalcomminaction"){
	
	header("Location: /imaun-hosptail/controlpanel/admin/admininternalcomminaction.php");
	

}
if($user_type == "medical_director
"){
	
	header("Location: /imaun-hosptail/controlpanel/admin/adminshiftdoctors.php");
	

}
if($user_type =="adminpatient
"){
	
	header("Location: /Login-System-hosptail/index.php");
	

}
if($user_type =="report_medical
"){
	
	header("Location: /adminreport.php");
}

if($user_type =="app_appointment
"){
	
	header("Location: /adminAppointments.php");
}
if ($user_type == null or $user_type ==""){
	header("Location: index.php?error=@@@@ ");
	 
  }


          
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: /index.php");
	exit();
}
