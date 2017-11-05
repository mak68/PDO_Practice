<?php
	$servername = "sql2.njit.edu";
	$username = "mak68";
	$password ="AEZ4mNaJP";
	$dbname = "mak68";	
	
	
try {
	$conn = new PDO ("mysql:host = $servername, dbname=$dbname, $username,
	$password");
	 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected Successfully <br>";
	}
	
catch (PDOException $e) {
	echo "Connection failed: " . $e-> getMessage();
	}

?>
