<?php


if (isset($_POST['submit'])) {

	include_once 'db_connection.php';

	
	$personEmail = mysqli_real_escape_string($conn, $_POST['personEmail']);
	$personPassword = mysqli_real_escape_string($conn, $_POST['personPassword']);
	
	
	//Error handlers
	//Check for empty fields
	if ( empty($personEmail) || empty($personPassword)) {
		header("Location: ../login.php?login=empty");
		exit();
	} else {

			//Check if email is valid
			if (!filter_var($personEmail, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../login.php?login=email");
				exit();
			}
			else {
				
					//Hashing the password
				$hashedPwd = password_hash($personPassword, PASSWORD_DEFAULT);
					//Insert the user into the database
			$sql = "SELECT * FROM person WHERE email='$personEmail' password='$hashedPwd'";
			$result = mysqli_query($conn, $sql);
			header("Location: ../dipper.php");
			
}
}
}

    else {
	      header("Location: ../login.php?error");
	exit();
}		
 
?>