<?php

$query = "SELECT * FROM accounts WHERE id <6";
$statement = $dbh->prepare($query);
$statement->execute();
$results= $statement->fetchAll();
$statement->closeCursor();
$acct = $statement-> rowCount();
echo "Results";

?>
