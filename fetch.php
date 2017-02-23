<html>
	<head>
	<title>Retrieve data from database </title>
	</head>
	<body>

	<?php
	// Connect to database server
	mysql_connect("localhost", "root", "") or die (mysql_error ());

	// Select database
	mysql_select_db("mydb") or die(mysql_error());

	// SQL query
	$query = "SELECT * FROM registered_users";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($query);
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
	while($row = mysql_fetch_array($rs)) {

	   // Write the value of the column FirstName (which is now in the array $row)
	   
	  echo $row['first_name'] . " " . $row['last_name'] ." " . $row['user_name'] ." " . $row['email'] ." " . $row['gender'] . "<br />";

	  }

	// Close the database connection
	mysql_close();
	?>
	</body>
	</html>