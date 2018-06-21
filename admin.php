<?php
	include 'classes/header.php';
?>



<main>
	<h2>Søg booking</h2>
	<form action="search.php" method="POST">
		<input type="text" name="search" placeholder="Search">
		<button type="submit" name="submit-search">Search</button>
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
  <p>Trailer</p>
  <p>Udlejningssted</p>
  <p>Afhentnings dato</p>
</article>
<!-- <div>
		<?php
			$sql = "SELECT * FROM booking";
			$result = mysqli_query($conn, $sql);
			$queryResults = mysqli_num_rows($result);

			echo "There are ".$queryResults." results!";

			if ($queryResults > 0) {
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
			}
		?>


</div> -->

</body>
</html>
