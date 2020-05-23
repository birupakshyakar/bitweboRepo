<?php
  	include 'connection/database_connection.php';
	$conn = OpenCon();
  	$target_dir = "assets/pdf/";
	$target_file = $target_dir . basename($_FILES["pdf_file"]["name"]);	
	$filename = $_FILES["pdf_file"]["name"];	
    move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file);
    $description = $_REQUEST['caption'];
    $subject = $_REQUEST['subject'];
	$sql = "insert into pdf_details(description,pdf_file_name,subject) values('$description','$filename','$subject')";
	
	$result = mysqli_query($conn, $sql);
	
	if($result)
	{
		echo "success";
	}
	else
	{
		echo "error";
	}    
?>
