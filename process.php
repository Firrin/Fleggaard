<!DOCTYPE html>
<html>
<head>
	<title>processing</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body class="process">
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
							Post_nummer,
							Trailer,
							Udlejningssted,
							Dato
						)
			VALUES (?,?,?,?,?,?,?,?,?)";
	// Secondly, add values
	$values = array(
		$_POST['Navn'],
		$_POST['Nummer'],
		$_POST['Mail'],
		$_POST['Adresse'],
		$_POST['Hjemby'],
		$_POST['Post_nummer'],
		$_POST['Trailer'],
		$_POST['Udlejningssted'],
		$_POST['Dato'],
	);

	// Call prepared function to execute the above
	$booking = $database->prepared($sql,$values);
?>


   <!-- Success besked -->
	 <div class="procress__suceess">
		 <p class="success">Din booking er nu registreret, oplys navn ved afhentning. Start din shopping nu på
		 	<a href="https://www.fleggaard.dk" class="notice">Fleggaard.dk</a>
			<div id="fb-root"></div>
			<div class="fb-share-button" data-href="http://sebmorgen.dk/Fleggaard/index.php" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsebmorgen.dk%2FFleggaard%2Findex.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Del</a></div>
</p>
</div>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
