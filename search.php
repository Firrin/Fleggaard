<?php
	include 'classes/header.php';
?>
<main>
	<h2>Søg booking</h2>
	<form action="search.php" method="POST">
		<input type="text" name="search" placeholder="Søg">
		<button type="submit" name="submit-search">Søg</button>
	</form>
</main>
<article class="admin_grid">
  <p>ID</p>
  <p>Navn</p>
  <p>Nummer</p>
  <p>Mail</p>
  <p>Adresse</p>
  <p>By</p>
  <p>Postnummer</p>
  <p>Trailer Type</p>
  <p>Udlejningssted</p>
  <p>Afhentnings dato</p>
</article>

<?php
  if (isset($_POST['submit-search'])) {
      $search = mysqli_real_escape_string($conn, $_POST['search']);
      $sql = "SELECT * FROM booking WHERE Navn LIKE '%$search%' OR Nummer LIKE '$search' OR Adresse LIKE '%$search%' OR Mail LIKE '$search' OR Hjemby LIKE '%$search%' OR Dato LIKE '%$search%' ";
      $result = mysqli_query($conn, $sql);
      $queryResult = mysqli_num_rows($result);

      if ($queryResult > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
						echo "<div class='admin_grid'>
									<p>".$row['ID']."</p>
									<p>".$row['Navn']."</p>
									<p>".$row['Nummer']."</p>
									<p>".$row['Mail']."</p>
									<p>".$row['Adresse']."</p>
									<p>".$row['Hjemby']."</p>
									<p>".$row['Post_nummer']."</p>
									<p>".$row['Trailer']."</p>
									<p>".$row['Udlejningssted']."</p>
									<p>".$row['Dato']."</p>
					</div>";
          }
      } else {
        echo "Der var ingen kunde der matchede din søgning!";
      }
  }
?>
