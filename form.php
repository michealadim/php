<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	
	 $email = $_POST['email'];
	 $sql = "INSERT INTO emails (email)
	 VALUES ('$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>