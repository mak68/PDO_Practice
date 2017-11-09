<?php
$dsn = 'mysql:dbname=mak68;host=sql2.njit.edu';
$user = 'mak68';
$password = 'AEZ4mNaJP';

try {

    $dbh = new PDO($dsn, $user, $password);
 //      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully<br>";
} 

	catch (PDOException $e) {
  	echo 'Connection failed: ' . $e->getMessage();
	  }


//$query = "SELECT * FROM accounts WHERE id = 6";
//$statement = $db->prepare($query);
//$statement->execute();
//$results= $statement->fetchAll();
//$statement->closeCursor();
//$acct = $statement-> rowCount();
//echo "Results";


?>
