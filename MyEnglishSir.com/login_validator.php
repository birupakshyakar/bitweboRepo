<?php
  	include 'connection/database_connection.php';
	$conn = OpenCon();
	session_start();
	$user_id = $_POST["userid"];
	$password = $_POST["password"];
	//echo "user_id: ".$user_id.",password: ".$password;
	$sql = "select password, user_type from login_details where userid = '$user_id'";
	//echo $sql;
	$result = mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	//echo $row['password'] ;
	if($row)
	{
			if($password == $row['password']){
		/*echo 'success';*/
				$output = array(						
						"user_type" => $row['user_type'],
						"message" => "success"
				);
				
				$_SESSION['user_type'] = $row["user_type"];				
				echo json_encode($output);
			}
			else{
				$output = array(						
						"message" => "error"
				);
				echo json_encode($output);
			}
	}
	else{
		$output = array(				
				"message" => "error"
		);
		echo json_encode($output);
	}

?>