<?php 
	$conn = mysqli_connect("localhost", "root", "", "myportfolio");
	if(!$conn){
		echo "Not Connected";
	}



	$id = $_GET['id'];

	$result = mysqli_query($conn, "DELETE FROM projects WHERE id = $id");
 ?>