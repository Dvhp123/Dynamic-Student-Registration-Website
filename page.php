<?php
	$con = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($con,"dbStudent");
	$StudentId = $_POST["StudentId"];
	$StudentFirstName = $_POST["StudentFirstName"];
	$StudentLastName = $_POST["StudentLastName"];
	$StudentAddress = $_POST["StudentAddress"];
	$StudentContact = $_POST["StudentContact"];
	$StudentBranch = $_POST["StudentBranch"];
	
	$insertQuery = "INSERT INTO tbStudent(StudentId, StudentFirstName, StudentLastName, StudentAddress, StudentContact,StudentBranch) VALUES ('$StudentId','$StudentFirstName','$StudentLastName','$StudentAddress','$StudentContact','$StudentBranch')";
	
	$result = mysqli_query($con,$insertQuery);
	
	if($result == TRUE)
	{
		echo "Record inserted successfully";
	}
	else
	{
		echo "Error: " . "" . mysqli_error($con);
		echo "Something gone wrong";
	}
?>
