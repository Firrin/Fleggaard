<!DOCTYPE html>
<html>
<head>
	<title>Add new</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
// Get all types from the database
	include('classes/database.php');
	$database = new Database;
	$database->connect();

	// Select all types
	$sql = "SELECT * FROM booking";
	$roster = $database->query($sql);
?>

  <form action="process.php" method="post">
  	<label for="Navn">Navn</label>
  	<input type="text" name="Navn" placeholder="eks. Peter Jensen">

  	<label for="Nummer">Telefon nummer</label>
  	<input type="text" name="Nummer" placeholder="eks. 12345678">

  	<label for="Mail">E-mail</label>
  	<input type="text" name="Mail" placeholder="eks. peter.jensen@mail.dk">

  	<label for="Adresse">Adresse</label>
  	<input type="text" name="Adresse" placeholder="eks. Risdalsvej 46">

		<label for="Hjemby">By</label>
  	<input type="text" name="Hjemby" placeholder="eks. Aarhus">

		<label for="Post_nummer">Post nummer</label>
  	<input type="text" name="Post_nummer" placeholder="eks. 8000">

  	<input type="submit" name="submit" value="Næste">
  </form>
</body>
</html>
