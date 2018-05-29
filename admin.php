<!DOCTYPE html>
<html>
<head>
	<title>Fleggaard trailerudlejning!</title>
	<!-- favicon start -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
		<!-- favicon slut -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
	<?php

	// ensure that php errors are displayed
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


		// Include and initiate the database class (you only have to do this once)
		include('classes/database.php');
		$database = new Database;
		$database->connect();
	?>
	<header>
		<img class="logo" src="images/logo.png" alt="logo">
		<h1 class="header_h1">Trailer Booking Management</h1>
		<a href="index.php">Hjem</a>
	</header>
<!-- Øverste navne til kolonnerne-->
	<article class="admin_grid">
		<p>ID</p>
		<p>Navn</p>
		<p>Nummer</p>
		<p>Mail</p>
		<p>Adresse</p>
		<p>By</p>
		<p>Postnummer</p>
		<p>Trailer</p>
		<p>Udlejningssted</p>
		<p>Afhentnings dato</p>
	</article>
<?php




	// Get all from tables Booking
	$bookings = $database->query('SELECT *	FROM booking');



  // Loop through all Bookings
	foreach ($bookings as $booking) {
		?>


		<article class="admin_grid">
			<p><?php echo $booking['ID'];?></p>
			<p><?php echo $booking['Navn'];?></p>
			<p><?php echo $booking['Nummer'];?></p>
			<p><?php echo $booking['Mail'];?></p>
      <p><?php echo $booking['Adresse'];?></p>
			<p><?php echo $booking['Hjemby'];?></p>
			<p><?php echo $booking['Post_nummer'];?></p>
			<p><?php echo $booking['Trailer'];?></p>
			<p><?php echo $booking['Udlejningssted'];?></p>
			<p><?php echo $booking['Dato'];?></p>
		</article>


		<?php
}
?>
</body>
</html>
