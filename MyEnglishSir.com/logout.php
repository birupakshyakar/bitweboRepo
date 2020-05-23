<?php
	session_start();
	echo "current value before Unset".$_SESSION['user_type'];
	//$_SESSION['user_type']='';
	unset($_SESSION['user_type']);
	session_destroy();
	//echo "current value after unset".$_SESSION['user_type'];
	header("Location: index.html");

?>