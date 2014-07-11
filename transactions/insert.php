<?php
	$con=mysqli_connect("example.com","peter","abc123","my_db");
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// escape variables for security
	$date = mysqli_real_escape_string($con, $_POST['Date']);
	$description = mysqli_real_escape_string($con, $_POST['Description']);
	$amount = mysqli_real_escape_string($con, $_POST['Amount']);
	$category = mysqli_real_escape_string($con, $_POST['Category']);
	$subCategory = mysqli_real_escape_string($con, $_POST['SubCategory']);

	$sql="INSERT INTO Transactions (Date, Description, Amount, Category, SubCategory)
	VALUES ('$date', '$description', '$amount', '$category', '$subCategory')";

	if (!mysqli_query($con,$sql)) {
	  die('Error: ' . mysqli_error($con));
	}
	echo "1 record added";

	mysqli_close($con);
?> 
