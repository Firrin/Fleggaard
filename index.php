<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fleggaard trailerudlejning</title>
    <!-- favicon start -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
      <!-- favicon slut

     -->
       <!--https://plugins.jquery.com/datetimepicker/ -->
    <link rel="stylesheet" href="css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="css/styles.css">
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

<header>
  <img class="logo" src="images/logo.png" alt="logo">
  <h1 class="header_h1">Trailer Booking</h1>
  <a href="admin.php">Admin login</a>
</header>

<!-- Priser og størrelser start -->
<h2 class="heading__priser">PRISER OG STØRRELSER</h2>

<div class="container__priser">
<p class="trailerinfo">Trailer type:</p>
<p class="trailerinfo">Lastvægt</p>
<p class="trailerinfo">Totalvægt</p>
<p class="trailerinfo">Mål</p>
<p class="trailerinfo">Pris</p>
<p class="trailerinfo">Depositum</p>

<p class="lilletrailer">Lille trailer:</p>
<p class="lilletrailer">225 kg</p>
<p class="lilletrailer">400 kg</p>
<p class="lilletrailer">165 x 124 x 29</p>
<p class="lilletrailer">xxx</p>
<p class="lilletrailer">250,-</p>

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
<!-- Priser og størrelser slut -->

<!-- Punkt 1 valg af udlejningssted start -->
<section class="booking_grid_container">
  <form action="process.php" method="post">
<h2 class="heading">1. Vælg et udlejningssted</h2>

<select required class="Udlejningssted" name="Udlejningssted">
  <option selected value="">Vælg</option>
  <option value="Aalborg">Aalborg</option>
  <option value="Randers">Randers</option>
  <option value="Aarhus">Aarhus</option>
  <option value="Skanderborg">Skanderborg</option>
  <option value="Horsens">Horsens</option>
  <option value="Vejle">Vejle</option>
  <option value="Kolding">Kolding</option>
  <option value="Aabenraa">Aabenraa</option>
</select>
<!-- Punkt 1 valg af udlejningssted slut -->


<!-- Google map -->
<div id="map"></div>

<!-- punkt 2. valg af dato for afhentning -->
<div class="date">
<h2>2. Vælg en dato for afhentning:</h2>

<input id="datetime" class="dato" Name="Dato" placeholder="">
</div>

<!-- punkt 2. valg af dato for slut -->


<!-- Punkt 3. valg af trailertype start -->

<h2 class="trailertype">3. Vælg din trailertype:</h2>

<div class="radiobuttons__select">
<select required class="" name="Trailer">
  <option selected value="0">Vælg</option>
  <option value="1">Lille trailer</option>
  <option value="2">Stor trailer</option>
  <option value="3">Lukket trailer</option>
</select>
</div>



<div class="container__trailer">

     <img src="images/lilletrailer.png" alt="trailer_1.png">
    <img src="images/stortrailer.png" alt="trailer_2.png">
    <img src="images/lukkettrailer.png" alt="trailer_3.png">
  </div>

<div class="trailervalg">

  <h3>Lille trailer </h3>
  <h3>Stor trailer</h3>
  <h3>Lukket trailer </h3>
</div>
<div class="trailer__info">


<p>Lastvægt: 325 <br> Totalvægt: 750 <br> Mål: 258 x 128 x 125</p>
<p>Lastvægt: 327kg <br> Totalvægt: 500kg <br> Mål: 285 x 128 x 40</p>
 <p>Lastvægt: 225kg <br> Totalvægt: 400kg <br> Mål: 165 x 124 x 29</p>
</div>
<!-- Punkt 3. valg af trailertype slut -->


<!--form og send knap start -->
    <main>
        <h1 class="">Oplysninger</h1>
        <h2 class="">4. Indtast personlige oplysninger</h2>

      <form action="process.php" method="post">
      	<label  for="Navn">Navn:</label>
      	<input required type="text" name="Navn" placeholder="eks. Peter Jensen">

      	<label for="Nummer">Telefon nummer:</label>
      	<input type="text" pattern=".{8,8}" required title="Telefon skal indeholde 8 cifre" name="Nummer" placeholder="eks. 12345678">

      	<label for="Mail">E-mail:</label>
      	<input required type="email" name="Mail" placeholder="eks. peter.jensen@mail.dk">

      	<label for="Adresse">Adresse:</label>
      	<input required type="text" name="Adresse" placeholder="eks. Risdalsvej 46">

    		<label for="Hjemby">By:</label>
      	<input required type="text" name="Hjemby" placeholder="eks. Aarhus">

    		<label for="Post_nummer">Post nummer:</label>
      	<input required type="tel" pattern=".{4,4}" title="Postnumre skal inde holder 4 cifre" name="Post_nummer" placeholder="eks. 8000">

      	<input type="submit" name="submit" value="Send">
      </form>

    </main>
<!--form og send knap slut -->

<script type="text/javascript" src="javascript/script.js">

</script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChEruppDeQDYm0rvHc0Z7J72cfhfzkfmk&callback=initMap">
    </script>



    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/jquery.datetimepicker.full.js"></script>
    <script> $("#datetime").datetimepicker({
        step: 15 });</script>

  </body>
</html>
