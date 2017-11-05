<?php
$dsn = 'mysql:dbname=mak68;host=sql2.njit.edu';
$user = 'mak68';
$password = 'AEZ4mNaJP';

try {

    $dbh = new PDO($dsn, $user, $password);
       $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
} 

	catch (PDOException $e) {
  	echo 'Connection failed: ' . $e->getMessage();
	  }

?>
