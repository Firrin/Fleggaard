<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fleggaard trailerudlejning</title>
    <link rel="stylesheet" href="css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>

<header>
  <a href="index.html"></a><img class="logo" src="images/logo.png" alt="logo">
  <h1 class="header_h1">Trailer Booking</h1>
  <img class="logo hidden" src="../images/logo.png">
</header>
<h2 class="heading__priser">PRISER OG STØRRELSER</h2>

<div class="container__priser">

<p>Trailer type:</p>
<p>Lastvægt</p>
<p>Totalvægt</p>
<p>Mål</p>
<p>Pris</p>
<p>Depositum</p>

<p class="opentrailer">Åben trailer:</p>
<p class="opentrailer">327 kg</p>
<p class="opentrailer">500 kg</p>
<p class="opentrailer">205 x 128 x 40</p>
<p class="opentrailer">xxx</p>
<p class="opentrailer">250,-</p>

<p class="closedtrailer">Lukket trailer:</p>
<p class="closedtrailer">325 kg</p>
<p class="closedtrailer">750 kg</p>
<p class="closedtrailer">258 x 128 x 125</p>
<p class="closedtrailer">xxx</p>
<p class="closedtrailer">250,-</p>

</div>

<h2 class="heading">Udlejningssted</h2>

<select required class="Udlejningssted">
  <option value="Aarhus">Aarhus</option>
  <option value="Kolding">Kolding</option>
  <option value="Skanderborg">Skanderborg</option>
  <option value="Vejle">Vejle</option>
</select>


<h2 class="heading">Dato</h2>


<input id="datetime" class="dato" value="">

<div class="container__trailer">

<img src="images/2.png" alt="">
<img src="images/2.png" alt="">

</div>
<div class="button">
<button class="btn">Vælg</button>
<button class="btn">Vælg</button>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="javascript/jquery.datetimepicker.full.js"></script>
<script> $("#datetime").datetimepicker({
    step: 15 });</script>

<?php
    // Get all types from the database
    	include('classes/database.php');
    	$database = new Database;
    	$database->connect();

    	// Select all types
    	$sql = "SELECT * FROM booking";
    	$roster = $database->query($sql);
    ?>

    <main>
        <h1 class="text_center">Oplysninger</h1>
        <h2 class="text_center">Indtast personlige oplysninger</h2>

    <section class="booking_grid_container">
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
    </section>
    </main>
  </body>
</html>
