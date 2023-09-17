<?php

$servername = "localhost";
$username = "root";
$password = "sql123";
$databasename = "faculty_user";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `persons`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo "Roll No: " .
				$row["email"]. " - Email : " .
				$row["name"]. "|| Name :  " .
				$row["f_id"]. " || Faculty ID : ".
                $row["department"]." || deapartment : ".
                $row["neg_r"]."|| Negative Rewards : ";
		}
	}
	else {
		echo "0 results";
	}

$conn->close();

?>
