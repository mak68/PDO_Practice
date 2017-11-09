<html>

<title> PDO Practice </title>

<body> 

<h3> PDO Practice- Results </h3>
<?php
include 'database.php';
include 'query.php';
    
	    if(count($results) > 0)
	    {

echo "<table border=\"2\" bordercolor=\"green\">
    <tr align= \"center\">
	<th>ID</th>
	<th>Email</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Phone</th>
	<th>Birthday</th>
	<th>Gender</th>
	<th>Password</th>
    </tr>";

foreach ($results as $row) {
	
echo "<tr>
	<td>".$row["id"]."</td>
	<td>".$row["email"]."</td>
	<td>".$row["fname"]."</td>
	<td>".$row["lname"]."</td>
	<td>".$row["phone"]."</td>
	<td>".$row["birthday"]."</td>
	<td>".$row["gender"]."</td>
	<td>".$row["password"]."</td>
	
   </tr>";
	}
	}
				?>

</body>

</html>

