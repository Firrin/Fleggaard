<!DOCTYPE html>
<html>
<head>
	<title>processing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

	// check what is received through POST
	//var_dump($_POST); die();
	include('classes/database.php');
	$database = new Database;
	$database->connect();


	//- - - Add new booking - - -

	// First, prepare the SQL
	$sql = "INSERT INTO booking (
							Navn,
							Nummer,
							Mail,
							Adresse,
							Hjemby,
							Post_nummer
						)
			VALUES (?,?,?,?,?,?)";
	// Secondly, add values
	$values = array(
		$_POST['Navn'],
		$_POST['Nummer'],
		$_POST['Mail'],
		$_POST['Adresse'],
		$_POST['Hjemby'],
		$_POST['Post_nummer'],
	);

	// Call prepared function to execute the above
	$id = $database->prepared($sql,$values);


?>
<p class="notice success">Din bestilling er nu registreret
	<a href="add_new.php" class="notice">Tilbage</a>
</p>
</body>
</html>
