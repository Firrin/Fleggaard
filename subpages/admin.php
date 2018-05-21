<!DOCTYPE html>
<html>
<head>
	<title>Fleggaard trailerudlejning!</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<?php

	// ensure that php errors are displayed
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


		// Include and initiate the database class (you only have to do this once)
		include('../classes/database.php');
		$database = new Database;
		$database->connect();
	?>

<?php




	// Get all from tables roster and likes
	$bookings = $database->query('SELECT *	FROM booking');



  // Loop through all titles
	foreach ($bookings as $booking) {
		?>

		<article>
			<h3>Navn: <?php echo $booking['Navn'];?></h3>
      <p>Nummer: <?php echo $booking['Nummer'];?></p>
			<p>Mail: <?php echo $booking['Mail'];?></p>
      <p>Adresse: <?php echo $booking['Adresse'];?></p>
			<p>Hjemby: <?php echo $booking['Hjemby'];?></p>
			<p>Post_nummer: <?php echo $booking['Post_nummer'];?></p>
			<p>Trailer: <?php echo $booking['Trailer'];?></p>
			<p>Udlejningssted: <?php echo $booking['Udlejningssted'];?></p>
			<p>Dato: <?php echo $booking['Dato'];?></p>
			</a>
		</article>


		<?php
}
?>
</body>
</html>
