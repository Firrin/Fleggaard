<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fleggaard Trailerudlejning - Lej en trailer til dit næste besøg</title>
    <!-- favicon start -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
      <!-- favicon slut-->
      <meta name="description" content="Fleggaard trailerudlejning. Lej en gratis trailer hos os,
      hent den i en by nær dig og handel i en af Fleggaards butikker og aflever den tilbage samme sted.">
       <!--https://plugins.jquery.com/datetimepicker/ -->
    <link rel="stylesheet" href="css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>


    <header>
      <a href="https://www.fleggaard.dk/?locId=729"> <img class="logo" src="images/logo.png" alt="logo"></a>
      <h1 class="header_h1">Gratis* trailer Booking</h1>
      <a href="admin.php">Admin login</a>
    </header>


<?php
    // Get all types from the database
      include('classes/database.php');
      $database = new Database;
      $database->connect();

      // Select all types
      $sql = "SELECT * FROM booking";
      $roster = $database->query($sql);
    ?>

<!-- Priser og størrelser start -->
<h2 class="heading__priser">PRISER OG STØRRELSER</h2>
<p class="heading__priser__asterisk">*Forudsætter køb hos en af Fleggaards grænsebutikker på over 500 kr </p>
<div class="container__priser__grid">

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
<p class="lilletrailer">0*,-</p>
<p class="lilletrailer">500,-</p>

<p class="opentrailer">Åben trailer:</p>
<p class="opentrailer">327 kg</p>
<p class="opentrailer">500 kg</p>
<p class="opentrailer">205 x 128 x 40</p>
<p class="opentrailer">0*,-</p>
<p class="opentrailer">500,-</p>

<p class="closedtrailer">Lukket trailer:</p>
<p class="closedtrailer">325 kg</p>
<p class="closedtrailer">750 kg</p>
<p class="closedtrailer">258 x 128 x 125</p>
<p class="closedtrailer">0*,-</p>
<p class="closedtrailer">500,-</p>

</div>
<!-- Priser og størrelser slut -->

<!-- Punkt 1 valg af udlejningssted start -->
<section class="booking_grid_container">
  <form action="process.php" method="post">
<h2 class="heading">1. Vælg et udlejningssted</h2>

<select required name="Udlejningssted">
  <option selected disabled value="">Vælg</option>
  <option value="Aalborg">Aalborg</option>
  <option value="Randers">Randers</option>
  <option value="Aarhus">Aarhus</option>
  <option value="Skanderborg">Skanderborg</option>
  <option value="Horsens">Horsens</option>
  <option value="Vejle">Vejle</option>
  <option value="Kolding">Kolding</option>
  <option value="Aabenraa">Aabenraa</option>
</select>


<div class="heading">
<h3>Åbningstider</h3>
<P>Mandag til søndag 06:00 - 18:00</p>
<P>Helligdage 06:00 - 12:00</p>
</div>
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
<div class="trailertype__container">
<h2 class="trailertype__h2">3. Vælg din trailertype:</h2>


<select required class="trailertype__select" name="Trailer">
  <option selected disabled value="">Vælg</option>
  <option value="1">Lille trailer</option>
  <option value="2">Stor trailer</option>
  <option value="3">Lukket trailer</option>
</select>
</div>



<div class="container__trailer__images">

     <img src="images/lilletrailer.png" alt="Lille trailertype">
    <img src="images/stortrailer.png" alt="Stor trailertype">
    <img src="images/lukkettrailer.png" alt="Lukket trailer">
  </div>

<div class="trailervalg__names">

  <h3>Lille trailer </h3>
  <h3>Stor trailer</h3>
  <h3>Lukket trailer </h3>
</div>
<div class="trailervalg__description">


<p>Lastvægt: 325 <br> Totalvægt: 750 <br> Mål: 258 x 128 x 125</p>
<p>Lastvægt: 327kg <br> Totalvægt: 500kg <br> Mål: 285 x 128 x 40</p>
 <p>Lastvægt: 225kg <br> Totalvægt: 400kg <br> Mål: 165 x 124 x 29</p>
</div>
<!-- Punkt 3. valg af trailertype slut -->


<!--form og send knap start -->
    <main>
        <h1>Oplysninger</h1>
        <h2>4. Indtast personlige oplysninger</h2>


      	<label for="Navn">Navn:</label>
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
